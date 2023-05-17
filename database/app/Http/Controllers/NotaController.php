<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Nota;
use App\Models\Tema;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = auth()->id();

        $buscar = $request->get('buscador');

        if ($buscar) {
            $notas = Nota::where('id_usuario', $user_id)
                ->whereHas('temas.asignaturas', function ($query) use ($buscar) {
                    $query->where('asignatura', 'like', '%' . $buscar . '%');
                })
                ->get();
        } else {
            $buscar = null;
            $notas = Nota::where('id_usuario', $user_id)->get();
        }
        return view('notas.index')->with([
            'notas' => $notas,
        ]);
    }



    public function create()
    {
        $asignaturas = Asignatura::where('carrera', auth()->user()->carrera)->get();
        $temas = Tema::all();
        return view('notas.crear', compact('temas', 'asignaturas'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'asignatura' => ['required', 'numeric', 'not_in:0'], // Requerido, numérico y debe ser mayor a 0
            'tema' => ['required', 'numeric', 'not_in:0'], // Requerido, numérico y debe ser mayor a 0
            'titulo' => ['required'],
            'nota' => ['required', 'min:50'],
            'p_clave' => ['required'],
            'resumen' => ['required', 'min:50'],
        ]);

        $user_id = auth()->id();

        $nota = new Nota;
        $nota->titulo = $request->titulo;
        $nota->nota = $request->nota;
        $nota->p_clave = $request->p_clave;
        $nota->resumen = $request->resumen;
        $nota->id_usuario = $user_id;
        $nota->id_tema = $request->tema;
        $nota->save();
        return redirect('nota')->with('flash_message', 'Nota Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = Nota::find($id);
        $tema = Tema::where('id', $nota->id_tema)->first();
        $asignatura = Asignatura::where('id', $tema->id_asignatura)->first();
        return view('notas.mostrar')->with([
            'nota' => $nota,
            'tema' => $tema,
            'asignatura' => $asignatura
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Nota::find($id);
        $tema = Tema::where('id', $nota->id_tema)->first();
        $asignatura = Asignatura::where('id', $tema->id_asignatura)->first();
        return view('notas.editar')->with([
            'nota' => $nota,
            'tema' => $tema,
            'asignatura' => $asignatura
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => ['required'],
            'nota' => ['required', 'min:50'],
            'p_clave' => ['required'],
            'resumen' => ['required', 'min:50'],
        ]);

        $nota = Nota::find($id);

        $nota->titulo = $request->titulo;
        $nota->nota = $request->nota;
        $nota->p_clave = $request->p_clave;
        $nota->resumen = $request->resumen;
        $nota->save();
        return redirect('nota')->with('flash_message', 'Nota Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nota::destroy($id);
        return redirect('nota')->with('flash_message', 'Nota deleted!');
    }
}
