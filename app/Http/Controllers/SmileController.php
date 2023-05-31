<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Smile;

use Illuminate\Support\Facades\DB;

class SmileSense extends Controller
{
    public function show(string $id)
    {
        $Smile = Smile::find($id);
        return view('smile.show')->with('name', $Smile);
    }

    public function index() 
    {
        $nomes = DB::select('select * from NOME_PACIENTE where active = ?', [1]);
 
        return view('tela_consul', ['nome' => $nomes]);
    }

    public function empresas() 
    {
        $empresas = DB::select('select * from NOME_EMPRESA where active = ?', [1]);
 
        return view('telalog', ['empresa' => $empresas]);
    }
    

}