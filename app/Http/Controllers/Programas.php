<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Programas extends Controller
{
    //
    public function index()
    {
        $programas = DB::table("programas")
        ->join('facultades', 'facultad', '=', 'codfacultad')
        ->get(); //SELECT * FROM programas
        return view('Programas.listado', ['programas' => $programas]);
    }
}
