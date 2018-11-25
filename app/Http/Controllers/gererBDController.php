<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BD_model;
use App\auteur_model;

class gererBDController extends Controller
{
    public function home(){
        if (isset($_POST["ajoutBD"])){ //à l'apuis du boutton "ajoutBD"
            $this->add(); //on appelle la fonction "add"
        }
        
        return view('gererBD');
    }

    public function add(){
        $titreBD = new BD_model; //appel du model "BD_model"
        $titreBD->bd_titre = request('titrebd'); //"bd_titre" = nom de la table ; "titrebd"=nom du boutton 
        $titreBD->save(); 
       
        $nomAuteur = new auteur_model; 
        $nomAuteur->auteur_nom = request('nomAuteur'); 
        $nomAuteur->auteur_prenom = request('prenomAuteur'); 
        $nomAuteur->save();

        $nomAuteur = new auteur_model; 
        $nomAuteur->auteur_nom = request('nomAuteur'); 
        $nomAuteur->auteur_prenom = request('prenomAuteur'); 
        $nomAuteur->save();
        // $Avis = new avis_model; 
        // $Avis->auteur_nom = request('nomAuteur'); 
        // $Avis->auteur_prenom = request('prenomAuteur'); 
        // $Avis->save();


    }
}
