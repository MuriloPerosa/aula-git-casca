<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = ['data', 'hora', 'habito_id'];

    public function habito(){
        //indica que o histórico não pode existir sem um hábito (Pertence),
        //retorna este hábito
        return $this->belongsTo('App\Habito');
    }
}
