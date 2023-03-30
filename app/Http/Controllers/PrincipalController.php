<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function principal(Request $req){
        return view('site.principal',['titulo'=>'Home']);
    }

    public function rota1(){
        return redirect()->route('site.principal');
    }
}
