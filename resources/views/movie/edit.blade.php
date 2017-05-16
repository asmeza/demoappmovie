@extends('layouts.main')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('movie.index')}}">Peliculas</a></li>
        <li><a href="{{ route('movie.create')}}">Insertar</a></li>
        <li class="active">Editar Producto</li>
    </ol>

    @include('partials.messages')
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

                    {!! Form::model($movies,['route'=>['movie.update',$movies->id],'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! form::label('Nombre') !!}
                            {!! form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Nombre de la pelicula']) !!}
                        </div>

                    <div class="form-group">
                        {!! form::label('Tipo pelicula') !!}
                        {!! form::select('movie_types_id',$movie_types,null,['id'=>'movie_types_id','class'=>'form-control']) !!}

                    </div>

                    {!! form::submit('Guardar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}


                    {!! Form::close() !!}





                </div>
            </div>
        </div>
    </div>

@endsection