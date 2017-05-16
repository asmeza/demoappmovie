@extends('layouts.main')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('movie.index')}}">Peliculas</a></li>
        <li><a href="{{ route('movie.create')}}">Insertar</a></li>
        <li class="active">Editar Producto</li>
    </ol>


    <!-- Main component for a primary marketing message or call to action
    <div class="page-header">
        <h1>Adicionar Peliculas</h1>
    </div>
    -->
    <div class="row">
        <div class="col-md-8">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar producto
                </div>

                <div class="panel-body">

                    {!! Form::open(['route'=>['movie.destroy',$movies->id],'method'=>'DELETE']) !!}

                    <div class="form-group">
                        <label form="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO</label>

                    </div>

                    <div class="form-group">
                        {!! form::label('Pelicula') !!}
                        {!! $movies->name !!}
                    </div>


                    <div class="form-group">
                        {!! form::label('Tipo Pelicula') !!}
                        {!! $movies->movie_types_id !!}
                    </div>



                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

                    <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('movie.index')}}'"
                    >Cancelar</button>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection