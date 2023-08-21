@extends('layouts.backend.master')

@section('content')
    <div class="documents_create_form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Documents Version Create</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('app.docsversion.store')}}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="ForminputState" class="form-label">Select Documents</label>
                                            <select id="ForminputState" class="form-select" name="document_id">
                                                @forelse ($documents->chunk(4) as $documents)
                                                    <option selected value="">---</option>
                                                    @foreach ($documents as $document)
                                                        <option value="{{ $document->id }}">{{$document->title}}</option>
                                                    @endforeach
                                                @empty
                                                    <option selected value="">No ducments here!</option>
                                                @endforelse
                                                
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="version" class="form-label">Version</label>
                                            <input type="text" class="form-control" placeholder="ex: 1" id="version" name="version">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="body_content">Body Content</label>
                                            {{-- <div class="ckeditor-classic"></div> --}}
                                            <textarea name="body_content" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="tags_content">Tags Content</label>
                                            <textarea name="tags_content" id="" cols="30" rows="10"></textarea>
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
@push('scripts')
<script src="{{ asset('backend/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }}"></script>
@endpush
