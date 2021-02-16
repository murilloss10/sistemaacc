<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Form8 extends Model
{
    //
    protected $fillable = ['carga_horaria', 'nome_atividade', 'dt_atividade', 'status', 'usuario_id', 'customFileLang', 'lim_carga_h', 'horas_aprovadas', 'aprovacao'];

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
