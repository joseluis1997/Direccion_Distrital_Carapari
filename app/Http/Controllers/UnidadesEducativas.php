<?php

namespace App\Http\Controllers;
use App\Models\UnidadesE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UnidadesEducativas extends Controller
{
    public function index()
    {
        //$UnidadesEd = UnidadesE::all();
        $UnidadesEd = UnidadesE::with('nucleo')->get();
        //dd($UnidadesEd[0]->Nucleo->descripcionG );
        return view('UnidadesEducativas.index',compact('UnidadesEd'));
    }
    public function create()
    {
        return view('UnidadesEducativas.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombreUE' => 'required|string',
            'nombreDir' => 'required|string',
            'nombreJE' => 'required|string',
            'codigosie' => 'required|string',
            'nivelEd' => 'required|string',
            'cantidadE' => 'required|string',
            'cantidadM' => 'required|string',
            'descripcionG' => 'required|string',
          ]);

          UnidadesE::create($request->all());
          return redirect()->route('UnidadesEducativas.index');

    }
    public function show(string $id)
    {
    }
    public function edit(string $id)
    {
        $unidadE = UnidadesE::findOrFail($id);
        return view('UnidadesEducativas.edit',compact('unidadE'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombreUE' => 'required|string',
            'nombreDir' => 'required|string',
            'nombreJE' => 'required|string',
            'codigosie' => 'required|string',
            'nivelEd' => 'required|string',
            'cantidadE' => 'required|string',
            'cantidadM' => 'required|string',
            'descripcionG' => 'required|string',
          ]);

          $unidad = UnidadesE::findOrFail($id);

          $unidad->update($request->all());

          return redirect()->route('UnidadesEducativas.index');
    }
    public function destroy(string $id)
    {
        $unidadEd = UnidadesE::findOrFail($id);
        $unidadEd->delete();

        return redirect()->route('UnidadesEducativas.index');
    }
}
