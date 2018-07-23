@extends('adminlte::layouts.app')

@section('contentheader_title', 'Subjects')
@section('contentheader_description', 'Update Existing Record')

@section('main-content')
    <div class="container">
        <div class="row">

            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Subject #{{ $subject->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/exam_subjects') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($subject, [
                            'method' => 'PATCH',
                            'url' => ['/admin/exam_subjects', $subject->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.exam_subjects.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
