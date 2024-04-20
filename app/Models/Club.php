<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
       protected $fillable = ["nom"];
     // Relationships
    public function eleves()
    {
        return $this->belongsToMany(Eleve::class);
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
}
