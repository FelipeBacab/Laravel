<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Recordatorio;
use Illuminate\Http\Request;

class RecordatorioController extends Controller
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
            $recordatorio = Recordatorio::where('id_usuario', $user_id)
                ->Where('importancia', 'like', '%'.$buscar.'%')->get();
        } else {
            $buscar = null;
            $recordatorio = Recordatorio::where('id_usuario', $user_id)->get();
        }

        return view('recordatorios.index')->with('recordatorio', $recordatorio);
    }


    public function create()
    {
        return view('recordatorios.crear');
    }


    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required'],
            'contenido' => ['required','min:10'],
            'importancia' => ['required','not_in:0'],
            'fecha' => ['required']
        ]);
        
        $user_id = auth()->id();

        $recordatorio = new Recordatorio;
        $recordatorio->titulo = $request->titulo;
        $recordatorio->contenido = $request->contenido;
        $recordatorio->importancia = $request->importancia;
        $recordatorio->fecha = $request->fecha;
        $recordatorio->id_usuario = $user_id;
        $recordatorio->save();
        return redirect('recordatorio')->with('flash_message', 'Recordatorio Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recordatorio = Recordatorio::find($id);

        return view('recordatorios.mostrar')->with([
            'recordatorio' => $recordatorio,
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
        $recordatorio = Recordatorio::find($id);
        return view('recordatorios.editar')->with([
            'recordatorio' => $recordatorio,
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
            'contenido' => ['required','min:10'],
            'importancia' => ['required','not_in:0'],
            'fecha' => ['required']
        ]);

        $recordatorio = Recordatorio::find($id);

        $recordatorio->titulo = $request->titulo;
        $recordatorio->contenido = $request->contenido;
        $recordatorio->importancia = $request->importancia;
        $recordatorio->fecha = $request->fecha;
        $recordatorio->save();
        return redirect('recordatorio')->with('flash_message', 'Recordatorio Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recordatorio::destroy($id);
        return redirect('recordatorio')->with('flash_message', 'Recordatorio deleted!');
    }
}
