<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAnimalRequest;
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
    public function store(SaveAnimalRequest $request) {
        //contiene la peticion que se ha enviado

    //    $validated= $request->validate([
    //         'name' => ['required', 'min:5', 'string','unique:animals'],
    //         'description' => ['required', 'min:10']
    //         ]);

        Animal::create($request->validated());
        // $animal= new Animal;
        // $animal->name = $request->input('name');
        // $animal->description =  $request->input(key: 'description');
        // $animal->save();
        session()->flash('status', 'Animal created!');
        
        return to_route(route: 'animals.index')->with('status', 'Animal created');
    
    }



    public function edit(Animal $animal){
        return view('animals.edit', compact('animal'));
    }
    public function update(SaveAnimalRequest $request, Animal $animal){
        
        // $request->validate([
        //     'name' => ['required', 'min:3'],
        //     'description' => ['required', 'min:10']
        //     ]);

        $animal->update($request->validated());
       // session()->flash('status', 'Animal edited!');

        return to_route(route: 'animals.index')->with('status', 'Animal updated');
    }

    public function destroy(Animal $animal) {
        $animal->delete();
    return redirect()->route('animals.index')->with('status', 'Animal deleted!');    }   

    


    
    
}
