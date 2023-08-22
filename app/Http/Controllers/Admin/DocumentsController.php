<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentsRequest;
use App\Models\Documents;
use App\Models\DocumentVersions;
use League\CommonMark\Node\Block\Document;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Documents::getAllDocs();
        return view('backend.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentsRequest $request)
    {
        Documents::storeData($request->validated());
        return redirect()->route('app.documents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $document = Documents::where('id',$id)->first();
        return view('backend.documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $previousData = Documents::find($id)->select('id as document_id','title','current_version as version', 'body_content', 'tags_content')->get()->toArray();
        DocumentVersions::storeDocuments($previousData[0]);
        Documents::updateData($request->except('_token','_method'), $id);
        return redirect()->route('app.documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = Documents::find($id);
        if( $document->delete() )
            return redirect()->back()->with( 'success', 'Documents deleted successfully.' );

        return redirect()->back()->with( 'error', 'Failed to delete Documents.' );
    }
}
