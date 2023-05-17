<?php

namespace App\Http\Controllers;

use App\Models\Recordatorio;
use Illuminate\Http\Request;

class RecordatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();
        $recordatorios = recordatorio::where('id_usuario', $user_id)->get();

        return view('recordatorios.index')->with('recordatorios', $recordatorios);
    }


    public function create()
    {
        return view('recordatorios.crear');
    }


    public function store(Request $request)
    {
        $input = $request->all();

        recordatorio::create($input);
        return redirect('recordatorio')->with('flash_message', 'recordatorio Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recordatorio = recordatorio::find($id);
        return view('recordatorios.mostrar')->with('recordatorios', $recordatorio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recordatorio = recordatorio::find($id);
        return view('recordatorios.editar')->with('recordatorios', $recordatorio);
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
        $recordatorio = recordatorio::find($id);
        $input = $request->all();
        $recordatorio->update($input);
        return redirect('recordatorio')->with('flash_message', 'recordatorio Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        recordatorio::destroy($id);
        return redirect('recordatorio')->with('flash_message', 'recordatorio deleted!');
    }
}
