@extends('layouts.admin')
@section('content')
    <div class="container">
        <div>
            <div class="container">
                <div class="text-center text-uppercase">
                    <h1>Create Land Offer</h1>
                </div>
            </div>
        </div>
        <div class="text-center mb-3">
            <h1>For your post to be published, You have to pay to the Mpesa till below <span class="fw-bold">(5870505)</span></h1>
            <img src="{{ asset('images/pics/till.jpg') }}" alt="5870505" class="img-fluid">
        </div>
        <div class="container">
            <form action="{{ route('offer.store') }}" method="POST" enctype="multipart/form-data" class="mb-3">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Title" required>
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="location" placeholder="Location" required>
                    <label for="floatingInput">Location</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="house_type" placeholder="House Type" required>
                    <label for="floatingInput">House Type</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="price" placeholder="Price" required>
                    <label for="floatingInput">Price</label>
                </div>

                <label for="floatingInput" class="text-muted">Price Length</label>
                <select class="form-select mb-3 py-3" aria-label="Default select example" name="price_length" required>
                    <option value="Per Night">Per Night</option>
                    <option value="Per Month">Per Month</option>
                    <option value="Per Year">Per Year</option>
                </select>

                <label for="floatingInput" class="text-muted">Relationship</label>
                <select class="form-select mb-3 py-3" aria-label="Default select example" name="relationship" required>
                    <option value="Broker">Broker</option>
                    <option value="Owner">Owner</option>
                </select>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Description" name="description" id="floatingTextarea2" style="height: 200px" required></textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="contact" placeholder="Contact" required>
                    <label for="floatingInput">Contact</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="payment_code" placeholder="Payment Code" required>
                    <label for="floatingInput">Your Payment Code</label>
                    <small class="form-text">The Expected Payment Code is from M-pesa</small>
                </div>

                <div class="mb-3">
                    <label for="floatingInput" class="text-muted">House Photo</label>
                    <input type="file" class="form-control" id="floatingInput" name="house_image" placeholder="House Photo">
                </div>

                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-success text-white">
                        Submit
                    </button>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('home') }}" class="btn btn-primary text-white w-100">Cancel</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('home') }}" class="btn btn-info text-white w-100">Home Page</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="py-5"></div>
    </div>
@endsection
