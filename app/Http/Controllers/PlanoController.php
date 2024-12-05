<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Plano;

class PlanoController extends Controller {
    public function index() {
        $planos = Plano::all();
        return view('admin.planos.index', compact('planos'));
    }

    public function visualizar($id) {
        $plano = Plano::findOrFail($id);
        return view('admin.planos.visualizar', compact('planos'));
    }

    public function cadastrar() {
        return view('admin.planos.cadastrar');
    }

    public function salvarCadastro(Request $request) {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'required',
            'valor' => 'required|numeric'
        ]);

        $plano = new Plano();
        $plano->titulo = $request->titulo;
        $plano->descricao = $request->descricao;
        $plano->valor = $request->valor;
        $plano->save();

        return redirect()->route('planos.index')->with('mensagem','Cadastro realizado com sucesso!');
    }

    public function editar() {
        return view('admin.planos.editar');
    }

    public function exluir(){
        return view('admin.planos.index');
    }
}
