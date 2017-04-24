<table class="table table-responsive" id="eventos-table">
    <thead>
        <th>User Id</th>
        <th>Status</th>
        <th>Nome</th>
        <th>Data</th>
        <th>Ingressos</th>
        <th>Data Pagamento</th>
        <th>Local</th>
        <th>Valor</th>
        <th>Descricao</th>
        <th>Largada</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($eventos as $evento)
        <tr>
            <td>{!! $evento->user_id !!}</td>
            <td>{!! $evento->status !!}</td>
            <td>{!! $evento->nome !!}</td>
            <td>{!! $evento->data !!}</td>
            <td>{!! $evento->ingressos !!}</td>
            <td>{!! $evento->data_pagamento !!}</td>
            <td>{!! $evento->local !!}</td>
            <td>{!! $evento->valor !!}</td>
            <td>{!! $evento->descricao !!}</td>
            <td>{!! $evento->largada !!}</td>
            <td>
                {!! Form::open(['route' => ['eventos.destroy', $evento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('eventos.show', [$evento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('eventos.edit', [$evento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>