<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('modules.administration.clients.index');
    }

    public function create()
    {
        return view('modules.administration.clients.create');
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);

        return view('modules.administration.clients.edit', compact('data'));
    }

    public function list()
    {
        $data = User::all();

        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new User();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = $request->input('password');
        $data->save();

        return redirect()->route('administration.client.index');

    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = bcrypt($request->input('password')) ?? $data->password;

        $data->save();

        return response()->json([
            'title' => 'Éxito',
            'status' => 200,
            'message' => 'Registro actualizado exitosamente'
        ]);
    }

    public function delete($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return response()->json(['message' => 'El registro ha sido eliminado']);
    }
}
