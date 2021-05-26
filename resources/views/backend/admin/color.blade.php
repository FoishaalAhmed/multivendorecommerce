@extends('backend.layouts.app')
@section('title', 'Colors')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Colors') }}</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-sm bg-teal" data-toggle="modal"
                            data-target="#myModal"><i class="fas fa-list-alt"></i> {{ __('New Color') }}</a>
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
                    <div class="row">
                        <div class="col-md-12">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">{{ __('Sl') }}</th>
                                        <th style="width: 80%">{{ __('Name') }}</th>
                                        <th style="width: 10%">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colors as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <a class="btn btn-sm bg-teal"
                                                    href="#" data-toggle="modal" data-target="#edit-modal" data-id="{{$item->id}}" data-name="{{$item->name}}"><span
                                                        class="fas fa-edit"></span></a>
                                                <form action="{{ route('admin.colors.destroy', [$item->id]) }}" method="post"
                                                    style="display: none;" id="delete-form-{{ $item->id }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                </form>
                                                <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                    event.preventDefault();
                                                    getElementById('delete-form-{{ $item->id }}').submit();
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

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Color</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.colors.store') }}" method="POST" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" placeholder="name" class="form-control" required="" type="text" value="{{ old('name') }}" autocomplete="off">
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red" data-dismiss="modal">Reset</button>
                                    <button type="submit" class="btn btn-sm bg-green">Save</button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="edit-modal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Color</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST" class="form-horizontal"
                            enctype="multipart/form-data" id="edit-form">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" placeholder="name" class="form-control" required="" type="text" value="{{ old('name') }}" autocomplete="off" id="name">
                                <input type="hidden" name="id" id="id">
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red" data-dismiss="modal">Reset</button>
                                    <button type="submit" class="btn btn-sm bg-green">Update</button>
                                </center>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('footer')

    <script type="text/javascript">

    $('#edit-modal').on("show.bs.modal", function(event){

        var e             = $(event.relatedTarget);
        var id            = e.data('id');
        var name          = e.data('name');

        var action = '{{URL::to('admin/colors/update')}}';
 
        $("#edit-form").attr('action', action);
        $("#id").val(id);
        $("#name").val(name);

    });
</script>
    
@endsection
