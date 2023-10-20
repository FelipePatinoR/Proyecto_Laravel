<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Facultades extends Controller
{
    //
    public function index()
    {
        return view('Facultades.listado');
    }
}
