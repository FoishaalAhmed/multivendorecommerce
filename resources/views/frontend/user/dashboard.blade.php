@extends('layouts.app')
@section('frontend-section')
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-2">
                    <div class="card">
                        <div class="px-2 py-2">
                            @include('includes.error')
                            <div class="font-18">Profile Information</div>
                            <div class="row pt-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="name" class="form-control font-13"
                                            value="{{ auth()->user()->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control font-13"
                                            value="{{ auth()->user()->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile No.</label>
                                        <input type="text" name="phone" class="form-control font-13" placeholder="+880"
                                            required value="{{ auth()->user()->phone }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Full Address</label>
                                        <textarea name="address" class="form-control" rows="2" required>{{ auth()->user()->address }}</textarea>
                                    </div>
                                    <input type="submit" name="submit" class="btn bg-core btn-block text-white font-13"
                                value="Update Profile Info">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-2">
                <div class="card">
                    <div class="px-2 py-2">
                        <div class="row pt-3">
                            <div class="col-lg-6">
                                <div class="font-18">Change Password</div>
                                <form method="post" action="{{ route('password.change') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" name="old_password" class="form-control font-13" value=""
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control font-13" value=""
                                            required>
                                    </div>
                                    <input type="submit" name="submit" class="btn bg-core btn-block text-white font-13"
                                value="Change Password">
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form method="post" action="{{ route('profile') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="font-18">Change Photo</div>
                                    <div class="form-group">
                                        <img src="{{ asset(auth()->user()->photo) }}" alt="" style="width: 100px; height:100px;">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo" required>
                                    </div>
                                    <input type="submit" name="submit" class="btn bg-core btn-block text-white font-13"
                                value="Change Photo">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
