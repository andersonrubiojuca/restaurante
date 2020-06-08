<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Restaurantes;
use App\Users;
use Session;
use Cookie;

class Admin extends Controller
{
    //

    function registrar(Request $req){
        $users = new Users;
        $users->nome = $req->input('nome');
        $users->email = $req->input('email');
        $users->contato = $req->input('contato');
        $users->senha = Crypt::encryptString($req->input('senha'));
        $users->save();

        $req->session()->put('usuario', $req->input('nome'));
        return redirect('/');
    }

    function entrar(Request $req){
        $user = Users::whereEmail($req->input('email'))->first();

        if(isset($user) && Crypt::decryptString($user->senha) == $req->input('senha')){
            $req->session()->put('usuario', $user->nome);
            return redirect('/');
        } else{
            $req->session()->flash('login', 'Usuário e/ou senha incorreta!');
            return redirect('/login');
        }
    }

    function sair(){
        Cookie::queue(Cookie::forget('laravel_session'));

        return redirect('/');
    }
}
