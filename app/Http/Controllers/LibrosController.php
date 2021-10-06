<?php

namespace App\Http\Controllers;

use App\Models\autores;
use App\Models\libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\Array_;
use PhpParser\Node\Expr\Cast\Object_;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $libros = libros::join('autores','autores.id','=','libros.autores_id')->get(['libros.id','libros.nombre','autores.autor']);
        return response()->json(
                    [
                        "code"=>200,
                        "data"=>$libros
                    ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getOne($id)
    {
        $libro = libros::join('autores','autores.id','=','libros.autores_id')->where('libros.id','=',$id)->get(['libros.id','libros.nombre','autores.autor']);
        return response()->json(
            [
                "code"=>200,
                "data"=>$libro
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
        $crear = libros::create($request->all());
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
