@extends('backend.layouts.app')
@section('title', 'Contact')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Contact') }}</h3>
                    <div class="card-tools">
                        
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('includes.error')
                    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="post" id="contactForm"
                        enctype="multipart/form-data">
                        @csrf
						@method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('E-mail Address') }}</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="{{ __('E-mail Address') }}" autocomplete="off"
                                            value="{{ $contact->email }}" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Phone') }}</label>
                                        <input type="text" name="phone" class="form-control" placeholder="{{ __('Phone') }}" autocomplete="off" value="{{ $contact->phone }}" required=""> 
                                    </div>
                                </div>
										<!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Facebook') }}</label>
                                        <input type="text" name="facebook" class="form-control" placeholder="{{ __('Facebook') }}" autocomplete="off" value="{{ $contact->facebook }}"> 
                                    </div>
                                </div>
										<!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Twitter') }}</label>
                                        <input type="text" name="twitter" class="form-control" placeholder="{{ __('Twitter') }}" autocomplete="off" value="{{ $contact->twitter }}"> 
                                    </div>
                                </div>
										<!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Instagram') }}</label>
                                        <input type="text" name="instagram" class="form-control" placeholder="{{ __('Instagram') }}" autocomplete="off" value="{{ $contact->instagram }}"> 
                                    </div>
                                </div>
										<!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Pinterest') }}</label>
                                        <input type="text" name="pinterest" class="form-control" placeholder="{{ __('Pinterest') }}" autocomplete="off" value="{{ $contact->pinterest }}"> 
                                    </div>
                                </div>
										<!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Address') }}</label>
                                        <textarea name="address" class="form-control" placeholder="{{ __('Address') }}" autocomplete="off" rows="3" required=""> {{ $contact->address }} </textarea>
                                    </div>
                                </div>
										<!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                    <button type="submit" class="btn btn-sm bg-blue">{{ __('Update') }}</button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
