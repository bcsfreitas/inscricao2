<table class="table table-responsive" id="pilotos-table">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Equipe</th>
        <th>Patrocinador</th>
        <th>Telefone</th>
        <th>Nomeapoio</th>
        <th>Telapoio</th>
        <th>Moto</th>
        <th>Filiacao</th>
        <th>Datanasc</th>
        <th>Cep</th>
        <th>Logradouro</th>
        <th>Numero</th>
        <th>Complemento</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pilotos as $piloto)
        <tr>
            <td>{!! $piloto->id !!}</td>
            <td>{!! $piloto->nome !!}</td>
            <td>{!! $piloto->equipe !!}</td>
            <td>{!! $piloto->patrocinador !!}</td>
            <td>{!! $piloto->telefone !!}</td>
            <td>{!! $piloto->nomeapoio !!}</td>
            <td>{!! $piloto->telapoio !!}</td>
            <td>{!! $piloto->moto !!}</td>
            <td>{!! $piloto->filiacao !!}</td>
            <td>{!! $piloto->datanasc !!}</td>
            <td>{!! $piloto->cep !!}</td>
            <td>{!! $piloto->logradouro !!}</td>
            <td>{!! $piloto->numero !!}</td>
            <td>{!! $piloto->complemento !!}</td>
            <td>{!! $piloto->bairro !!}</td>
            <td>{!! $piloto->cidade !!}</td>
            <td>{!! $piloto->estado !!}</td>
            <td>
                {!! Form::open(['route' => ['pilotos.destroy', $piloto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pilotos.show', [$piloto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pilotos.edit', [$piloto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>