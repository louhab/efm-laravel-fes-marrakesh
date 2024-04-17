<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use App\Http\Requests\VoitureRequest;
class VoitureController extends Controller
{
    public function AfficherListeVoiture()
    {
        $voitures = Voiture::all();
        return view('index', compact('voitures'));
    }

    public function AjouterVoiture()
    {
        return view('create');
    }

    public function CreateVoiture(Request $request)
    {
       
        $validatedData = $request->validate([
            'matricule' => 'required|string',
            'marque' => 'required|string',
            'date_mise_en_circulation' => 'required|date',
        ]);

        if ($validatedData) {
            Voiture::create([ 
            'matricule' => $validatedData[ 'matricule' ] ,
            'marque' => $validatedData[ 'marque' ] ,
            'date_mise_en_circulation' => $validatedData[ 'date_mise_en_circulation' ] ,  
                ]);
            return response()->json("Data validated and saved successfully");
        } else {
        return back()->withErrors($validatedData)->withInput();
        }
    }

      public function DeleteCar($matricule)
    {
       $car_to_delete = Voiture::where("matricules", $matricule)->first();

if ($car_to_delete) {
    $car_to_delete->delete();
    return back()->withSuccess("The car was deleted successfully");
} else {
    return back()->withErrors("Something went wrong. Car not found.");
}

        
    }
}
