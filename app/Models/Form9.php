<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Form9 extends Model
{
    //
    protected $fillable = ['nome_proj', 'dt_proj', 'status', 'usuario_id', 'customFileLang', 'lim_carga_h'];

    public function getCreatedAtAttribute($value){
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }
}
