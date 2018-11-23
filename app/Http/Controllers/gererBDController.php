<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\titreBD;

class gererBDController extends Controller
{
    public function home(){
        $titreBD = new App\titreBD;
        $titreBD->Titre = request('Titre');
        return view('gererBD');
    }
}
