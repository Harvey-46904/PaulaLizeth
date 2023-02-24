<?php

namespace App\Http\Controllers;
use Redirect;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
class UsuariosController extends Controller
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
    public function store(Request $request)
    {
        
      
        $correos=array("harveympv@hotmail.com");
        Mail::to($correos)->send( new EnviarCorreo($request->all()));

        return response(["data"=>"correo enviado exitosamente"]);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }

    public function enviar_paquete( Request $request){
        
        $nuevadata=array(
            "nombre"=>$request->nombre,
            "email"=>$request->correo,
            "subject"=>"Quiero el paquete de ".$request->paquete,
            "message"=>"Puedes comunicarte conmigo al siguiente numero: ".$request->telefono,
        );
        $correos=array("harveympv@hotmail.com");
       Mail::to($correos)->send( new EnviarCorreo($nuevadata));
        return response(["data"=>"correo enviado con exito"],200);
       
    }

    
}
