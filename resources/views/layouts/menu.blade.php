<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('pilotos*') ? 'active' : '' }}">
    <a href="{!! route('pilotos.index') !!}"><i class="fa fa-edit"></i><span>Pilotos</span></a>
</li>

<li class="{{ Request::is('eventos*') ? 'active' : '' }}">
    <a href="{!! route('eventos.index') !!}"><i class="fa fa-edit"></i><span>Eventos</span></a>
</li>

