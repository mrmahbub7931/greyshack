<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentVersionsRequest;
use App\Models\Documents;
use App\Models\DocumentVersions;
use League\CommonMark\Node\Block\Document;

class DocumentVersionController extends Controller
{
    public function docsversionIndex()
    {
        $documentVersions = DocumentVersions::getDocsVersions();
        return view('backend.documents_version.index', compact('documentVersions'));
    }

    /**
     * Show document version create form
     *
     * @return void
     */
    public function docsversionCreate()
    {
        $documents = Documents::getAllDocs();
        return view('backend.documents_version.create', compact('documents'));
    }

    public function docsversionStore(DocumentVersionsRequest $request)
    {
        DocumentVersions::storeDocuments($request->validated());
        return redirect()->route('app.docsversion.index');
    }

    public function docsversionEdit($id)
    {
        return $id;
    }
}
