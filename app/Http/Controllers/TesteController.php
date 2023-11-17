<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $request)
    {
        if($request->idade >= 18){
            $adulto = true;
        } else {
            $adulto = false;
        }

        return view ('teste', [
            'nome' => $request->nome,
            'adulto' => $adulto
            //'nome' => $_GET['nome']
        ]);
    }

    public function form()
    {
        return view('form');
    }
}