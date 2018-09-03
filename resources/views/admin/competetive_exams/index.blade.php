@extends('adminlte::layouts.app')

@section('contentheader_title', 'Subjects')
@section('contentheader_description', 'List Record')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Competitive Exam </div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success"><p>{!! Session::get('flash_message')  !!} </p></div>
                        @endif
                        <a href="{{ url('admin/competetive_exams/create') }}" class="btn btn-success btn-sm" title="Add New Competetive_exam">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => 'admin/competetive_exams', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{request('search')}}">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>S.No</th><th>Title</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($competetive_exams as $i=>$item)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            <a href="{{ url('admin/competetive_exams/' . $item->id) }}" title="View Competetive_exam"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('admin/competetive_exams/' . $item->id . '/edit') }}" title="Edit Competetive_exam"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['admin/competetive_exams', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Competetive_exam',
                                                       'onclick'=>'return confirm("Are you sure you want to delete ?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $competetive_exams->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
