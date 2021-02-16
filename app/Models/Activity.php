<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = ['id', 'form1_id', 'form2_id', 'form3_id', 'form4_id', 'form5_id', 'form6_id', 'form7_id', 'form8_id', 'form9_id', 'form10_id', 'form11_id', 'form12_id', 'form13_id', 'form14_id'];

    public function getCreatedAtAttribute($value){
        return (Carbon::parse($value)->format('dmYHis'));
    }
    
    public function form1(){
        return $this->belongsTo('App\Models\Form1');
    }

    public function form2(){
        return $this->belongsTo('App\Models\Form2');
    }
    
    public function form3(){
        return $this->belongsTo('App\Models\Form3');
    }

    public function form4(){
        return $this->belongsTo('App\Models\Form4');
    }

    public function form5(){
        return $this->belongsTo('App\Models\Form5');
    }

    public function form6(){
        return $this->belongsTo('App\Models\Form6');
    }

    public function form7(){
        return $this->belongsTo('App\Models\Form7');
    }

    public function form8(){
        return $this->belongsTo('App\Models\Form8');
    }

    public function form9(){
        return $this->belongsTo('App\Models\Form9');
    }

    public function form10(){
        return $this->belongsTo('App\Models\Form10');
    }

    public function form11(){
        return $this->belongsTo('App\Models\Form11');
    }

    public function form12(){
        return $this->belongsTo('App\Models\Form12');
    }

    public function form13(){
        return $this->belongsTo('App\Models\Form13');
    }

    public function form14(){
        return $this->belongsTo('App\Models\Form14');
    }

}
