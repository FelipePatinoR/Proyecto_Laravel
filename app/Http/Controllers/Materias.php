<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Materias extends Controller
{
    //
    public function index()
    {
        return view('Materias.listado');
    }
}
