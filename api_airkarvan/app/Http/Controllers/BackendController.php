<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\usuarios;

class BackendController extends Controller
{
    public function getProducts(){

        $productos = Producto::All();

        return $productos;

    }

    public function postProduct(Request $datos){
        
        $producto = new Producto();
        $producto -> nombre = $datos -> input('nombre');
        $producto -> descripcion = $datos -> input('descripcion');
        $producto -> talla = $datos -> input('talla');
        $producto -> categoria = $datos -> input('categoria');
        $producto -> precio = $datos -> input('precio');
        $producto -> img = $datos -> input('img');
        $producto -> save();

        return $producto;
    }

    public function getProduct($id){

        $producto = Producto::find($id);

        return $producto;

    }

    public function getUser($id){

        $usuarios = usuarios::find($id);

        return $usuarios;

    }

}
