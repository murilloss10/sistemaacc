<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    //
    protected $fillable = ['tipo', 'titulo', 'onde_pub', 'dt_pub', 'status', 'usuario_id', 'customFileLang', 'lim_carga_h', 'horas_aprovadas', 'aprovacao'];

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
