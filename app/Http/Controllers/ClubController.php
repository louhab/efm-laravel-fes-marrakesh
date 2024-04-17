<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index(){
        $clubs = Club::all();
        return view("clubs.index")->with(["clubs"=>$clubs]);


        }
}
