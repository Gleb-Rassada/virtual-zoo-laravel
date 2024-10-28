<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cage\StoreRequest;
use App\Http\Requests\Cage\UpdateRequest;
use App\Models\Animal;
use App\Models\Cage;
use Illuminate\Http\Request;

class CageController extends Controller
{

    public function index()
    {

        $number_of_animals = Animal::all()->count();
        $cages = Cage::all();
        return view('cage.index', compact('cages', 'number_of_animals'));
    }

    public function show(Cage $cage)
    {

        $animals = Animal::where('cage_id', $cage->id)->get();
        return view('cage.show', compact('animals', 'cage'));
    }

    public function create()
    {
        return view('cage.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Cage::create($data);

        return redirect()->route('cage.index');
    }

    public function edit(Cage $cage)
    {
        return view('cage.edit', compact('cage'));
    }

    public function update(UpdateRequest $request, Cage $cage)
    {

        $data = $request->validated();

        if ($data['capacity'] < $cage->number_of_animals) {
            $message = 'Вы не можете сделать клетку меньше, чем количество животных, которое в ней находится!';
            return view('error.exception', compact('message'));
        }
        $cage->update($data);
        return redirect()->route('cage.show', $cage->id);
    }

    public function delete(Cage $cage)
    {

        if ($cage->number_of_animals !== 0) {
            $message = 'Вы не можете удалить клетку, если в ней живут животные!';
            return view('error.exception', compact('message'));
        }
        $cage->delete();
        return redirect()->route('cage.index');
    }


}
