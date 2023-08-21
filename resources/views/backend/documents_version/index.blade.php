@extends('layouts.backend.master')

@section('content')
    <a href="{{ route('app.docsversion.create') }}" class=""><button class="btn btn-info my-2">New Document Version</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Document Title</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td>
                    <a href=""><button class="btn btn-info">Edit</button></a>
                    <a href=""><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>

        </tbody>
    </table>
@endsection
