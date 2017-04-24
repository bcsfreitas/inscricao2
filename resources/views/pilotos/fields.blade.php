<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('id', false) !!}
        {!! Form::checkbox('id', '1', null) !!} 1
    </label>
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Equipe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipe', 'Equipe:') !!}
    {!! Form::text('equipe', null, ['class' => 'form-control']) !!}
</div>

<!-- Patrocinador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patrocinador', 'Patrocinador:') !!}
    {!! Form::text('patrocinador', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::number('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomeapoio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomeapoio', 'Nomeapoio:') !!}
    {!! Form::text('nomeapoio', null, ['class' => 'form-control']) !!}
</div>

<!-- Telapoio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telapoio', 'Telapoio:') !!}
    {!! Form::number('telapoio', null, ['class' => 'form-control']) !!}
</div>

<!-- Moto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('moto', 'Moto:') !!}
    {!! Form::text('moto', null, ['class' => 'form-control']) !!}
</div>

<!-- Filiacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('filiacao', 'Filiacao:') !!}
    {!! Form::text('filiacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Datanasc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datanasc', 'Datanasc:') !!}
    {!! Form::date('datanasc', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', 'Cidade:') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pilotos.index') !!}" class="btn btn-default">Cancel</a>
</div>
