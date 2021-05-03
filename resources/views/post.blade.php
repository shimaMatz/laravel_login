@extends('layouts.app')

@section('content')

<div class="container-fluid"> 
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-7">
    <h1>師匠を募集</h1>
    </div>
    <div class="col-md-3"></div>
</div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h3 class="card-title">条件で絞り込む</h3>
            <h4 class="card-subtitle mb-2 text-muted">カテゴリ</h4>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <h4 class="card-subtitle mb-2 text-muted">希望金額</h4>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7">
            <div class="card w-85" style="margin-top: 15px; margin-bottom:15px">
            <div class="row no-gutters">
                <div class="col-lg-4">
                <div class="card-body">
                    <h4 class="card-title">伝統工芸の師匠を募集</h4>
                    <p class="card-text">
                    <p>師匠を探すより、師匠を募集するだけで、
                    <span>断然早く希望に近い師匠が見つかります。</span></p>
                </div>
                </div>
                <div class="col-lg-8">
                <img class="card-img" src="{{ asset('images/recruitment_image2.png')}}">
                </div>
            </div>
            </div>

            @foreach ($posts as $post)
            <div class="card w-85" style="margin-top: 15px; margin-bottom:15px">
                <div class="card-body">
                    <h5 class="card-title">師匠募集！！！急募</h5>
                    <p class="card-text">{{ $post->message}}</p>
                    <a href="#" class="btn btn-primary">メッセージを送る</a>
                </div>
            </div>
            @endforeach

        </div>


        <div class="col-sm-1"></div>
    </div>
</div>
@endsection