@extends('adminlte::layouts.app')

@section('contentheader_title', 'Test Series')
@section('contentheader_title', 'Test Series')
@section('contentheader_description', 'List Record')

@section('main-content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Test Series</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/test_series') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/test_series', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.test_series.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
