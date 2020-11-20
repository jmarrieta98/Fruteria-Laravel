<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFruta;
use App\Models\Fruta;
use Illuminate\Http\Request;

class FruteriaController extends Controller
{
    public function index()
    {
        return view('fruteria.index');
    }

    public function create()
    {
        return view('fruteria.crear');
    }

    public function show(Fruta $fruta)
    {
        return view('fruteria.fruta', compact('fruta'));
    }

    public function showall()
    {
        $frutas = Fruta::paginate();

        return view('fruteria.listado', compact('frutas'));
    }

    public function store(StoreFruta $request)
    {
        $fruta = Fruta::create($request->all());


        return redirect()->route('fruteria.show', $fruta->id);
    }

    public function edit(Fruta $fruta)
    {
        return view('fruteria.editar', compact('fruta'));
    }

    public function update(Fruta $fruta, Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'fecha' => 'required'
        ]);

        $fruta->update($request->all());

        return redirect()->route('fruteria.show', $fruta);

    }

    public function destroy(Fruta $fruta)
    {
        $fruta->delete();
        return redirect()->route('fruteria.listado');
    }


}
