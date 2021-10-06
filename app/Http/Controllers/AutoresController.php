<?php

namespace App\Http\Controllers;

use App\Models\autores;
use App\Models\libros;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        // $libros = libros::with('autor')->get();
        // $autores = autores::all();
        
        // $autoresWithLibros = array();
        // array_push($autoresWithLibros,$libros->nombre);
        
        // // $data = "data". => . $autores->nombre . ","."libros :" . $autoresWithLibros;
        // return response()->json(
        //             [
        //                 "code"=>200,
        //                 "data"=>$autoresWithLibros
        //             ],200);

        $autores = libros::join('autores','autores.id','=','libros.autores_id')->get(['autores.autor','libros.nombre']);
        return response()->json(
                    [
                        "code"=>200,
                        "data"=>$autores
                    ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOne($id)
    {
        $actor = libros::join('autores','autores.id','=','libros.autores_id')->where('libros.id','=',$id)->get(['libros.id','autores.autor']);
        return response()->json(
                    [
                        "code"=>200,
                        "data"=>$actor
                    ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $crear = autores::create($request->all());
        return response()->json(
            [
                "code"=>200,
                "data"=>$crear->id
            ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $edita = $this->get($id);
        $edita->fill($request->all())->save();
        return response()->json(
            [
                "code"=>200,
                "data"=>$id
            ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elimina = $this->get($id);
        $elimina->delete();
        return response()->json(
            [
                "code"=>200,
                "data"=>$id
            ],200);
    }
}
