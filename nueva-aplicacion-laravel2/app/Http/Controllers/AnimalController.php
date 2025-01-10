<?php

namespace App\Http\Controllers;
use App\Models\Animal;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        {
            $animals = Animal::all();
           return view('animals', ['animals' => $animals]);
        }
    }
    public function show(Animal $animal)
    {
        return view('detailAnimal', ['animal' => $animal]);
    }
}
