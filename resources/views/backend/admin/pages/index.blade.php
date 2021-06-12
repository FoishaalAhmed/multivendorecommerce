@extends('backend.layouts.app')

@section('title', 'Page List')

@section('backend-content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{__('Page List')}}</h3>
                <div class="card-tools">
					<a href="{{route('admin.pages.create')}}" class="btn btn-sm bg-teal"><i class="fas fa-plus-square"></i> {{__('Create Page')}}</a>
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 10%">{{__('Sl')}}</th>
                    <th style="width: 20%">{{__('Name')}}</th>
                    <th style="width: 20%">{{__('Slug')}}</th>
                    <th style="width: 25%">{{__('Content')}}</th>
                    <th style="width: 10%">{{__('Photo')}}</th>
                    <th style="width: 10%">{{__('Action')}}</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($pages as $item)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->text}}</td>
                            <td>
                                <img src="{{asset($item->photo)}}" alt="" style="width: 50px; height: 50px;">
                            </td>
                            <td>
                                <a class="btn btn-sm bg-blue" href="{{route('admin.pages.edit',[$item->id])}}"><span class="fas fa-edit"></span></a>

                                    	<form action="{{route('admin.pages.destroy',[$item->id])}}" method="post" style="display: none;" id="delete-form-{{ $item->id}}">
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection