@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center my2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($previousDocument)
                        <h3>Previous Version</h3>
                        <pre>
                            <p>Previous Version: {{ $previousDocument->version }}</p>
                            <p>Body: {!! $previousDocument->body_content !!}</p>
                            <p>Tags: </p>{!! $previousDocument->tags_content !!}
                        </pre>

                        <h3>Current Version</h3>
                        
                        <pre>
                            <p>Current Version: {{ $currentDocument->current_version }}</p>
                            <p>Body: {!! $currentDocument->body_content !!}</p>
                            <p>Tags: </p>{!! $currentDocument->tags_content !!}
                        </pre>

                        <h3>Changes</h3>
                        <code>
                            {!! $diff !!}
                        </code>
                    @else
                        <h3>There is no changes!</h3>
                    @endif
                    
                </div>
                <div class="card-footer">
                    <a href="{{ url()->previous() }}"><button class="btn btn-primary">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
