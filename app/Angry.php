<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angry extends Model
{
    protected $table = "angry"; //Nom de la table associée

    public function utilisateur(){
        return $this->belongsTo("App\User", "user_id");
        // SELECT * FROM users WHERE user_id=?
        //et le ? est remplacè par le $this->id
    }

    public function angry(){
    return $this->hasMany("App\Angry");
    }
}
