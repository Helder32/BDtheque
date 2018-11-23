<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mesCollectionsController extends Controller
{
    public function home(){
        return view('mesCollections');
    }
}
