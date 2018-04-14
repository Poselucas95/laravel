<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class homeController extends Controller
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
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [
            'required' => 'El :attribute es requerido.'
        ];

        $reglas = [
            'nombre' => 'required|max:255',
            'precio' => 'required|max:10',
            'stock' => 'required|max:10'
        ];

        $validator = Validator::make($request->all(),$reglas, $messages);

        if ($validator->fails()){
            return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
        }


        $nombre = $request->input('nombre');
        $precio = $request->input('precio');
        $stock = $request->input('stock');

        DB::table('productos')->insert(['precio'=>$precio,'nombre'=>$nombre, 'stock'=>$stock]);
        $productoAgregadoID = DB::getPdo()->lastInsertId();
        $productoAgregado = DB::table('productos')->where([['cod_producto', '=' ,$productoAgregadoID]])->get();
        return view('formulario', ['productoAgregado' => $productoAgregado]);
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
        //
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
        //
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
