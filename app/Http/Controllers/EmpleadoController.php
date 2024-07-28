<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $empleados=Empleado::all();

     return view('empleados.indexEmpleado',[
        'empleados'=>$empleados
     ]);
    }

    public function show($empleado){
        $empleado=Empleado::find($empleado);

        return view('empleados.showEmpleado',[
            'empleado'=>$empleado
        ]);
    }



    public function create(){
        return view('empleados.createEmpleado');
    }

    public function store(Request $resquest){
        $post=new Empleado();
        $post->nombre=$resquest->nombre;
        $post->edad=$resquest->edad;

        $post->save();

        return redirect("/empleados");
    }



    public function edit($empleado){
        $empleado=Empleado::find($empleado);
        return view('empleados.editEmpleado',[

            'empleado'=>$empleado
        ]);
    }
    public function update(Request $resquest,$empleado){
        $post=Empleado::find($empleado);
        $post->nombre=$resquest->nombre;
        $post->edad=$resquest->edad;
        $post->save();

        return redirect('/empleados');
    }



    public function destroy($empleado){
        $empleado=Empleado::find($empleado);
        $empleado->delete();
        return redirect('/empleados');
    }
}
