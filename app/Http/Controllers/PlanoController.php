<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanoController extends Controller
{
    public function index(){
     return view('admin.planos.index');
    }

    public function visualizar()
    {
        return view('admin.planos.visualizar');
    }

    public function cadastrar()
    {
        return view('admin.planos.cadastrar');
    }
    public function editar()
    {
        return view('admin.planos.editar');
    }

    public function exluir()
    {
        return view('admin.planos.index');
    }
}
