<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {!! Form::label('name', 'Name: ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('type') ? ' has-error' : ''}}">
    {!! Form::label('type', 'Type: ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('label') ? ' has-error' : ''}}">
    {!! Form::label('label', 'Label: ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('label', null, ['class' => 'form-control']) !!}
        {!! $errors->first('label', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>