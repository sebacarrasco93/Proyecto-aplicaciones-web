<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\form_users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.formdata.index')->with(['formularios' => Formulario::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.formdata.edit')->with(['formulario' => Formulario::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $formulario = Formulario::find($id);

        if(!$formulario) {
            $request->session()->flash('error', 'No se puede modificar el usuario, solicite ayuda al administrador');
            return redirect(route('admin.formdata.index'));
        }

        $formulario->update($request->except(['_token']));
        $formulario->save();
        $request->session()->flash('success', 'Se ha modificado correctamente el formulario');
        return redirect(route('admin.formdata.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $formulario = Formulario::find($id);
        if (!$formulario) {
            $request->session()->flash('error', 'No se encontró el formulario');
            return response()->json(['error' => 'Formulario no encontrado'], 404);
        }
        $formulario->destroy($id);
        $request->session()->flash('success', 'Se ha eliminado correctamente el formulario');
        return redirect(route('admin.formdata.index'));
    }

    public function formulario(Request $request)
    {
        $formulario = new Formulario();
        $formulario->tiposolicitud = $request->tiposolicitud;
        $formulario->apellidopaterno = $request->apellidopaterno;
        $formulario->apellidomaterno = $request->apellidomaterno;
        $formulario->user_name = $request->user_name;
        $formulario->user_dni = $request->user_dni;
        $formulario->nacionalidad = $request->nacionalidad;
        $formulario->fechanacimiento = $request->fechanacimiento;
        $formulario->sexo = $request->sexo;
        $formulario->region = $request->region;
        $formulario->tipodepropiedad = $request->tipodepropiedad;
        $formulario->user_address = $request->user_address;
        $formulario->email = $request->email;
        $formulario->telefono = $request->telefono;
        $formulario->concentimiento = $request->concentimiento;
        $formulario->tipoasegurado = $request->tipoasegurado;
        $formulario->pensionado = $request->pensionado;
        $formulario->pagadorapension = $request->pagadorapension;
        $formulario->Emp_rut = $request->Emp_rut;
        $formulario->Emp_nombre = $request->Emp_nombre;
        $formulario->Emp_direccion = $request->Emp_direccion;
        $formulario->Emp_tel = $request->Emp_tel;
        $formulario->Emp_RentaMensual = $request->Emp_RentaMensual;
        $formulario->Emp_ContratoInicio = $request->Emp_ContratoInicio;
        $formulario->Emp_ContratoTermino = $request->Emp_ContratoTermino;
        $formulario->Renta_Total = $request->Renta_Total;
        $formulario->EstabIns = $request->EstabIns;
        $formulario->Salud_establecimiento = $request->Salud_establecimiento;
        $formulario->establecimientoComuna = $request->establecimientoComuna;
        $formulario->establecimeintoRegion = $request->establecimeintoRegion;
        $formulario->save();
        $request->session()->flash('success', 'Se ha registrado correctamente el formulario');
        return redirect(url('/'));
    }
}
