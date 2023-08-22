@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center my2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $document->title }}</h3>
                    <p>{!! $document->body_content !!}</p>
                    <br>
                    <hr>
                    <p>Tags:</p>
                    <p>{!! $document->tags_content !!}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('docs.diff', $document->id) }}" class="btn btn-primary">Diff Request</a>
                    <a href="{{ url()->previous() }}"><button class="btn btn-primary">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
