<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//mi collego la model
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        //apro una view, dentro ci metto la pagina.blade.php, es: 'welcome' di welcome.blade.php
        //devo passare un array SEMPRE, quindi
        //come valori nell'array ci vanno la chiave e il valore, la chiave può avere random, meglio tenerlo coerente, se l'array si chiama $movies la chiave la chiamiamo movies.
        //"movies" come chiave => e l'array $movies come valore.
        //così facendo chiamiamo la chiave con il $ davanti perchè è sempre una variabile
        return view('movies.index', ["movies"=> $movies]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //scriviamo movie e non movies perchè gli andiamo a passare un singolo elemento
        //mi vai a prendere nel DB il film che ha quell'id
        $movie = Movie::find($id);
        
        return view('movies.show', ['movie'=>$movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
