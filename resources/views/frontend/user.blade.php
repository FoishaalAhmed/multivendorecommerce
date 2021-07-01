@extends('layouts.app')

@section('frontend-section')

    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 detail-body my-5">
                <div class="heading1 mt-2">&nbsp;&nbsp;User Login</div>
                @include('includes.error')
                <form class="mt-2" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary bg-core" name="submit" value="Login">
                        <span class="float-right"><small>Not registered? <a href="{{ route('user-registration') }}">Click Here</a></small></span>
                    </div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>

@endsection
