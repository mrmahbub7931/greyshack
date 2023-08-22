<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Documents;
use App\Models\DocumentVersions;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Diff\Differ;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Diff\Output\DiffOnlyOutputBuilder;
use SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;
use SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $documents = Documents::getAllDocs();
        return view('home', compact('documents'));
    }

    /**
     * Show documents details page
     *
     * @param [type] $title
     * @return void
     */
    public function docsDetails($title)
    {
        $user = User::find(Auth::user()->id);
        $document = Documents::where('title','LIKE',"%{$title}%")->first();
        $document->users()->attach($user->id);
        DB::table('document_users')->where(['document_id' => $document->id, 'user_id' => $user->id])->update(['last_viewed_version' => $document->current_version]);
        return view('single', compact('document'));
    }

    public function checkDiff($id)
    {
        
        $builder = new DiffOnlyOutputBuilder(
            "- Previous <br> + Current <br>", // custom header
            false                      // do not add line numbers to the diff 
        );
        $differ = new Differ($builder);

        $previousDocument = DocumentVersions::where('document_id',$id)->latest()->first() ?? null;
        $currentDocument = Documents::where('id',$id)->latest()->first() ?? null;
        $diff = $differ->diff([$previousDocument->body_content ?? null, $previousDocument->tags_content ?? null],[$currentDocument->body_content, $currentDocument->tags_content]);
        return view('compare', compact('previousDocument', 'currentDocument', 'diff'));
    }
}
