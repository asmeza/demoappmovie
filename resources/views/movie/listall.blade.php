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