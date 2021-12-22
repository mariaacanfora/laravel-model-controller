<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function index(){

        $movies = Movie::all();


        return view("home.index", ["movies" => $movies]);
    }
}
