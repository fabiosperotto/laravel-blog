<div class="form-group">
    {!! Form::label('title', 'Titulo:') !!}
    {!! Form::text('title', null,  ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Texto:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>