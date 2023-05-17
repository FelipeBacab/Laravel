<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $user_id = auth()->id();
        $notas = Nota::where('id_usuario', $user_id)->get();

        return view('notas.index')->with('notas', $notas);
    }


    public function create()
    {
        $tema = Tema::all();
        return view('notas.crear', compact('tema'));
    }


    public function store(Request $request)
    {
        $input = $request->all();

        if (!Tema::where('id', $input['id_tema'])->exists()) {
            return redirect()->back()->withErrors(['id_tema' => 'El tema seleccionado no existe.'])->withInput();
        }
        Nota::create($input);
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
        return view('notas.mostrar')->with('notas', $nota);
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
        return view('notas.editar')->with('notas', $nota);
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
        $nota = Nota::find($id);
        $input = $request->all();
        $nota->update($input);
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
