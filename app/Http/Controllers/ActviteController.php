<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class ActviteController extends Controller
{
    public function index(){
        $clubs = Activite::all()->pluck('club');
        $activities = Activite::all();
        return view("activities.index")->with([
            "activities"=>$activities, 
            "clubs"=>$clubs
        ]);
    }
    public function show($activity){
     dd($activity->id);
    }  
}
