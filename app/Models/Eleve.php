<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
        use HasFactory;
        protected $fillable = ["nom" , "prenom"];
        public function clubs()
        {
            return $this->belongsToMany(Club::class);
        }
        public function activities(){
            return $this->BelongsToMany(Activite::class);
        }   

}
