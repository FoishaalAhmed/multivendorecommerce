@extends('backend.layouts.app')
@section('title', 'Merchant Category Update')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Merchant Category Update') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.merchant-categories.index') }}" class="btn btn-sm bg-teal"><i
                                class="fas fa-list-alt"></i> {{ __('Merchant Categories') }}</a>
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
                    <form action="{{ route('admin.merchant-categories.update', $category->id) }}" method="post" id="userForm"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Category') }}</label>
                                        <input type="text" name="category" class="form-control"
                                            placeholder="{{ __('Category') }}" required="" autocomplete="off"
                                            value="{{ $category->category }}" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Commission') }} ({{ __('In Percentage') }})</label>
                                        <input type="number" name="commission" class="form-control"
                                            placeholder="{{ __('Commission') }}" required="" autocomplete="off"
                                            value="{{ $category->commission }}" step="0.01"/>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Information') }}</label>
										<textarea name="information" class="form-control"
                                            placeholder="{{ __('Information') }}" required="" autocomplete="off" rows="3">{{ $category->information }}</textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->
								<div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Facility') }}</label>
                                        <textarea id="summernote" name="facility">
												{{$category->facility}}
											</textarea>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="{{ asset($category->logo) }}"
                                                alt="User profile picture" id="userPhoto">

                                        </div>
                                        <br>
                                        <input type="file" name="logo" onchange="readPicture(this)" style="width: 100%">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
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
@section('footer')

    <script>

        function readPicture(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#userPhoto')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

		$(function () {
			// Summernote
			$('#summernote').summernote();
		})

    </script>
@endsection
