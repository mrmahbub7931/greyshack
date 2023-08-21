@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

        </div>
    </div>
    <div class="row justify-content-center my2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ul>
                        @forelse ($documents->chunk(1) as $documents)
                            @foreach ($documents as $document)
                                <li><a href="">{{ $document->title }}</a></li>
                            @endforeach
                        @empty
                            <li><a href="javascript:void(0)">No title found!</a></li>
                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
