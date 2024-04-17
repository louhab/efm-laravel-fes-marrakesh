<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
class EleveController extends Controller
{
    public function index(){
        $eleves = Eleve::all();
        return view("eleves.index")->with(["eleves"=>$eleves]);
      }  
}
