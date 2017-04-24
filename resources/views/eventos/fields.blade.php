<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data', 'Data:') !!}
    {!! Form::date('data', null, ['class' => 'form-control']) !!}
</div>

<!-- Ingressos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ingressos', 'Ingressos:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('ingressos', false) !!}
        {!! Form::checkbox('ingressos', '1', null) !!} 1
    </label>
</div>

<!-- Data Pagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_pagamento', 'Data Pagamento:') !!}
    {!! Form::date('data_pagamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Local Field -->
<div class="form-group col-sm-6">
    {!! Form::label('local', 'Local:') !!}
    {!! Form::text('local', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Largada Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('largada', 'Largada:') !!}
    {!! Form::textarea('largada', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eventos.index') !!}" class="btn btn-default">Cancel</a>
</div>
