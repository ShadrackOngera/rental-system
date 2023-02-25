@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <h5>Location:&nbsp;<strong>{{ $offer->location }}</strong></h5>
                    <h5>House Type:&nbsp;<strong>{{ $offer->house_type }}</strong></h5>
                    <h5>Seller Name:&nbsp;<strong>{{ $offer->user->name }}</strong></h5>
                    <h5>Outright Price:&nbsp;<strong>{{ number_format($offer->price) }}</strong></h5>
                    <h5>Sold By {{ $offer->relationship }}</h5>
                    <h5><span class="text-capitalize">{{ $offer->relationship }}</span> Contacts: <strong>{{ $offer->contact }}</strong></h5>
                </div>
            </div>

            <hr>
            <div class="mb-5" style="min-height: 400px">
                <h4 class="text-decoration-underline">Offer Description</h4>
                <p>
                    {!! nl2br(e($offer->description)) !!}
                </p>
            </div>

            <div>
                <div class="card">
                    <div class="card-header text-center h3 fw-bold">Photo of the Land</div>
                    <img src="{{ asset('storage/'.$offer->house_image) }}" alt="Title-Deed" class="img-fluid">
                </div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <a href="{{ route('home') }}" class="btn btn-info text-white">Back</a>
            </div>
            @if(isset(Auth::user()->id) && Auth::user()->id == $offer->user_id)
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <div class="d-grid gap-2">
                        <a href="{{ route('posts.edit', $offer->id)  }}" class="btn btn-primary text-white">
                            Edit
                        </a>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <form action="{{route('posts.destroy',$offer->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
@endsection
