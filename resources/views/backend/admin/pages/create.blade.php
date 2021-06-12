

@extends('backend.layouts.app')
@section('title', 'New Page')
@section('backend-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{__('New Page')}}</h3>
                <div class="card-tools">
					<a href="{{route('admin.pages.index')}}" class="btn btn-sm bg-teal"><i class="fas fa-list-alt"></i> {{__('Pages')}}</a>
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
                <form action="{{route('admin.pages.store')}}" method="post" id="PageForm" enctype="multipart/form-data">
					@csrf
                    <div class="row">
						<div class="col-md-9">
							<div class="form-group">
								<div class="col-md-12">
									<label>{{__('Name')}}</label>
									<input type="text" name="name" class="form-control" placeholder="{{__('Name')}}" required="" autocomplete="off" value="{{old('name')}}" id="name"/>
								</div>
							</div>
							<!-- /.form-group -->
							<div class="form-group">
								<div class="col-md-12">
									<label>{{__('Slug')}}</label>
									<input type="text" name="slug" class="form-control" placeholder="{{__('Slug')}}" required="" autocomplete="off" value="{{old('slug')}}" id="slug"/>
								</div>
							</div>
							<!-- /.form-group -->
							<div class="form-group">
								<div class="col-md-12">
									<label>{{__('Content')}}</label>
									<textarea id="summernote" name="text">
										{{old('text')}}
									</textarea>
								</div>
							</div>
							<!-- /.form-group -->
							
						</div>
						<div class="col-md-3">
							<div class="card card-primary card-outline">
								<div class="card-body box-profile">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="//placehold.it/200x200" alt="Page profile picture" id="pagePhoto">
										
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
      $('#PageForm').validate({
        rules: {
          	name: {
            	required: true,
            	maxlength: 255,
          	},
		  	slug: {
				required: true,
				maxlength: 355,
		  	},
          	text: {
            	required: true	
          	},
        },

        messages: {
          	name: {
            	required: "Please enter Your name",
            	maxlength: "Your name can be 255 characters long max",
				lettersonly: "Please enter alphabetical characters"
          	},
          	slug: {
            	required: "Please enter Your slug",
            	maxlength: "Your slug can be 355 characters long max",
				lettersonly: "Please enter alphabetical characters"
          	},
          	text: {
            	required: "Please write some content",
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
                $('#pagePhoto')
                .attr('src', e.target.result)
                .width(100)
                .height(100);
            };
        
            reader.readAsDataURL(input.files[0]);
        }
    }

	$("#name").keyup(function(){
        
		var name = $("#name").val();

		var slug = (name.replace(/[^a-zA-Z0-9]+/g, '-')).toLowerCase();
		$("#slug").val(slug);

	});
</script>
@endsection

