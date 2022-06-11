@extends('layouts.layout')
@section('main')
<div class="container">
    <div class="current-series">
    <h3>current series</h3>
    </div>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="comic">
            <img src="{{$comic['thumb']}}" alt="">
            <p>{{$comic['series']}}</p>
        </div>
        @endforeach
    </div>
    <div class="load-more">
        <h3>load more</h3>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="card-container">
            <img src="./images/buy-comics-digital-comics.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-merchandise.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-subscriptions.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-shop-locator.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-dc-power-visa.svg" alt="">
            <p>digital comics</p>
        </div>
    </div>
</div>
@endsection