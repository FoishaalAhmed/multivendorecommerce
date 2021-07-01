@extends('layouts.app')

@section('frontend-section')

    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 detail-body my-5">
                <div class="heading1 mt-2">&nbsp;&nbsp;User Registration</div>
                @include('includes.error')
                <form class="mt-2" method="post" action="{{ route('user-register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required="" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required="" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone" required="" value="{{ old('phone') }}">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary bg-core" name="submit" value="Register">
                        <span class="float-right"><small>Already registered? <a href="{{ route('user-login') }}">Click Here</a></small></span>
                    </div>

                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>

@endsection
