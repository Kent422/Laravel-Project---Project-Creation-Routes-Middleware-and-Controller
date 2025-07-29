<?php

// app/Http/Controllers/PetController.php
namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index() {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    public function create() {
        return view('pets.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'breed' => 'required',
            'age' => 'required|integer',
            'owner_info' => 'required',
        ]);
        Pet::create($request->all());
        return redirect()->route('pets.index')->with('success', 'Pet added!');
    }

    public function edit(Pet $pet) {
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet) {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'breed' => 'required',
            'age' => 'required|integer',
            'owner_info' => 'required',
        ]);
        $pet->update($request->all());
        return redirect()->route('pets.index')->with('success', 'Pet updated!');
    }

    public function destroy(Pet $pet) {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet deleted!');
    }
}
