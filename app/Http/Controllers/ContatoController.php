<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function contato(Request $req){
      //  var_dump($_POST);
        return view('site.contato',[
            'titulo'=>'Contato'

        ]);
    }

    public function salvar(Request $req){

        $contato = new SiteContato();
        $req->validate([

             'nome'=> 'required',
             'telefone'=> 'required',
             'email'=> 'required',
             'motivo_contato'=> 'required',
             'mensagem'=> 'required'
            ]);
       // dd($req);
    }

}
