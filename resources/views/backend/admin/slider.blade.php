

@extends('backend.layouts.app')
@section('title', 'Sliders')
@section('backend-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{__('Sliders')}}</h3>
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
                @if (isset($slider))    
                    <form action="{{route('admin.sliders.update', $slider->id)}}" method="post" id="postForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{__('Link')}}</label>
                                        <input type="text" name="link" class="form-control" placeholder="{{__('Link')}}" autocomplete="off" value="{{$slider->link}}"/>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>{{__('Photo')}}</label>
                                    <br>
                                    <input type="file" name="photo" onchange="readPicture(this)">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <label for=""><br/></label>
                                <button type="submit" class="btn btn-sm bg-teal form-control">{{__('Update')}}</button>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <center>
                                    <img src="{{ asset($slider->photo) }}" style="width: 100px; height:100px;" alt="" id="sliderPhoto">
                                </center>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </form>
                @else
                    <form action="{{route('admin.sliders.store')}}" method="post" id="postForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{__('Link')}}</label>
                                        <input type="text" name="link" class="form-control" placeholder="{{__('Link')}}" autocomplete="off" value="{{old('link')}}"/>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>{{__('Photo')}}</label>
                                    <br>
                                    <input type="file" name="photo" onchange="readPicture(this)" required="">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <label for=""><br/></label>
                                <button type="submit" class="btn btn-sm bg-teal form-control">{{__('Save')}}</button>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img src="//placehold.it/100x100" alt="" id="sliderPhoto">
                            </div>
                            <div class="col-md-4"></div>
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
                                    <th style="width: 70%">{{__('Link')}}</th>
                                    <th style="width: 10%">{{__('Photo')}}</th>
                                    <th style="width: 10%">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$item->link}}</td>
                                        <td>
                                            <img src="{{ asset($item->photo) }}" alt="" style="width: 50px; height:50px;">
                                        </td>
                                        <td>
                                            <a class="btn btn-sm bg-teal" href="{{route('admin.sliders.edit',[$item->id])}}"><span class="fas fa-edit"></span></a>
                                            <form action="{{route('admin.sliders.destroy',[$item->id])}}" method="post" style="display: none;" id="delete-form-{{ $item->id}}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            </form>
                                            <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                event.preventDefault();
                                                getElementById('delete-form-{{ $item->id}}').submit();
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
    function readPicture(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        
            reader.onload = function (e) {
                $('#sliderPhoto')
                .attr('src', e.target.result)
                .width(100)
                .height(100);
            };
        
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
    
@endsection

