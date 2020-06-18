<?php

namespace App\Http\Controllers;
use App\Person;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $people = Person::all();

        $preferredMovies = $people->flatMap(function($person) {

            return $person->movies;

        });

        $movies = Movie::all();

        $result = $movies->map(function($movie) use($preferredMovies) {

            return ["frequency"=>$preferredMovies->filter(function($preferredMovie) use($movie) {

                return $movie->id === $preferredMovie->id;

            })->count(), "movie"=>$movie];

        });

        return $result;

    }
}
