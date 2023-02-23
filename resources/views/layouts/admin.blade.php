@extends('layouts.app')
@section('content')
    <div class="banner-show">
        <div class="container">
            <div class="text-center text-uppercase align-self-center">
                <h2 class="text-indigo py-5 fw-bolder">{{ $post->title }}</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <h5>Location:&nbsp;<strong>{{ $offer->location }}</strong></h5>
        <h5>Cost: Ksh {{ $offer->price }} {{ $offer->price_length }}</h5>
        <h5>Posted By: {{ $offer->relationship }}</h5>
    </div>
@endsection
