<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class avisEtNotesController extends Controller
{
    public function home(){
        return view('mesAvisEtNotes');
    }
}
