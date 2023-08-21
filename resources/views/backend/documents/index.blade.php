@extends('layouts.backend.master')

@section('content')
    <a href="{{ route('app.documents.create') }}" class=""><button class="btn btn-info my-2">New Documents</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Current Version</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($documents->chunk(5) as $documents)
                @foreach ($documents as $key => $document)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{ $document->title }}</td>
                        <td>
                            {{ $document->current_version }}
                        </td>
                        <td>
                            @if ($document->status == 1)
                                <button type="button" class="btn btn-subtle-success">Active</button>
                            @else
                                <button type="button" class="btn btn-subtle-danger">Inactive</button>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('app.documents.edit', $document->id) }}"><button class="btn btn-info">Edit</button></a>
                            <a href="{{ route('app.documents.destroy', $document->id) }}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            @empty
            <tr>
                <td colspan="5">No docuemnts found!</td>
            </tr>
            @endforelse
            

        </tbody>
    </table>
@endsection
