<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Auth;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        if( ! Auth::guest() ) {

        $productos = Producto::filterAndPaginate($request->get('nombre'), $request->get('marca'));
        return view('productos.index', compact('productos'));

        }else {

            return redirect('login');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        if( ! Auth::guest() ) {
        return view('productos.create');
        }else {

            return redirect('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->clasificacion  = $request->input('clasificacion');
        $producto->marca = $request->input('marca');

        $producto->save();

        return redirect('/productos/index/');

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
    public function getEdit($id)
    {
        if( ! Auth::guest() ) {
            $producto = Producto::find($id);
            return view('productos.edit')->with('producto',$producto);
        }else {

            return redirect('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEdit(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->clasificacion  = $request->input('clasificacion');
        $producto->marca  = $request->input('marca');

        $producto->save();
        return redirect('/productos/edit/'. $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postDestroy(Request $request)
    {
        $id = $request->input('id');
        
        $producto = Producto::find($id);

        if( $producto ) {
            $producto->delete();
        }

        Session::flash('message', $producto->nombre.'fue eliminado');


        return redirect('/productos/index/');
    }
}

