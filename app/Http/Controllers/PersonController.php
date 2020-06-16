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

    public function match()
    {
        $peopleIds = collect([6, 7, 8, 9]);

        $selectedMovies = $peopleIds->flatMap(function($personId) {
            // fetch person from database, chain movies property to access their movies
            return Person::find($personId)->movies;
        });

        // frequency as a collection
        $preferenceFrequency = collect([]);

        foreach ($selectedMovies as $movie) {

            if (!isset($preferenceFrequency[$movie->id])) {
                $preferenceFrequency[$movie->id] = 0;
            }
    
            $preferenceFrequency[$movie->id] += 1;
        }

        $result = ["movieId"=>null, "frequency"=>0];

        // access key & value from associative array
        foreach ($preferenceFrequency as $movieId=>$frequency) {
            
            if ($frequency > $result["frequency"]) {

                $result = ["movieId"=>$movieId, "frequency"=>$frequency];
            }

        }

        return Movie::find($result["movieId"]);

    }
}
