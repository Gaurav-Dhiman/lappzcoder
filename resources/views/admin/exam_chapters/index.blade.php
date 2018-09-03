@extends('adminlte::layouts.app')

@section('contentheader_title', 'Chapters')
@section('contentheader_description', 'List Records')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Chapters</div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success"><p>{!! Session::get('flash_message')  !!} </p></div>
                        @endif
                        <a href="{{ url('/admin/exam_chapters/create') }}" class="btn btn-success btn-sm" title="Add New Chapter">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/exam_chapters', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>S.No</th>
                                        <th>Title</th>
                                        <th>Subject</th>
                                        <th>Exam</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($chapters as $i=>$item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->subject->title }}</td>
                                        <td>{{ $item->subject->exam->title }}</td>
                                        <td>
                                            <a href="{{ url('/admin/exam_chapters/' . $item->id) }}" title="View Chapter"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/exam_chapters/' . $item->id . '/edit') }}" title="Edit Chapter"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/exam_chapters', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Chapter',
                                                        'onclick'=>'return confirm("Are you sure you want to delete ?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $chapters->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
