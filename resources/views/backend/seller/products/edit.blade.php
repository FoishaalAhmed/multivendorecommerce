

@extends('backend.layouts.app')
@section('title', 'Product Update')
@section('backend-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{__('Product Update')}}</h3>
                <div class="card-tools">
					<a href="{{route('seller.products.index')}}" class="btn btn-sm bg-teal"><i class="fas fa-list-alt"></i> {{__('Products')}}</a>
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
                <form action="{{route('seller.products.update', $product->id)}}" method="post" id="userForm" enctype="multipart/form-data">
					@csrf
					@method('PUT')
                    <div class="row">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Name')}}</label>
											<input type="text" name="name" class="form-control" placeholder="{{__('Name')}}" required="" autocomplete="off" value="{{$product->name}}" id="name"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-6">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Slug')}}</label>
											<input type="text" name="slug" class="form-control" placeholder="{{__('Slug')}}" required="" autocomplete="off" value="{{$product->slug}}" id="slug"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
                                <div class="col-md-6">
									<div class="form-group">
										<label>{{__('Category')}}</label>
										<select class="form-control select2" style="width: 100%;" name="category_id" required="">
											
											@foreach ($categories as $item)
												<option value="{{$item->id}}" 
													@if ($product->category_id == $item->id) {{ 'selected' }}
													@endif
												>{{$item->name}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
                                <div class="col-md-6">
									<div class="form-group">
										<label>{{__('Sub Category')}}</label>
										<select class="form-control select2" style="width: 100%;" name="subcategory_id" required="">
											
											@foreach ($subCategories as $item)
												<option value="{{$item->id}}"
													@if ($product->subcategory_id == $item->id) {{ 'selected' }}
													@endif
												>{{$item->name}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
                                <div class="col-md-6">
									<div class="form-group">
										<label>{{__('Child Category')}}</label>
										<select class="form-control select2" style="width: 100%;" name="child_category_id" required="">
											
											@foreach ($childCategories as $item)
												<option value="{{$item->id}}"
													@if ($product->child_category_id == $item->id) {{ 'selected' }}
													@endif
												>{{$item->name}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
                                <div class="col-md-6">
									<div class="form-group">
										<label>{{__('Brand')}}</label>
										<select class="form-control select2" style="width: 100%;" name="brand_id" required="">
											
											@foreach ($brands as $item)
												<option value="{{$item->id}}"
													@if ($product->brand_id == $item->id) {{ 'selected' }}
													@endif
												>{{$item->name}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
                                <div class="col-md-6">
									<div class="form-group">
										<label>{{__('Color')}}</label>
										<select class="form-control select2" style="width: 100%;" name="color_id[]" multiple>
											
											@foreach ($colors as $item)
												<option value="{{$item->id}}">{{$item->name}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
                                <div class="col-md-6">
									<div class="form-group">
										<label>{{__('Size')}}</label>
										<select class="form-control select2" style="width: 100%;" name="size_id[]" multiple>
											
											@foreach ($sizes as $item)
												<option value="{{$item->id}}">{{$item->name}}</option>
											@endforeach
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-6">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Price')}}</label>
											<input type="number" name="price" class="form-control" placeholder="{{__('Price')}}" required="" autocomplete="off" value="{{$product->price}}" step="0.01"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-6">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Old Price')}}</label>
											<input type="number" name="old_price" class="form-control" placeholder="{{__('Old Price')}}" autocomplete="off" value="{{$product->old_price}}" step="0.01"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-6">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Discount Percent')}}</label>
											<input type="text" name="discount_percent" class="form-control" placeholder="{{__('Discount Percent')}}" autocomplete="off" value="{{$product->discount_percent}}" step="0.01"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-6">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Discount Amount')}}</label>
											<input type="text" name="discount" class="form-control" placeholder="{{__('Discount Amount')}}"  autocomplete="off" value="{{$product->discount}}" step="0.01"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Description')}}</label>
											<textarea id="summernote" name="description">
												{{$product->description}}
											</textarea>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
                                <div class="col-md-12">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Tags')}}</label>
											<textarea type="text" name="tags" class="form-control" placeholder="{{__('Tags')}}" rows="3" autocomplete="off">{{$product->tags}}</textarea>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-primary card-outline">
                                <h3 class="card-title">{{__('Display Photo')}}</h3>
								<div class="card-body box-profile">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="{{ asset($product->display) }}" alt="User profile picture" id="userPhoto">
										
									</div>
									<br>
									<input type="file" name="display" onchange="readPicture(this)" style="width: 100%" >
								</div>
								<!-- /.card-body -->
							</div>
							<div class="card card-primary card-outline">
                                <h3 class="card-title">{{__('More Photo')}}</h3>
								<div class="card-body box-profile">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="//placehold.it/200x200" alt="User profile picture">
										
									</div>
									<br>
									<input type="file" name="photo[]" style="width: 100%" multiple>
								</div>
								<!-- /.card-body -->
							</div>
						</div>
                        <div class="col-md-12">
                            <center>
                                <button type="reset" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                <button type="submit" class="btn btn-sm bg-blue">{{__('Update')}}</button>
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

    $("#name").keyup(function() {

		var name = $("#name").val();
		var slug = (name.replace(/ /g, '-')).toLowerCase();
		$("#slug").val(slug);

	});

</script>
@endsection

