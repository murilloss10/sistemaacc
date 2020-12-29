<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    //
    protected $fillable = ['tipo', 'carga_horaria', 'nome_projeto', 'dt_inicio', 'dt_fim', 'status', 'usuario_id', 'customFileLang', 'lim_carga_h'];
    //adicionar o campo/coluna dos arquivos pdf

    public function getCreatedAtAttribute($value){
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }

    public function usuario(){
        return $this->belongsTo('App\User');
    }
}
