<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habito extends Model
{
    protected $fillable = ['nome', 'descricao', 'tp_habito', 'dt_inicio_ctrl', 'objetivo'];

    public function historicos(){
        //retorna todos os históricos relacionados ao hábito
        return $this->hasMany('App\Historico');
    }
}
