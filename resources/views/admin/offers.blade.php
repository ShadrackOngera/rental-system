@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Unpublished Offers</h1>

        <div class="row">
            @foreach($offers as $offer)
                <div class="col-sm-4 mb-3">
                    <div class="shadow">
                        <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$offer->id}}">
                            <div class="position-relative">
                                <div class="d-flex justify-content-between">
                                    <small class="text-capitalize">{{ $offer->location }}</small>
                                    <small class="text-capitalize"><span class="fst-italic">20 Downloads</span></small>
                                </div>
                                <img src="{{ asset('storage/'.$offer->house_image) }}" alt="My Work" class="img-fluid w-100">
                                <small class="bg-description translate-middle-x text-capitalize">{{ $offer->description }}</small>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$offer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="position-relative">
                                    <small class="text-capitalize">{{ $offer->location }}</small>
                                    <img src="{{ asset('storage/'.$offer->house_image) }}" alt="My Work" class="img-fluid w-100">
                                    <small class="bg-description translate-middle-x text-capitalize">{{ $offer->description }}</small>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-between my-0 py-0">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">View Offer</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
