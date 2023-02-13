@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mb-3">
                <div class="shadow">
                    <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="position-relative">
                            <div class="d-flex justify-content-between">
                                <small class="text-capitalize">House Type</small>
                                <small class="text-capitalize"><span class="fst-italic">Nairobi</span></small>
                            </div>
                            <img src="{{ asset('images/pics/donate.jpeg') }}" alt="My Work" class="img-fluid w-100">
                            <p class=" mb-0 text-capitalize">Kasarani</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="position-relative">
                            <small class="text-capitalize">Category</small>
                            <img src="{{ asset('images/pics/donate.jpeg') }}" alt="My Work" class="img-fluid w-100">
                            <small class="bg-description translate-middle-x text-capitalize">Descriptions</small>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between my-0 py-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">View Offer</button>
                    </div>
                </div>
            </div>
    </div>
@endsection
