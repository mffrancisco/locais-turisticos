<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index(){
        $places = Place::all();
        return view('places.index', compact('places'));
    }

    public function create(){
        return view('places.create');
    }

    public function store(Request $request)
    {
        Place::create(
            [
                'name' => $request->name,
                'description' => $request->description,
                'address' => $request->address
            ]
            );
            return redirect('/');
    }

    public function show($id){
        $places = Place::find($id);
        return view('places.show', compact('places'));
    }

    public function edit($id)
    {
        $place = Place::find($id);

        return view('places.edit', compact('place'));
    }

    public function update($id, Request $request)
    {
        $place = Place::find($id);

        $place->update(
            [
                'name' => $request->name,
                'description' => $request->description,
                'address' => $request->address
            ]
        );

        return redirect('/show/' . $id);
    }

    public function destroy($id)
    {
        $place = Place::find($id);

        $place->delete();

        return redirect('/');

    }
}
