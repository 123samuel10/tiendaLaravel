<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes=Cliente::all();

     return view('clientes.indexCliente',[
        'clientes'=>$clientes
     ]);
    }


    public function show($cliente){

        $cliente=Cliente::find($cliente);

        return view('clientes.showCliente',[
            'cliente'=>$cliente
        ]);
    }


    public function create(){
        return view('clientes.createCliente');
    }

    public function store(Request $resquest){
        $post=new Cliente();
        $post->nombre=$resquest->nombre;
        $post->correo=$resquest->correo;
        $post->contraseña=$resquest->contraseña;
        $post->save();

        return redirect("/clientes");
    }



    public function edit($cliente){
        $cliente=Cliente::find($cliente);
        return view('clientes.editCliente',[

            'cliente'=>$cliente
        ]);
    }

    public function update(Request $resquest,$cliente){
        $post=Cliente::find($cliente);
        $post->nombre=$resquest->nombre;
        $post->correo=$resquest->correo;
        $post->contraseña=$resquest->contraseña;
        $post->save();

        return redirect('/clientes');
    }

    public function destroy($cliente){
        $cliente=Cliente::find($cliente);
        $cliente->delete();
        return redirect('/clientes');
    }




}
