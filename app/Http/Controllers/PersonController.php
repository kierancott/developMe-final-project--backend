<?php
namespace App\Http\Controllers;
use App\Person;
use App\Movie;
use App\Http\Resources\MovieResource;

use Illuminate\Http\Request;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonListResource;

class PersonController extends Controller
{
    public function index()
    {
        return PersonListResource::collection(Person::all());
    }

    public function show($id)
    {
        return new PersonResource(Person::find($id));
    }

    public function match(Request $request)
    {
        $peopleIds = collect(explode(",", $request->query("people")));
        
        $selectedMovies = $peopleIds->flatMap(function($personId) {
            // fetch person from database, chain movies property to access their movies
            return Person::find($personId)->movies;
        });

        // frequency as an array
        $preferenceFrequency = [];

        foreach ($selectedMovies as $movie) {

            if (!isset($preferenceFrequency[$movie->id])) {
                $preferenceFrequency[$movie->id] = ["frequency"=>0, "movie"=>$movie];
            }
    
            $preferenceFrequency[$movie->id]["frequency"] += 1;
        }

        return ["data"=>array_values($preferenceFrequency)];
      }
  }