<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class ActviteController extends Controller
{
    public function index(){
        $activities = Activite::all();
        return view("activities.index")->with([
            "activities"=>$activities, 
        ]);
    }

}
