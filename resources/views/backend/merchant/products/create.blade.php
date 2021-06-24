@extends('backend.layouts.app')
@section('title', 'New Product')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('New Product') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('merchant.products.index') }}" class="btn btn-sm bg-teal"><i
                                class="fas fa-list-alt"></i> {{ __('Products') }}</a>
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
                    <form action="{{ route('merchant.products.store') }}" method="post" id="userForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Name') }}</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="{{ __('Name') }}" required="" autocomplete="off"
                                                    value="{{ old('name') }}" id="name" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Slug') }}</label>
                                                <input type="text" name="slug" class="form-control"
                                                    placeholder="{{ __('Slug') }}" required="" autocomplete="off"
                                                    value="{{ old('slug') }}" id="slug" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('Category') }}</label>
                                            <select class="form-control select2" style="width: 100%;" name="category_id"
                                                required="" id="category" onchange="getSubCategoryByCategory();">

												<option value="">{{ __('Select Category') }}</option>

                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('Sub Category') }}</label>
                                            <select class="form-control select2" style="width: 100%;" name="subcategory_id"
                                                required="" id="sub_category" onchange="getChildCategoryBySubCategory();">

                                                <option value="">{{ __('Select Category First') }}</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('Child Category') }}</label>
                                            <select class="form-control select2" style="width: 100%;"
                                                name="child_category_id" required="" id="child_category">
												<option value="">{{ __('Select Sub Category First') }}</option>
                                               
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('Brand') }}</label>
                                            <select class="form-control select2" style="width: 100%;" name="brand_id"
                                                required="">

                                                @foreach ($brands as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('Color') }}</label>
                                            <select class="form-control select2" style="width: 100%;" name="colors[]"
                                                multiple>

                                                @foreach ($colors as $item)
                                                    <option value="{{ $item->id }}" @if (old('colors'))
                                                        @if (in_array($item->id, old('colors'))) {{'selected'}} @endif 
                                                    @endif >{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('Size') }}</label>
                                            <select class="form-control select2" style="width: 100%;" name="sizes[]"
                                                multiple>

                                                @foreach ($sizes as $item)
                                                    <option value="{{ $item->id }}" @if (old('sizes'))
                                                        @if (in_array($item->id, old('sizes'))) {{'selected'}} @endif 
                                                    @endif>{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Price') }}</label>
                                                <input type="number" name="price" class="form-control"
                                                    placeholder="{{ __('Price') }}" required="" autocomplete="off"
                                                    value="{{ old('price') }}" step="0.01" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Old Price') }}</label>
                                                <input type="number" name="old_price" class="form-control"
                                                    placeholder="{{ __('Old Price') }}" autocomplete="off"
                                                    value="{{ old('old_price') }}" step="0.01" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Discount Percent') }}</label>
                                                <input type="text" name="discount_percent" class="form-control"
                                                    placeholder="{{ __('Discount Percent') }}" autocomplete="off"
                                                    value="{{ old('discount_percent') }}" step="0.01" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Discount Amount') }}</label>
                                                <input type="text" name="discount" class="form-control"
                                                    placeholder="{{ __('Discount Amount') }}" autocomplete="off"
                                                    value="{{ old('discount') }}" step="0.01" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Description') }}</label>
                                                <textarea id="summernote" name="description">
                {{ old('description') }}
               </textarea>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Tags') }}</label>
                                                <textarea type="text" name="tags" class="form-control"
                                                    placeholder="{{ __('Tags') }}" rows="3"
                                                    autocomplete="off">{{ old('tags') }}</textarea>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-primary card-outline">
                                    <h3 class="card-title">{{ __('Display Photo') }}</h3>
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="//placehold.it/200x200"
                                                alt="User profile picture" id="userPhoto">

                                        </div>
                                        <br>
                                        <input type="file" name="display" onchange="readPicture(this)" style="width: 100%">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <div class="card card-primary card-outline">
                                    <h3 class="card-title">{{ __('More Photo') }}</h3>
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="//placehold.it/200x200"
                                                alt="User profile picture">

                                        </div>
                                        <br>
                                        <input type="file" name="photo[]" style="width: 100%" multiple>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                    <button type="submit" class="btn btn-sm bg-blue">{{ __('Save') }}</button>
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
        $(function() {
            // Summernote
            $('#summernote').summernote();
        })

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

        $("#name").keyup(function() {

            var name = $("#name").val();
            var slug = (name.replace(/ /g, '-')).toLowerCase();
            $("#slug").val(slug);

        });

        function getSubCategoryByCategory() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                }
            });

            let category_id = $('#category').val();
            let category = $('#category option:selected').text();

            $.ajax({

                url: "{{ route('fetch.sub.category') }}",
                method: 'POST',
                data: {
                    'category_id': category_id,
                },
                success: function(data2) {

                    let data = JSON.parse(data2);

                    $('#sub_category').find('option').remove().end().append("<option value=''>Select " +
                        category + "\'s Subcategory</option>");

                    $.each(data, function(i, item) {

                        $("#sub_category").append($('<option>', {
                            value: this.id,
                            text: this.name,
                        }));

                    });

                },

                error: function(error) {

                    console.log(error);
                }
            });
        }

        function getChildCategoryBySubCategory() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                }
            });

            let sub_category_id = $('#sub_category').val();
            let sub_category = $('#sub_category option:selected').text();

            $.ajax({

                url: "{{ route('fetch.child.category') }}",
                method: 'POST',
                data: {
                    'sub_category_id': sub_category_id,
                },
                success: function(data2) {

                    let data = JSON.parse(data2);

                    $('#child_category').find('option').remove().end().append("<option value=''>Select " +
                        sub_category + "\'s Child Category</option>");

                    $.each(data, function(i, item) {

                        $("#child_category").append($('<option>', {
                            value: this.id,
                            text: this.name,
                        }));

                    });

                },

                error: function(error) {

                    console.log(error);
                }
            });
        }

    </script>
@endsection
