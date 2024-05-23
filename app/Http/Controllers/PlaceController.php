<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
  
    public function index(Place $place)
    {
        return view('places.index');
    }


    public function create()
    {
        return view('places.create');
    }

}
