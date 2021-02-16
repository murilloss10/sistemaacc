<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Form6 extends Model
{
    //
    protected $fillable = ['quant_semestres', 'dt_inicio', 'dt_fim', 'status', 'usuario_id', 'customFileLang', 'lim_carga_h', 'horas_aprovadas', 'aprovacao'];

    public function getCreatedAtAttribute($value){
        return (Carbon::parse($value)->format('dmYHis'));
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }

    public function atividades(){
        return $this->hasMany('App\Models\Activity');
    }
    
}
