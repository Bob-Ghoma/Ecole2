<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    //
    protected $fillable = ['firstName', 'lastName', 'telephone', 'mail', 'specialite_id'];

    public function specialite(){
        return $this->belongsTo('app/Specialite','specialite_id');
    }
}
