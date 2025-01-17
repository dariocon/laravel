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
    
    public function create(){
        return view('animals.create');
    }
    public function store(Request $request) {
        //contiene la peticion que se ha enviado
        $animal= new Animal;
        $animal->name = $request->input('name');
        $animal->description =  $request->input(key: 'description');
        $animal->save();
        session()->flash('status', 'Animal created!');
        
        return to_route(route: 'animals.index');
    
    }
    public function edit(Animal $animal){
        return view('animals.edit', compact('animal'));
    }
    public function update(Request $request, Animal $animal){

        $animal->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return to_route(route: 'animals.index');
    }
    
}
