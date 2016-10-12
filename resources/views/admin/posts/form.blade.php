@if ($errors->any())
    <div class="alert alert-danger">
    	<ul>
    	    @foreach ($errors->all() as $error)
    	        <li>{{ $error }}</li>
    	    @endforeach
    	</ul>
    </div>
@endif

<div class="row"><div class="col-md-6"><div class="box box-primary"><div class="box-body">            <div class="form-group {{ $errors->has('string') ? 'has-error' : ''}}">
                {!! Form::label('string', 'String') !!}
                    {!! Form::text('string', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('string', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('number') ? 'has-error' : ''}}">
                {!! Form::label('number', 'Number') !!}
                    {!! Form::text('number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
                {!! Form::label('text', 'Text') !!}
                    {!! Form::textarea('text', null, ['class' => 'form-control', 'rows' => 5]) !!}
                    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
            </div>
<div class='form-group'>{!! Form::submit('Сохранить', ['class' => 'btn btn-primary btn-flat']) !!}</div></div></div></div><div class="col-md-6"><div class="box box-primary"><div class="box-body">            <div class="form-group {{ $errors->has('checkbox') ? 'has-error' : ''}}">
                {!! Form::label('checkbox', 'Checkbox') !!}
                                    <div class="checkbox">
                    <label>{!! Form::checkbox('checkbox', '1') !!}</label>
                </div>
                    {!! $errors->first('checkbox', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('radio') ? 'has-error' : ''}}">
                {!! Form::label('radio', 'Radio') !!}
                                <div class="checkbox">
                <label>{!! Form::radio('radio', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('radio', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('radio', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                {!! Form::label('date', 'Date') !!}
                    {!! Form::input('text', 'date', null, ['class' => 'form-control date']) !!}
                    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
            </div>
</div></div></div></div>