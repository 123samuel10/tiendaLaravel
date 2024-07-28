<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('cliente', 'producto')->get();
        return view('ventas.indexVenta', [
            'ventas'=>$ventas
        ]);
    }


    public function create()
    {
        $clientes = Cliente::all();
        $productos = Producto::all();
        $empleados=Empleado::all();
        return view('ventas.createVenta', [
            'clientes'=>$clientes,
            'productos'=>$productos,
            'empleados'=>$empleados
        ]);
    }


    public function store(Request $request)
    {


        // Creación de la venta
        $venta = new Venta();
        $venta->cliente_id = $request->cliente_id;
        $venta->producto_id = $request->producto_id;
        $venta->empleado_id=$request->empleado_id;
        $venta->cantidad = $request->cantidad;

        // Guardar la venta
        $venta->save();
        return redirect("/ventas");

        // Redireccionar al listado de ventas
    }
    public function show($venta){
        $venta=Venta::find($venta);

        return view('ventas.showVenta',[
            'venta'=>$venta
        ]);

    }
    public function destroy($venta){
        $venta=Venta::find($venta);
        $venta->delete();
        return redirect('/ventas');
    }






    // public function edit(Venta $venta)
    // {
    //     $clientes = Cliente::all();
    //     $productos = Producto::all();
    //     return view('ventas.editVenta', compact('venta', 'clientes', 'productos'));
    // }

    // public function update(Request $request, Venta $venta)
    // {
    //     $request->validate([
    //         'cliente_id' => 'required',
    //         'producto_id' => 'required',
    //         'cantidad' => 'required|integer',
    //     ]);

    //     $producto = Producto::find($request->producto_id);
    //     $precio_total = $producto->precio * $request->cantidad;

    //     $venta->update([
    //         'cliente_id' => $request->cliente_id,
    //         'producto_id' => $request->producto_id,
    //         'cantidad' => $request->cantidad,
    //         'precio_total' => $precio_total,
    //     ]);

    //     return redirect('/ventas')->with('success', 'Venta actualizada con éxito');
    // }

    // public function destroy(Venta $venta)
    // {
    //     $venta->delete();
    //     return redirect('/ventas')->with('success', 'Venta eliminada con éxito');
    // }
}
