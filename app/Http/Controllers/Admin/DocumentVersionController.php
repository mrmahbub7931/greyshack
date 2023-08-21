<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentVersionController extends Controller
{
    public function docsversionIndex()
    {
        return view('backend.documents_version.index');
    }

    public function docsversionCreate()
    {
        return view('backend.documents_version.create');
    }
}
