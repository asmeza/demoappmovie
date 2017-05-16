<?php

namespace App\Http\Controllers;

use App\Models\MovieType;
use Illuminate\Http\Request;
use App\Models\Movie;
use Session;
use App\Http\Requests\Movie\MovieCreateRequest;
use App\Http\Requests\Movie\MovieUpdateRequest;



class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $movies = Movie::all();
        return view ('movie.index')->with('movies',$movies); */


        $movies = Movie::
        select('movies.id', 'movies.name as movies',
            'movie_types.name as types')
            ->join('movie_types','movie_types.id','=',
            'movies.movie_types_id')
            ->paginate(10);  // muestra los datos sin paginar ... get() y paginate() los muetsra paginados

        return view ('movie.index')->with('movies',$movies);
        

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    /*
        $movie_types=MovieType::pluck('name','id')
            ->prepend('Seleccione un tipo de pelicula');

        */
        $movie_types=MovieType::get()
            ->pluck('name','id')
            ->prepend('Seleccione un tipo de pelicula');



        return view('movie.create')
            ->with('movie_types',$movie_types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieCreateRequest $request)
    {
        Movie::create($request->all());
        Session::flash('save','El registro se ha creado correctamente');
        return redirect()->route('movie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Movie::FindOrFail($id);
        return view('movie.show')->with('movies',$movies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie_types=MovieType::get()->pluck('name','id')->prepend('Seleccione un tipo de pelicula');
        $movies = Movie::FindOrFail($id);

        return view('movie.edit',array('movies'=>$movies, 'movie_types'=>$movie_types));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieUpdateRequest $request, $id)
    {

        $movies = Movie::FindOrFail($id);
        $input= $request->all();
        $movies->fill($input)->save();
        Session::flash('update','El registro se ha actualizado correctamente');

        return redirect()->route('movie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movies = Movie::FindOrFail($id);
        $movies->delete();
        Session::flash('delete','El registro se ha eliminado correctamente');
        return redirect()->route('movie.index');
    }

    public function report1()
    {
        $movies = Movie::all();
        return view ('movie.reporte1')->with('movies',$movies);

    }

}
