<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    //
    protected $fillable = ['carga_horaria', 'nome_evento', 'dt_evento', 'status', 'usuario_id', 'customFileLang', 'lim_carga_h', 'horas_aprovadas'];

    public function getCreatedAtAttribute($value){
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }
}
