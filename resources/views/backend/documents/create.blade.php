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
                            <form action="javascript:void(0);">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Documents Title" id="title">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="current_version" class="form-label">Current Version</label>
                                            <input type="text" class="form-control" placeholder="ex: 1" id="current_version">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="ForminputState" class="form-label">Status</label>
                                            <select id="ForminputState" class="form-select">
                                                <option selected value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->


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
