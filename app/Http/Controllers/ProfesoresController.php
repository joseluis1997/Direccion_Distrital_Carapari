<?php

namespace App\Http\Controllers;
use App\Models\Profesor;

use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $profesores = Profesor::all();
         return view('Profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
