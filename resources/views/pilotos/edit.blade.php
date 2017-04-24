@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Piloto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($piloto, ['route' => ['pilotos.update', $piloto->id], 'method' => 'patch']) !!}

                        @include('pilotos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection