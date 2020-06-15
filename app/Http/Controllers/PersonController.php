<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Person as PersonResource;

class PersonController extends Controller
{
    public function index()
    {
        return 1;
    }

    public function show($id)
    {
        return new PersonResource(Person::findOrFail($id));
    }
}
