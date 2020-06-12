<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    //
    protected $fillable = ['code', 'libelle'];

    public function professeurs(){
        return $this->hasMany(Professeur::class);
    }
}
