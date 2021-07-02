@extends('backend.layouts.app')
@section('title', 'Generals')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Generals') }}</h3>
                    <div class="card-tools">
                        <a href="#" data-toggle="modal" data-target="#store-modal" class="btn btn-sm bg-teal"><i class="fas fa-list-alt"></i> {{__('New General')}}</a>
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
                                        <th>{{ __('Sl') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Value') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($generals as $general)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $general->name }}</td>
                                            <td>{{ $general->value }}</td>
                                            <td>
                                                <a class="btn btn-sm bg-teal"
                                                    href="" data-toggle="modal" data-target="#edit-modal" data-id="<?= $general->id; ?>" data-name="<?= $general->name; ?>" data-value="<?= $general->value; ?>" ><span
                                                        class="fas fa-edit"></span></a>
                                                <form action="{{ route('admin.generals.destroy', [$general->id]) }}"
                                                    method="post" style="display: none;"
                                                    id="delete-form-{{ $general->id }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                </form>
                                                <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                    event.preventDefault();
                                                    getElementById('delete-form-{{ $general->id }}').submit();
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
        <div class="modal fade" id="store-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b><i class=" fa fa-plus-square"></i></b> {{ __('New General') }} </h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.generals.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>{{ __('Name') }}</label>
                                    <input name="name" placeholder="{{ __('Name') }}" class="form-control" required="" type="text" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>{{ __('Value') }}</label>
                                    <input name="value" placeholder="{{ __('Value') }}" class="form-control" required="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <button type="reset" class="btn btn-sm btn-danger">{{ __('Reset') }}</button>
                                <button type="submit" class="btn btn-sm btn-primary">{{ __('Save') }}</button>
                            </center>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b><i class=" fa fa-refresh"></i></b> {{ __('Update General') }} </h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" id="edit-form">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>{{ __('Name') }}</label>
                                    <input name="name" placeholder="{{ __('Name') }}" class="form-control" required="" type="text" id="name" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>{{ __('Value') }}</label>
                                    <input name="value" placeholder="{{ __('Value') }}" class="form-control" required="" type="text" id="value">
                                    <input type="hidden" name="id" id="id">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <button data-dismiss="modal" aria-label="Close" class="btn btn-sm btn-danger">{{ __('Reset') }}</button>
                                <button type="submit" class="btn btn-sm btn-primary">{{ __('Update') }}</button>
                            </center>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    </section>
    <!-- /.content -->
@endsection

@section('footer')

    <script type="text/javascript">
    $('#edit-modal').on("show.bs.modal", function(event){

        var e     = $(event.relatedTarget);
        var id    = e.data('id');
        var name  = e.data('name');
        var value = e.data('value');
        var action = '{{URL::to('admin/generals/update')}}';

        $("#edit-form").attr('action', action);
        $("#id").val(id);
        $("#name").val(name);
        $("#value").val(value); 

    });
</script>

@endsection
