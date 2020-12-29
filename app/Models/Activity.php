<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = ['id'];
    //adicionar o campo/coluna dos arquivos pdf

    public function getCreatedAtAttribute($value){
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }

    public function atividades(){
        return $this->belongsTo('App\Models\Form1');
    }
    
}
