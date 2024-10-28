<?php

namespace App\Http\Controllers;

use App\Http\Requests\Animal\StoreRequest;
use App\Http\Requests\Animal\UpdateRequest;
use App\Models\Animal;
use App\Models\Cage;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public function show(Animal $animal)
    {
        return view('animal.show', compact('animal'));
    }

    public function create($id)
    {
        $cage = Cage::find($id);
        if ($cage->capacity > $cage->number_of_animals) {
            return view('animal.create', compact('id'));
        }
        $message = 'В клетке больше нет места для новых животных!';
        return view('error.exception', compact('message'));
    }

    public function store(StoreRequest $request, $id)
    {
        $data = $request->validated();
        $data['cage_id'] = $id;
        $cage = Cage::find($id)->increment('number_of_animals');
        $animal = Animal::create($data);
        // Открывает клетку в которую животное было добавлено
        return redirect()->route('cage.show', $animal->cage_id);
    }

    public function edit(Animal $animal)
    {
        return view('animal.edit', compact('animal'));

    }

    public function update(UpdateRequest $request, Animal $animal)
    {
        $data = $request->validated();
        $data['cage_id'] = $animal->cage_id;
        $animal->update($data);
        return redirect()->route('animal.show', $animal->id);
    }

    public function delete(Animal $animal)
    {
        $id = $animal->cage_id;
        $cage = Cage::find($id)->decrement('number_of_animals');
        $animal->delete();
        return redirect()->route('cage.show', $id);
    }

}
