<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos=Producto::all();

     return view('productos.indexProductos',[
        'productos'=>$productos
     ]);
    }

    public function show($producto){

        $producto=Producto::find($producto);

        return view('productos.showProductos',[
            'producto'=>$producto
        ]);
    }

    public function create(){
        return view('productos.createProductos');
    }

    public function store(Request $resquest){
        $post=new Producto();
        $post->producto=$resquest->producto;
        $post->descripcion=$resquest->descripcion;
        // $post->cantidad=$resquest->cantidad;
        $post->precio=$resquest->precio;

        $post->save();

        return redirect("/productos");
    }


    public function edit($producto){
        $producto=Producto::find($producto);
        return view('productos.editProductos',[

            'producto'=>$producto
        ]);
    }
    public function update(Request $resquest,$producto){
        $post=Producto::find($producto);
        $post->producto=$resquest->producto;
        $post->descripcion=$resquest->descripcion;
        // $post->cantidad=$resquest->cantidad;
        $post->precio=$resquest->precio;

        $post->save();

        return redirect('/productos');
    }

    public function destroy($producto){
        $producto=Producto::find($producto);
        $producto->delete();
        return redirect('/productos');
    }




}
