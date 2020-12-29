<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Form5 extends Model
{
    //
    protected $fillable = ['tipo', 'quant_semestres', 'nome_c', 'dt_inicio', 'dt_fim', 'status', 'usuario_id', 'customFileLang', 'lim_carga_h'];

    public function getCreatedAtAttribute($value){
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }
}
