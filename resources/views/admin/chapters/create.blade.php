@extends('adminlte::layouts.app')

@section('contentheader_title', 'Chapters')
@section('contentheader_description', 'Add New Record')

@section('main-content')
    <div class="container">
        <div class="row">

            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Chapter</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/chapters') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/chapters', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.chapters.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
