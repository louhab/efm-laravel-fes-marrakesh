<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneActionController extends Controller
{
    public function __invoke(){
        return "oki";
        }
 
}
