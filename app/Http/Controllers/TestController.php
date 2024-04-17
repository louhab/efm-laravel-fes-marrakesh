<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class TestController extends Controller
{
    public function eleves_from_activities(){
    $activities = Activite::all()->pluck('club');
    return ['clubs' => $activities->toArray()];

        }       
}
