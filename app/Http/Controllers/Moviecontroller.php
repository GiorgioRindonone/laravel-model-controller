<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class Moviecontroller extends Controller
{
    protected $movies;
    public function index()
    {   
        $movies = movies::all();
        dd($movies);

        return view('welcome');

    }
}
