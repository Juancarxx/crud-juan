<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos=Contacto::all();
        return view('contacto.index',compact('contactos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $contactos=new Contacto;
        $contactos->nombre=$request->input('nombre');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        //$contactos->imagen=$request->input('imagen');

        $contactos->imagen="defecto.png";

        if ($imagen = $request ->file('imagen')){
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $contactos['imagen'] = $imagenProducto;
        }else{
            $contactos->imagen="defecto.png";
        }
        $contactos->save();
        return redirect()->back();


        //$request->validate([
        //    'nombre' =>'required','telefono'=>'required','direccion'=>'required','imagen'=>'required'
        //]);

        //$contactos = $request->all();
        //Contacto::created($contactos);
        //return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contactos=Contacto::find($id);
        return view('contacto.modal-info',compact('contactos'));
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contactos=Contacto::find($id);
        $contactos->nombre=$request->input('nombre');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        //$contactos->imagen="defecto.png";
        if ($imagen = $request ->file('imagen')){
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $contactos['imagen'] = $imagenProducto;
        }else{
            $contactos->imagen="defecto.png";
        }
        $contactos->update();
        return redirect()->back();



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacto=Contacto::find($id);
        $contacto->delete();
        return redirect()->back();
        //
    }
}
