<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Formulario;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$form = Formulario::all();
        return response()->json([
            "success" => false,
            "message" => "Vemos que querias ver mas de lo permitido. Está prohibido"
        ], 401);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            "success" => false,
            "message" => "Vemos que querias hacer mas de lo permitido. Está prohibido",
        ], 401);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_dni)
    {
        $form = Formulario::where('user_dni', $user_dni)->get();
        if (isNull($form)) {
            return response()->json([
                "success" => false,
                "message" => "Formulario no Encontrado - Ingrese correctamente el RUT del usuario",
                "status" => 404
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "Exito",
            "data" => $form,
            "status" => 200
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return response()->json([
            "success" => false,
            "message" => "Vemos que querias hacer mas de lo permitido. Está prohibido"
        ], 401);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return response()->json([
            "success" => false,
            "message" => "Vemos que querias hacer mas de lo permitido. Está prohibido"
        ], 401);
    }
}
