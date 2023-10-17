<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class DesaController extends Controller
{
    //
=======
use App\Models\Desa;

class DesaController extends Controller
{
    public function index()
    {
        $desas = Desa::all();
        return view('desa.index', compact('desas'));
    }

    public function create()
    {
        return view('desa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Desa::create([
            'nama' => $request->input('nama')
        ]);

        return redirect('/desa');
    }

    public function show($id)
    {
        $desa = Desa::findOrFail($id);
        return view('desa.show', compact('desa'));
    }

    public function edit($id)
    {
        $desa = Desa::findOrFail($id);
        return view('desa.edit', compact('desa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $desa = Desa::findOrFail($id);
        $desa->nama = $request->input('nama');
        $desa->save();

        return redirect('/desa');
    }

    public function destroy($id)
    {
        $desa = Desa::findOrFail($id);
        $desa->delete();

        return redirect('/desa');
    }
>>>>>>> ed98fafebf0aae11713ca098d9b640f10aa75533
}
