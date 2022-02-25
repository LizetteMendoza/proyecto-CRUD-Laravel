<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$tareas = DB::table('tareas')->get(); //Equivale a SELECT * FROM tareas;
        //dd($tareas);
        $tareas = Tarea::all();

        return view('tareas.indexTareas', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('tareas.formTareas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $request->validate([
            'tarea'=>'required |min:5|max:225',
            'descripcion'=>'required |min:5',
            'categoria'=> 'required'

        ]);

        $tarea = new Tarea();
        $tarea -> tarea = $request->tarea;
        $tarea -> descripcion = $request->descripcion;
        $tarea -> categoria = $request->categoria;

        $tarea->save();

        return redirect()->route('tareas.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return view('tareas.showTarea', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        return  view('tareas.formTareas', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {

        $request->validate([
            'tarea'=>'required |min:5|max:225',
            'descripcion'=>'required |min:5',
            'categoria'=> 'required'

        ]);

        $tarea -> tarea = $request->tarea;
        $tarea -> descripcion = $request->descripcion;
        $tarea -> categoria = $request->categoria;
        $tarea -> save();

        return redirect('/tareas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect('/tareas');
    }
}
