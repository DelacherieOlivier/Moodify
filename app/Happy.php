<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Happy extends Model
{
    protected $table = "happy"; //Nom de la table associée

    public function utilisateur(){
        return $this->belongsTo("App\User", "user_id");
        // SELECT * FROM users WHERE user_id=?
        //et le ? est remplacè par le $this->id
    }

    public function happy(){
    return $this->hasMany("App\Happy");
    }
}
