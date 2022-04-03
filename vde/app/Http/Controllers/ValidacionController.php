<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validacion;

class ValidacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Validacions = Validacion::all();
        return view('Validacion.index')->with('Validacions',$Validacions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Validacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Validacions = new Validacion();

        $Validacions->ID= $request->get('ID');
        $Validacions->Nombre = $request->get('Nombre');
        $Validacions->Codigo = $request->get('Codigo');
        $Validacions->Direccion = $request->get('Direccion');
        $Validacions->Telefono = $request->get('Telefono');
        $Validacions->email = $request->get('email');

        $Validacions->save();

        return redirect('/Validacions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $Validacion = Validacion::find($id);
       return view('Validacion.edit')->with('Validacion',$Validacion);
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
        $Validacion = Validacion::find($id);

        $Validacion->Nombre = $request->get('Nombre');
        $Validacion->Codigo = $request->get('Codigo');
        $Validacion->Direccion = $request->get('Direccion');
        $Validacion->Telefono = $request->get('Telefono');
        $Validacion->email = $request->get('email');

        $Validacion->save();

        return redirect('/Validacions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Validacion = Validacion::find($id);
        $Validacion->delete();
        return redirect('/Validacions');
    }
}
