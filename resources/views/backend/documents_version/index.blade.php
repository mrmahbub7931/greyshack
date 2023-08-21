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
            @forelse ($documentVersions->chunk(4) as $documentVersions)
                @foreach ($documentVersions as $key => $documentVersion)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ getDocumentTitle($documentVersion->document_id)->title; }}</td>
                        <td>{{ \Carbon\Carbon::parse($documentVersion->created_at)->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('app.docsversion.edit', $documentVersion->id) }}"><button class="btn btn-info">Edit</button></a>
                            <a href=""><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
                
            @empty
                <tr>
                    <td colspan="4">No document versions here!</td>
                </tr>
            @endforelse
            

        </tbody>
    </table>
@endsection
