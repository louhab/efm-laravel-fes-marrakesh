<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    protected $fillable = ["description", "date" , "Nombre_jours" ,"club_id"];
    public function eleves(){
        return $this->HasMany(Eleve::class);
    }
    public function club()
    {
        return $this->belongsTo(Club::class , "club_id");
    }  
}
