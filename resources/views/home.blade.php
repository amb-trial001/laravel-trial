@extends('layout.app')
@section('title', 'home')
@section('pageCss')
    <style>
        .wrap {
            display: flex;
            width: 80%;
            margin: 0 auto;
            height: 100vh;
            flex-direction: column;
            align-items: center;
        }

        .inner {
            width: 80%;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text {
            width: 50%;
            height: 50vh;
            text-align: center;
        }
    </style>
@endsection
@section('contents')
    <div class="wrap">
        <h3>Home</h3>
        <div class="inner">
            <div class="text">初期ページです</div>
        </div>
    </div>
@endsection
@section('pageScript')
@endsection
