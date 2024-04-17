<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture ;

class VoitureControllerVersion2 extends Controller
{
    public function get($matricule){
           $voiture = Voiture::where("matricules",$matricule)->first();
           dd($voiture);
        }
}
