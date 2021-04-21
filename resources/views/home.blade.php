@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1>{{ $msg }}</h1>
        <div class="col-md-8">
            <div class="card">
                @foreach ($posts as $book)
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ $book->message }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
