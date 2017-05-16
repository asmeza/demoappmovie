@extends('layouts.main')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('movie.index')}}">Peliculas</a></li>
    </ol>

    <!-- Main component for a primary marketing message or call to action
    <div class="page-header">
        <h1>Peliculas <small>Actualizados hasta hoy</small></h1>
    </div> -->

    <div class="row">
        <div class="col-md-11">
            @include('partials.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de Peliculas
                    <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                        <button type="button" id="nuevo" name="nuevo" class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
                    </p>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered">
                        <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <!--
                                <td>{{$movie->id}}</td>
                                <td>{{$movie->name}}</td>
                                <td>{{$movie->movie_types_id}}</td>
                                -->

                                <td>{{$movie->id}}</td>
                                <td>{{$movie->movies}}</td>
                                <td>{{$movie->types}}</td>


                                <td><a href="{{ route('movie.edit', $movie->id)}}">[Editar]</a>
                                    <a href="{{ route('movie.show', $movie->id)}}">[Eliminar]</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {!! $movies->links() !!}
                    </div>

                </div>
            </div>

        </div>
    </div>



    <script>


        $("#nuevo").click(function(event)
        {
            document.location.href = "{{ route('movie.create')}}";
        });


    </script>



@endsection