<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\Club;

use Illuminate\Support\Facades\Validator;

class EleveController extends Controller
{
    public function index(){
        $eleves = Eleve::all();
        return view("eleves.index")->with(["eleves"=>$eleves]);
    }
    public function show($id){
        $eleve = Eleve::find($id);
        $clubs = Club::all();
        return view("eleves.edit")->with([
          "eleve"=>$eleve, 
          "clubs"=>$clubs
        
        ]);
    }
    public function update(Request $request,$id){
      $eleve = Eleve::find($id);
      $validator = Validator::make($request->all(), [
      'nom' => 'required|string',
      'prenom' => 'required|string',
      ]);
      if ($validator->fails()) {
          return response()->json(['errors' => $validator->errors()], 422);
      }
      else {
        $eleve->update([
              'nom' => $request->nom,
              'prenom' => $request->prenom,
              'club_id' => $request->club_id,
          ]);
      }

    }
    public function destroy($id){
        Eleve::find($id)->delete();
        return response()->json(["success"=>"the student was deleted successsffully "]);
     } 
}
