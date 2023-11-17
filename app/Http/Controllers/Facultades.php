<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FacultadesModel;


class Facultades extends Controller
{
    //
    public function index()
    {
        $facultades = DB::table("facultades")->get(); //SELECT * FROM facultades
        return view('Facultades.listado', ['facultades' => $facultades]);
    }
    public function form_registrar()
    {
        return view('Facultades.form_registro');
    }
    public function registrar(Request $request)
    {
        $facultad = new FacultadesModel();
        $facultad->codfacultad = $request->input('codfacultad');
        $facultad->nomfacultad = $request->input('nomfacultad');
        $facultad->save();
        return redirect()->route('listado_facultades');

    }

    public function eliminar($id){

        $facultad = FacultadesModel::findorFail($id);
        $facultad -> delete();
        return redirect()->route('listado_facultades');

    }

    public function form_editar($id)
    {
        $facultad = FacultadesModel::findorFail($id);
        return view('facultades.form_editar', ['facultad' => $facultad]);

    }

    public function editar(Request $request, $id){

        $facultad = FacultadesModel::findorFail($id);
        $facultad -> nomfacultad = $request->input('editnomfacultad');
        $facultad -> save();
        return redirect(route('listado_facultades'));
    }
        

    

}
