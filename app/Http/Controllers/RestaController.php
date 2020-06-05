<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Restaurantes;
use App\Users;
use Session;

class RestaController extends Controller
{
    //

    function index(){
        return view('home');
    }

    function lista(){
        $resta = Restaurantes::all();

        return view('lista', [ "dados" => $resta ]);
    }

    function adicionar(Request $req){
        $resta = new Restaurantes;
        $resta->nome = $req->input('nome');
        $resta->email = $req->input('email');
        $resta->endereco = $req->input('endereco');
        $resta->save();

        $req->session()->flash('estado', 'Restaurante adicionado com sucesso!');
        return redirect('lista');
    }

    function deletar($nome){
        $resta = Restaurantes::where('nome', $nome)
            ->delete();

            Session::flash('estado', 'Restaurante removido com sucesso!');
            return redirect('lista');
    }

    function editar($nome){
        $resta = Restaurantes::whereNome($nome)->first();

        return view('editar', ["dados" => $resta]);
    }

    function editado(Request $req){
        $resta = Restaurantes::whereNome($req->input('nome'))->first();
        $resta->nome = $req->input('nome');
        $resta->email = $req->input('email');
        $resta->endereco = $req->input('endereco');
        $resta->save();

        $req->session()->flash('estado', 'Restaurante atualizado com sucesso!');
        return redirect('lista');
    }

    function registrar(Request $req){
        $users = new Users;
        $users->nome = $req->input('nome');
        $users->email = $req->input('email');
        $users->contato = $req->input('contato');
        $users->senha = Crypt::encrypt($req->input('senha'));
        $users->save();

        $req->session()->put('usuario', $req->input('nome'));
        return redirect('/');
    }
}
