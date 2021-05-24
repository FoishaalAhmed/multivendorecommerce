

@extends('backend.layouts.app')
@section('title', 'New User')
@section('backend-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{__('New User')}}</h3>
                <div class="card-tools">
					<a href="{{route('admin.users.index')}}" class="btn btn-sm bg-teal"><i class="fas fa-list-alt"></i> {{__('Users')}}</a>
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
                <form action="{{route('admin.users.store')}}" method="post" id="userForm" enctype="multipart/form-data">
					@csrf
                    <div class="row">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Name')}}</label>
											<input type="text" name="name" class="form-control" placeholder="{{__('Name')}}" required="" autocomplete="off" value="{{old('name')}}"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('E-mail Address')}}</label>
											<input type="email" name="email" class="form-control" placeholder="{{__('E-mail Address')}}" required="" autocomplete="off" value="{{old('email')}}"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Phone')}}</label>
											<input type="text" name="phone" class="form-control" placeholder="{{__('Phone')}}" required="" autocomplete="off" value="{{old('phone')}}"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Password')}}</label>
											<input type="text" name="password" class="form-control" placeholder="{{__('Password')}}" required="" autocomplete="off" id="password"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Password Confirmation')}}</label>
											<input type="text" name="password_confirmation" class="form-control" placeholder="{{__('Password Confirmation')}}" required="" autocomplete="off"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<label>{{__('Role')}}</label>
										<select class="form-control select2" style="width: 100%;" name="role" required="">
											
											@foreach ($roles as $role)
												<option value="{{$role->id}}">{{$role->name}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Address')}}</label>
											<textarea id="summernote" name="address">
												{{old('address')}}
											</textarea>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-primary card-outline">
								<div class="card-body box-profile">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="//placehold.it/200x200" alt="User profile picture" id="userPhoto">
										
									</div>
									<br>
									<input type="file" name="photo" onchange="readPicture(this)" style="width: 100%" >
								</div>
								<!-- /.card-body -->
							</div>
						</div>
                        <div class="col-md-12">
                            <center>
                                <button type="reset" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                <button type="submit" class="btn btn-sm bg-blue">{{__('Save')}}</button>
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
    $(function () {
      $('#userForm').validate({
        rules: {
          	name: {
            	required: true,
            	maxlength: 255,
				lettersonly: true
          	},
		  	email: {
				required: true,
				email: true,
				maxlength: 255,
		  	},
			phone: {
            	required: true,
            	maxlength: 14,
				//alphanumeric: true
          	},
          	password: {
            	required: true,
            	minlength: 8	
          	},
          	password_confirmation: {
            	required: true,
            	minlength: 8,
				equalTo : "#password"	
          	},
          	role: {
            	required: true	
          	},
        },

        messages: {
          	name: {
            	required: "Please enter Your name",
            	maxlength: "Your name can be 255 characters long max",
				lettersonly: "Please enter alphabetical characters"
          	},
			email: {
				required: "Please enter a email address",
				email: "Please enter a vaild email address",
				maxlength: "Your email can be 255 characters long max"
			},
			phone: {
				required: "Please enter your phone number",
				lettersonly: "Please enter alphabetical characters",
				maxlength: "Your email can be 14 characters long max"
			},
          	password: {
            	required: "Please provide a password",
            	minlength: "Your password must be at least 8 characters long"
          	},

          	role: {
            	required: "Please select a role",
          	},
          
        },

        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote();
  })
  function readPicture(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        
            reader.onload = function (e) {
                $('#userPhoto')
                .attr('src', e.target.result)
                .width(100)
                .height(100);
            };
        
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection

