<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function suma()
    {
        return view("operaciones.suma");
    }

    public function multiplicacion()
    {
        return view("operaciones.multiplicacion");
    }

    public function exponente()
    {
        return view("operaciones.exponente");
    }

    public function salir()
    {
        return view("operaciones.salir");
    }

    public function index()
    {
        return view("operaciones.index");
    }
}
