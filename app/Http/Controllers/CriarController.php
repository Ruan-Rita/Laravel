<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class CriarController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function create(){
        $id = 10;
        $nome = "ruan";
        $email = "ruan.rita@gmail.com";

        return view('createAccount',[
            'id'=> $id,
            'nome' => $nome,
            'email' => $email
            ]
        );
    }
    public function all(){
        $funcionario = Funcionario::all();

        return view('funcionario',['funcionario' => $funcionario]);
    }
}
