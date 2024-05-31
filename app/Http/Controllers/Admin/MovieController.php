<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('modules.administration.movies.index');
    }

    public function create()
    {
        return view('modules.administration.movies.create');
    }

    public function edit($id)
    {
        $data = Movie::findOrFail($id);

        return view('modules.administration.movies.edit', compact('data'));
    }

    public function list()
    {
        $data = Movie::all();

        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new Movie();

        $data->title = $request->input('title');
        $data->director = $request->input('director');
        $data->year = $request->input('year');
        $data->genre = $request->input('genre');
        $data->time = $request->input('time');
        $data->classification = $request->input('classification');
        $data->save();

        return redirect()->route('administration.movie.index');
    }

    public function update(Request $request, $id)
    {
        $data = Movie::findOrFail($id);

        $data->title = $request->input('title');
        $data->director = $request->input('director');
        $data->year = $request->input('year');
        $data->genre = $request->input('genre');
        $data->time = $request->input('time');
        $data->classification = $request->input('classification');
        $data->save();

        return response()->json([
            'title' => 'Éxito',
            'status' => 200,
            'message' => 'Registro actualizado exitosamente'
        ]);
    }

    public function delete($id)
    {
        $data = Movie::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'El registro ha sido eliminado']);
    }
}
