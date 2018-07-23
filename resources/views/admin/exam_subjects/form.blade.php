<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('competetive_exam_id') ? 'has-error' : ''}}">
    {!! Form::label('competetive_exam_id', 'Exam', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('competetive_exam_id', $exams, null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('competetive_exam_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
