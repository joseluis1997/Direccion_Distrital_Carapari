<?php

namespace App\Http\Controllers;
use App\Models\CentrosE;
use Illuminate\Http\Request;

class CentrosEd extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $centros = CentrosE::All();
        return view('CentrosEducacion.index',compact('centros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CentrosEducacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

          CentrosE::create($request->all());
          return redirect()->route('centros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $centroEd = CentrosE::findOrFail($id);
        return view('CentrosEducacion.edit',compact('centroEd'));
    }

    /**
     * Update the specified resource in storage.
     */
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

          $centrosE = CentrosE::findOrFail($id);

          $centrosE->update($request->all());

          return redirect()->route('centros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $centroED = CentrosE::findOrFail($id);

        $centroED->delete();

        return redirect()->route('centros.index');
    }
}
