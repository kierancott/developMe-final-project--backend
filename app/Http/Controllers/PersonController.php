<?php
namespace App\Http\Controllers;
use App\Person;

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
}
