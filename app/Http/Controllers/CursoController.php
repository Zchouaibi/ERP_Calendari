<?php

// app/Http/Controllers/CursoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        //return view('cursos.index', ['cursos'=>$cursos, 'slot'=>'test']);
       return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nom' => 'required|string',
        //     'descripcion' => 'required|string',
        // ]);

        // Curso::create([
        //     'nom' => $request->nom,
        //     'descripcion' => $request->descripcion,
        // ]);
        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso creado exitosamente.');
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('cursos.index')->with('success', 'Curso actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso eliminado exitosamente.');
    }
}
