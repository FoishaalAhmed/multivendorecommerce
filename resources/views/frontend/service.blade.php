@extends('layouts.app')

@section('frontend-section')

    <div class="container">
        <div class="l5-padd">
            <div class="heading1 mt-2">&nbsp;&nbsp;Servicing</div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                @if (session()->has('message'))
                    
               
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> {{ session('message') }}
                </div>

                @endif
                @include('includes.error')
                <form class="mt-2" method="post" action="{{ route('services.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="cl_name">Name:</label>
                        <input type="text" name="name" id="cl_name" class="form-control" placeholder="Enter your name..." autofocus="" required="" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="cl_mobile">Mobile No:</label>
                        <input type="text" name="phone" id="cl_mobile" class="form-control" placeholder="+880"
                            required="" value="{{ old('phone') }}">
                    </div>
                    <div class="form-group">
                        <label for="cl_address">Address:</label>
                        <textarea name="address" id="address" class="form-control" rows="3" required="">{{ old('address') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cl_pname">Product Name:</label>
                        <input type="text" name="product" id="cl_pname" class="form-control"
                            placeholder="Enter your product name..." required="" value="{{ old('product') }}">
                    </div>
                    <div class="form-group">
                        <label for="cl_pdetails">Product Details:</label>
                        <textarea name="detail" id="cl_pdetails" class="form-control" rows="3" required="">{{ old('detail') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cl_imagee">Upload Product Image:</label>
                        <input type="file" name="photo" id="cl_imagee" class="form-control" />
                    </div>
                    <input type="submit" name="complain" value="Service Request" class="btn bg-core text-white float-right">
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

@endsection
