@extends('backend.layouts.app')
@section('title', 'FAQ')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('FAQ') }}</h3>
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
					@if(isset($faq))
                    <form action="{{ route('admin.faqs.update', $faq->id) }}" method="post" id="faqForm"
                        enctype="multipart/form-data">
                        @csrf
						@method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Question') }}</label>
                                        <input type="text" name="question" class="form-control"
                                            placeholder="{{ __('Question') }}" autocomplete="off"
                                            value="{{ $faq->question }}" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Answer') }}</label>
                                        <textarea type="text" name="answer" class="form-control" placeholder="{{ __('Answer') }}" autocomplete="off"  > {{ $faq->answer }} </textarea>
                                    </div>
                                </div>
										<!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                    <button type="submit" class="btn btn-sm bg-blue">{{ __('Update') }}</button>
                                </center>
                            </div>
                        </div>
                    </form>
					@else
                    <form action="{{ route('admin.faqs.store') }}" method="post" id="faqForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Question') }}</label>
                                        <input type="text" name="question" class="form-control"
                                            placeholder="{{ __('Question') }}" autocomplete="off"
                                            value="{{ old('question') }}" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>{{ __('Answer') }}</label>
                                        <textarea type="text" name="answer" class="form-control" placeholder="{{ __('Answer') }}" autocomplete="off"  > {{ old('answer') }} </textarea>
                                    </div>
                                </div>
										<!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                    <button type="submit" class="btn btn-sm bg-blue">{{ __('Save') }}</button>
                                </center>
                            </div>
                        </div>
                    </form>
					@endif
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10%">{{ __('Sl') }}</th>
                                <th style="width: 30%">{{ __('Question') }}</th>
                                <th style="width: 40%">{{ __('Answer') }}</th>
                                <th style="width: 10%">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->question }}</td>
                                    <td>{{Str::limit($item->answer, 100)}}</td>
                                    <td>
                                        <a class="btn btn-sm bg-blue" href="{{ route('admin.faqs.edit', [$item->id]) }}"><span class="fas fa-edit"></span></a>

                                        <form action="{{ route('admin.faqs.destroy', [$item->id]) }}" method="post" style="display: none;" id="delete-form-{{ $item->id }}">
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
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
