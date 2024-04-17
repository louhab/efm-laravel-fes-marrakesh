<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $table = "voiture_tables";
    protected $fillable = ['brand','matricules','date_mise_en_circulation',];


}
