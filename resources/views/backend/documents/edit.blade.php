@extends('layouts.backend.master')

@section('content')
    <div class="documents_create_form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h3>Documents Create</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('app.documents.update', $document->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Documents Title" id="title" name="title" value="{{ $document->title }}">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="current_version" class="form-label">Current Version</label>
                                            <input type="text" class="form-control" placeholder="ex: 1" id="current_version" name="current_version" value="{{ $document->current_version }}">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="ForminputState" class="form-label">Status</label>
                                            <select id="ForminputState" class="form-select" name="status">
                                                <option {{ $document->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                                <option {{ $document->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="body_content">Body Content</label>
                                            {{-- <div class="ckeditor-classic"></div> --}}
                                            <textarea name="body_content" id="" cols="30" rows="10">{{ $document->body_content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tags_content">Tags Content</label>
                                            <textarea name="tags_content" id="" cols="30" rows="10">{{ $document->tags_content }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>

                        </div>
                       </div>
                </div>
            </div>
        </div>

    </div>
@endsection
