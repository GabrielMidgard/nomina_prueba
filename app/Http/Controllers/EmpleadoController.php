<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validatedDate = $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'email' => 'required',
            'tipoContrato' => 'required',
            'estado' => 'required',
        ]);

        $element = new Empleado([
            'nombre' => $validatedDate['nombre'],
            'codigo' => $validatedDate['codigo'],
            'ap_paterno' => $validatedDate['ap_paterno'],
            'ap_materno' => $validatedDate['ap_materno'],
            'email' => $validatedDate['email'],
            'tipoContrato' => $validatedDate['tipoContrato'],
            'estado' => $validatedDate['estado'],
        ]);

        $element->save();

        return response()->json($element);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $element = Empleado::find($request->id);

        return $element;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $validatedDate = $request->validate([
            'id' => 'required',
            'nombre' => 'required',
            'codigo' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'email' => 'required',
            'tipoContrato' => 'required',
            'estado' => 'required',
        ]);

        $element= Empleado::find($validatedDate['id']);
        $element->nombre = $validatedDate['nombre'];
        $element->codigo = $validatedDate['codigo'];
        $element->ap_paterno = $validatedDate['ap_paterno'];
        $element->ap_materno = $validatedDate['ap_materno'];
        $element->email = $validatedDate['email'];
        $element->tipoContrato = $validatedDate['tipoContrato'];
        $element->estado = $validatedDate['estado'];

        $element->save();
        return $element;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
