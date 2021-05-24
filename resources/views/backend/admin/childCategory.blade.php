

@extends('backend.layouts.app')
@section('title', 'Child Categories')
@section('backend-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{__('Child Categories')}}</h3>
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
                @if (isset($childCategory))    
                    <form action="{{route('admin.child-categories.update', $childCategory->id)}}" method="post" id="postForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>{{__('Category')}}</label>
                                    <select class="form-control select2" style="width: 100%;" name="category_id" required="" id="category" onchange="fetchSubCategory()">
                                        
                                        @foreach ($categories as $item)
                                        <option value="{{$item->id}}"
                                            @if ($childCategory->category_id == $item->id) {{'selected'}} @endif
                                            >{{$item->name}} 
                                           
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>{{__('Sub Category')}}</label>
                                    <select class="form-control select2" style="width: 100%;" name="sub_category_id" required="" id="sub_category">
                                        
                                        @foreach ($subCategories as $item)
                                        <option value="{{$item->id}}"
                                            @if ($childCategory->sub_category_id == $item->id) {{'selected'}} @endif
                                            >{{$item->name}} 
                                           
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{__('Name')}}</label>
                                        <input type="text" name="name" class="form-control" placeholder="{{__('Name')}}" required="" autocomplete="off" value="{{$childCategory->name}}"/>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            
                            <div class="col-md-2">
                                <label for=""><br/></label>
                                <button type="submit" class="btn btn-sm bg-teal form-control">{{__('Update')}}</button>
                            </div>
                        </div>
                    </form>
                @else
                    <form action="{{route('admin.child-categories.store')}}" method="post" id="postForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>{{__('Category')}}</label>
                                    <select class="form-control select2" style="width: 100%;" name="category_id" required="" id="category" onchange="fetchSubCategory()">
                                        <option value="">{{ __('Select Category') }}</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>{{__('Sub Category')}}</label>
                                    <select class="form-control select2" style="width: 100%;" name="sub_category_id" required="" id="sub_category">
                                       <option value="">{{ __('Select Category First') }}</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->

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
                            
                            <div class="col-md-2">
                                <label for=""><br/></label>
                                <button type="submit" class="btn btn-sm bg-teal form-control">{{__('Save')}}</button>
                            </div>
                        </div>
                    </form>
                @endif
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10%">{{__('Sl')}}</th>
                                    <th style="width: 25%">{{__('Name')}}</th>
                                    <th style="width: 25%">{{__('Category')}}</th>
                                    <th style="width: 30%">{{__('Sub Category')}}</th>
                                    <th style="width: 10%">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($childCategories as $category)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->category}}</td>
                                        <td>{{$category->sub_category}}</td>
                                        <td>
                                            <a class="btn btn-sm bg-teal" href="{{route('admin.child-categories.edit',[$category->id])}}"><span class="fas fa-edit"></span></a>
                                            <form action="{{route('admin.child-categories.destroy',[$category->id])}}" method="post" style="display: none;" id="delete-form-{{ $category->id}}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            </form>
                                            <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                event.preventDefault();
                                                getElementById('delete-form-{{ $category->id}}').submit();
                                                }else{
                                                event.preventDefault();
                                                }"><span class="fas fa-trash"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
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
        function fetchSubCategory() {

            var category_id = $('#category').val();
            var category = $('#category option:selected').text();

            var url = '{{route("fetch.sub.category")}}';

            $.ajaxSetup({

                headers: {'X-CSRF-Token' : '{{csrf_token()}}'}

            });

            $.ajax({

                url: url,
                method: 'POST',
                data: { 'category_id' : category_id, },

                success: function(data2){

                    var data = JSON.parse(data2);

                    $('#sub_category').find('option').remove().end().append("<option value=''>Select " + category + " Sub Category</option>");

                    $.each(data, function (i, item) {

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
    </script>
    
@endsection

