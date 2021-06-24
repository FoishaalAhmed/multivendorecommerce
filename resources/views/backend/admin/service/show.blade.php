@extends('backend.layouts.app')
@section('title', 'Service Show')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Service Show') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.services.index') }}" class="btn btn-sm bg-teal"><i
                                class="fas fa-list-alt"></i> {{ __('Services') }}</a>
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
                    <form>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Name') }}</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ __('Name') }}" required="" autocomplete="off"
                                            value="{{ $service->name }}" id="name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Phone') }}</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="{{ __('Phone') }}" required="" autocomplete="off"
                                            value="{{ $service->phone }}" id="phone" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Address') }}</label>
                                        <textarea class="form-control" placeholder="{{ __('Address') }}" required="" autocomplete="off" name="address"> {{ $service->address }} </textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->

								<div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Product') }}</label>
                                        <input type="text" name="product" class="form-control"
                                            placeholder="{{ __('Product') }}" required="" autocomplete="off"
                                            value="{{ $service->product }}" id="product" />
                                    </div>
                                </div>
                                <!-- /.form-group -->

								<div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Detail') }}</label>
                                        <textarea class="form-control" placeholder="{{ __('Detail') }}" required="" autocomplete="off" name="detail"> {{ $service->detail }} </textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->

                            </div>
                            <div class="col-md-3">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="{{ asset($service->photo) }}" alt="Service profile picture" id="ServicePhoto">

                                        </div>
                                        <br>
                                        <input type="file" name="photo" onchange="readPicture(this)" style="width: 100%">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
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
