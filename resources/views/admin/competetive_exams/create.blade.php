@extends('adminlte::layouts.app')

@section('contentheader_title', 'Subjects')
@section('contentheader_title', 'Subjects')
@section('contentheader_description', 'List Record')

@section('main-content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Competitive Exam </div>
                    <div class="panel-body">
                        <a href="{{ url('admin/competetive_exams') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => 'admin/competetive_exams', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.competetive_exams.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
