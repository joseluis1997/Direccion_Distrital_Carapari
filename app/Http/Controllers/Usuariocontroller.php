<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
  

class Usuariocontroller extends Controller
{
    public function index()
    {
        $Usuarios = User::all();
        return view('usuarios.index',compact('Usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        // Validar los datos del formulario

        $request->validate([
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
           
          ]);
          //dd($request->password);
          User::create($request->all());

          return redirect()->route('usuarios.index')
            ->with('success','Post created successfully.');

        //return redirect()->route('usuarios.index');
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
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
           
          ]);

          $usuario = User::findOrFail($id);

          $usuario->update($request->all());

          return redirect()->route('usuarios.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Usuario = User::findOrFail($id);
        $Usuario->delete();

        return redirect()->route('usuarios.index');
    }
}
