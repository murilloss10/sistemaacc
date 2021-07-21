<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = ['id', 'form1_id', 'form2_id', 'form3_id', 'form4_id', 'form5_id', 'form6_id', 'form7_id', 'form8_id', 'form9_id', 'form10_id', 'form11_id', 'form12_id', 'form13_id', 'form14_id', 'form15_id', 'form16_id', 'form17_id', 'form18_id', 'form19_id', 'form20_id', 'form21_id', 'form22_id', 'form23_id', 'form24_id', 'form25_id'];

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

    public function form15(){
        return $this->belongsTo('App\Models\Form15');
    }

    public function form16(){
        return $this->belongsTo('App\Models\Form16');
    }

    public function form17(){
        return $this->belongsTo('App\Models\Form17');
    }

    public function form18(){
        return $this->belongsTo('App\Models\Form18');
    }

    public function form19(){
        return $this->belongsTo('App\Models\Form19');
    }

    public function form20(){
        return $this->belongsTo('App\Models\Form20');
    }

    public function form21(){
        return $this->belongsTo('App\Models\Form21');
    }

    public function form22(){
        return $this->belongsTo('App\Models\Form22');
    }

    public function form23(){
        return $this->belongsTo('App\Models\Form23');
    }

    public function form24(){
        return $this->belongsTo('App\Models\Form24');
    }

    public function form25(){
        return $this->belongsTo('App\Models\Form25');
    }

}
