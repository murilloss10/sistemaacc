<?php

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use App\Http\Requests\Form1Request;
use App\Http\Requests\Form2Request;
use App\Http\Requests\Form3Request;
use App\Http\Requests\Form4Request;
use App\Http\Requests\Form5Request;
use App\Http\Requests\Form6Request;
use App\Http\Requests\Form7Request;
use App\Http\Requests\Form8Request;
use App\Http\Requests\Form9Request;
use App\Http\Requests\Form10Request;
use App\Http\Requests\Form11Request;
use App\Http\Requests\Form12Request;
use App\Http\Requests\Form13Request;
use App\Http\Requests\Form14Request;

use App\Models\Activity;
use App\User;
use App\Models\Form1;
use App\Models\Form2;
use App\Models\Form3;
use App\Models\Form4;
use App\Models\Form5;
use App\Models\Form6;
use App\Models\Form7;
use App\Models\Form8;
use App\Models\Form9;
use App\Models\Form10;
use App\Models\Form11;
use App\Models\Form12;
use App\Models\Form13;
use App\Models\Form14;
use App\Models\Form15;
use App\Models\Form16;
use App\Models\Form17;
use App\Models\Form18;
use App\Models\Form19;
use App\Models\Form20;
use App\Models\Form21;
use App\Models\Form22;
use App\Models\Form23;
use App\Models\Form24;
use App\Models\Form25;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

use Flash;
use Illuminate\Support\Facades\Session;

class ActivityController extends Controller
{

    public function atividades(){
        if(Gate::authorize('normal')){
            $dados = Activity::all();
            $idUser = Auth::id();
            $chMaxF1 = 200;
            $chMaxF2 = 120;
            $chMaxF3 = 120;
            $chMaxF4 = 30;
            $chMaxF5 = 80;
            $chMaxF6 = 80;
            $chMaxF7 = 50;
            $chMaxF8 = 150;
            $chMaxF9 = 60;
            $chMaxF10 = 80;
            $chMaxF11 = 50;
            $chMaxF12 = 50;
            $chMaxF13 = 60;
            $chMaxF14 = 200;
            $chMaxF15 = 100;
            $chMaxF16 = 100;
            $chMaxF17 = 100;
            $chMaxF18 = 100;
            $chMaxF19 = 50;
            $chMaxF20 = 100;
            $chMaxF21 = 60;
            $chMaxF22 = 60;
            $chMaxF23 = 100;
            $chMaxF24 = 80;
            $chMaxF25 = 100;
            $limTF1 = Form1::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF2 = Form2::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF3 = Form3::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF4 = Form4::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF5 = Form5::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF6 = Form6::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF7 = Form7::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF8 = Form8::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF9 = Form9::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF10 = Form10::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF11 = Form11::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF12 = Form12::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF13 = Form13::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF14 = Form14::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF15 = Form15::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF16 = Form16::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF17 = Form17::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF18 = Form18::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF19 = Form19::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF20 = Form20::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF21 = Form21::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF22 = Form22::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF23 = Form23::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF24 = Form24::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF25 = Form25::where('usuario_id', $idUser)->sum('horas_aprovadas');
            //$dadosForm1 = Form1::all();
            $dadosForm1 = Form1::all();
            $dadosForm2 = Form2::all();
            $dadosForm3 = Form3::all();
            $dadosForm4 = Form4::all();
            $dadosForm5 = Form5::all();
            $dadosForm6 = Form6::all();
            $dadosForm7 = Form7::all();
            $dadosForm8 = Form8::all();
            $dadosForm9 = Form9::all();
            $dadosForm10 = Form10::all();
            $dadosForm11 = Form11::all();
            $dadosForm12 = Form12::all();
            $dadosForm13 = Form13::all();
            $dadosForm14 = Form14::all();
            $dadosForm15 = Form15::all();
            $dadosForm16 = Form16::all();
            $dadosForm17 = Form17::all();
            $dadosForm18 = Form18::all();
            $dadosForm19 = Form19::all();
            $dadosForm20 = Form20::all();
            $dadosForm21 = Form21::all();
            $dadosForm22 = Form22::all();
            $dadosForm23 = Form23::all();
            $dadosForm24 = Form24::all();
            $dadosForm25 = Form25::all();
            $authorized = Auth::id();
            return view('activities')->with('dados', $dados)
                ->with('authorized', $authorized)
                ->with('dadosForm1', $dadosForm1)
                ->with('dadosForm2', $dadosForm2)
                ->with('dadosForm3', $dadosForm3)
                ->with('dadosForm4', $dadosForm4)
                ->with('dadosForm5', $dadosForm5)
                ->with('dadosForm6', $dadosForm6)
                ->with('dadosForm7', $dadosForm7)
                ->with('dadosForm8', $dadosForm8)
                ->with('dadosForm9', $dadosForm9)
                ->with('dadosForm10', $dadosForm10)
                ->with('dadosForm11', $dadosForm11)
                ->with('dadosForm12', $dadosForm12)
                ->with('dadosForm13', $dadosForm13)
                ->with('dadosForm14', $dadosForm14)
                ->with('dadosForm15', $dadosForm15)
                ->with('dadosForm16', $dadosForm16)
                ->with('dadosForm17', $dadosForm17)
                ->with('dadosForm18', $dadosForm18)
                ->with('dadosForm19', $dadosForm19)
                ->with('dadosForm20', $dadosForm20)
                ->with('dadosForm21', $dadosForm21)
                ->with('dadosForm22', $dadosForm22)
                ->with('dadosForm23', $dadosForm23)
                ->with('dadosForm24', $dadosForm24)
                ->with('dadosForm25', $dadosForm25)
                ->with('idUser', $idUser)
                ->with('limTF1', $limTF1)
                ->with('limTF2', $limTF2)
                ->with('limTF3', $limTF3)
                ->with('limTF4', $limTF4)
                ->with('limTF5', $limTF5)
                ->with('limTF6', $limTF6)
                ->with('limTF7', $limTF7)
                ->with('limTF8', $limTF8)
                ->with('limTF9', $limTF9)
                ->with('limTF10', $limTF10)
                ->with('limTF11', $limTF11)
                ->with('limTF12', $limTF12)
                ->with('limTF13', $limTF13)
                ->with('limTF14', $limTF14)
                ->with('limTF15', $limTF15)
                ->with('limTF16', $limTF16)
                ->with('limTF17', $limTF17)
                ->with('limTF18', $limTF18)
                ->with('limTF19', $limTF19)
                ->with('limTF20', $limTF20)
                ->with('limTF21', $limTF21)
                ->with('limTF22', $limTF22)
                ->with('limTF23', $limTF23)
                ->with('limTF24', $limTF24)
                ->with('limTF25', $limTF25)
                ->with('chMaxF1', $chMaxF1)
                ->with('chMaxF2', $chMaxF2)
                ->with('chMaxF3', $chMaxF3)
                ->with('chMaxF4', $chMaxF4)
                ->with('chMaxF5', $chMaxF5)
                ->with('chMaxF6', $chMaxF6)
                ->with('chMaxF7', $chMaxF7)
                ->with('chMaxF8', $chMaxF8)
                ->with('chMaxF9', $chMaxF9)
                ->with('chMaxF10', $chMaxF10)
                ->with('chMaxF11', $chMaxF11)
                ->with('chMaxF12', $chMaxF12)
                ->with('chMaxF13', $chMaxF13)
                ->with('chMaxF14', $chMaxF14)
                ->with('chMaxF15', $chMaxF15)
                ->with('chMaxF16', $chMaxF16)
                ->with('chMaxF17', $chMaxF17)
                ->with('chMaxF18', $chMaxF18)
                ->with('chMaxF19', $chMaxF19)
                ->with('chMaxF20', $chMaxF20)
                ->with('chMaxF21', $chMaxF21)
                ->with('chMaxF22', $chMaxF22)
                ->with('chMaxF23', $chMaxF23)
                ->with('chMaxF24', $chMaxF24)
                ->with('chMaxF25', $chMaxF25);
        }
    }

    public function pagForm($sucess){ //função revisada

        if(Gate::authorize('normal')){
            
            $sucess = $sucess;
            $user = User::all();
            $idUser = Auth::id();
            $nameUser = Auth::user()->name;
            $chMaxF1 = 200;
            $chMaxF2 = 120;
            $chMaxF3 = 120;
            $chMaxF4 = 30;
            $chMaxF5 = 80;
            $chMaxF6 = 80;
            $chMaxF7 = 50;
            $chMaxF8 = 150;
            $chMaxF9 = 60;
            $chMaxF10 = 80;
            $chMaxF11 = 50;
            $chMaxF12 = 50;
            $chMaxF13 = 60;
            $chMaxF14 = 200;
            $chMaxF15 = 100;
            $chMaxF16 = 100;
            $chMaxF17 = 100;
            $chMaxF18 = 100;
            $chMaxF19 = 50;
            $chMaxF20 = 100;
            $chMaxF21 = 60;
            $chMaxF22 = 60;
            $chMaxF23 = 100;
            $chMaxF24 = 80;
            $chMaxF25 = 100;
            $limTF1 = Form1::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF2 = Form2::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF3 = Form3::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF4 = Form4::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF5 = Form5::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF6 = Form6::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF7 = Form7::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF8 = Form8::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF9 = Form9::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF10 = Form10::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF11 = Form11::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF12 = Form12::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF13 = Form13::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF14 = Form14::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $limTF15 = Form15::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF16 = Form16::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF17 = Form17::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF18 = Form18::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF19 = Form19::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF20 = Form20::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF21 = Form21::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF22 = Form22::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF23 = Form23::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF24 = Form24::where('usuario_id', $idUser)->sum('lim_carga_h');
            $limTF25 = Form25::where('usuario_id', $idUser)->sum('lim_carga_h');
            return view('submit')->with('user', $user)->with('idUser', $idUser)->with('nameUser', $nameUser)
                ->with('limTF1', $limTF1)
                ->with('limTF2', $limTF2)
                ->with('limTF3', $limTF3)
                ->with('limTF4', $limTF4)
                ->with('limTF5', $limTF5)
                ->with('limTF6', $limTF6)
                ->with('limTF7', $limTF7)
                ->with('limTF8', $limTF8)
                ->with('limTF9', $limTF9)
                ->with('limTF10', $limTF10)
                ->with('limTF11', $limTF11)
                ->with('limTF12', $limTF12)
                ->with('limTF13', $limTF13)
                ->with('limTF14', $limTF14)
                ->with('limTF15', $limTF15)
                ->with('limTF16', $limTF16)
                ->with('limTF17', $limTF17)
                ->with('limTF18', $limTF18)
                ->with('limTF19', $limTF19)
                ->with('limTF20', $limTF20)
                ->with('limTF21', $limTF21)
                ->with('limTF22', $limTF22)
                ->with('limTF23', $limTF23)
                ->with('limTF24', $limTF24)
                ->with('limTF25', $limTF25)
                ->with('chMaxF1', $chMaxF1)
                ->with('chMaxF2', $chMaxF2)
                ->with('chMaxF3', $chMaxF3)
                ->with('chMaxF4', $chMaxF4)
                ->with('chMaxF5', $chMaxF5)
                ->with('chMaxF6', $chMaxF6)
                ->with('chMaxF7', $chMaxF7)
                ->with('chMaxF8', $chMaxF8)
                ->with('chMaxF9', $chMaxF9)
                ->with('chMaxF10', $chMaxF10)
                ->with('chMaxF11', $chMaxF11)
                ->with('chMaxF12', $chMaxF12)
                ->with('chMaxF13', $chMaxF13)
                ->with('chMaxF14', $chMaxF14)
                ->with('chMaxF15', $chMaxF15)
                ->with('chMaxF16', $chMaxF16)
                ->with('chMaxF17', $chMaxF17)
                ->with('chMaxF18', $chMaxF18)
                ->with('chMaxF19', $chMaxF19)
                ->with('chMaxF20', $chMaxF20)
                ->with('chMaxF21', $chMaxF21)
                ->with('chMaxF22', $chMaxF22)
                ->with('chMaxF23', $chMaxF23)
                ->with('chMaxF24', $chMaxF24)
                ->with('chMaxF25', $chMaxF25)
                ->with('sucess', $sucess);
        }
    }

    public function allListActivities(){
        
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $chNecessaria = 140;
            $authorized = Auth::id();
            $aproTF1 = Form1::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF2 = Form2::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF3 = Form3::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF4 = Form4::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF5 = Form5::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF6 = Form6::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF7 = Form7::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF8 = Form8::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF9 = Form9::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF10 = Form10::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF11 = Form11::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF12 = Form12::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF13 = Form13::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF14 = Form14::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $chAproT = $aproTF1+$aproTF2+$aproTF3+$aproTF4+$aproTF5+$aproTF6+$aproTF7+$aproTF8+$aproTF9+$aproTF10+$aproTF11+$aproTF12+$aproTF13+$aproTF14;
            $tdForm1 = Form1::all();
            $tdForm2 = Form2::all();
            $tdForm3 = Form3::all();
            $tdForm4 = Form4::all();
            $tdForm5 = Form5::all();
            $tdForm6 = Form6::all();
            $tdForm7 = Form7::all();
            $tdForm8 = Form8::all();
            $tdForm9 = Form9::all();
            $tdForm10 = Form10::all();
            $tdForm11 = Form11::all();
            $tdForm12 = Form12::all();
            $tdForm13 = Form13::all();
            $tdForm14 = Form14::all();
            $atividades = Activity::all();
            $tamForm1 = Form1::count();
            $tamForm2 = Form2::count();
            $tamForm3 = Form3::count();
            $tamForm4 = Form4::count();
            $tamForm5 = Form5::count();
            $tamForm6 = Form6::count();
            $tamForm7 = Form7::count();
            $tamForm8 = Form8::count();
            $tamForm9 = Form9::count();
            $tamForm10 = Form10::count();
            $tamForm11 = Form11::count();
            $tamForm12 = Form12::count();
            $tamForm13 = Form13::count();
            $tamForm14 = Form14::count();
            $tamTotalForms = $tamForm1+$tamForm2+$tamForm3+$tamForm4+$tamForm5+$tamForm6+$tamForm7+$tamForm8+$tamForm9+$tamForm10+$tamForm11+$tamForm12+$tamForm13+$tamForm14;


            return view('view_last_activities')
            ->with('atividades', $atividades)
            ->with('idUser', $idUser)
            ->with('chNecessaria', $chNecessaria)
            ->with('authorized', $authorized)
            ->with('aproTF1', $aproTF1)
            ->with('aproTF2', $aproTF2)
            ->with('aproTF3', $aproTF3)
            ->with('aproTF4', $aproTF4)
            ->with('aproTF5', $aproTF5)
            ->with('aproTF6', $aproTF6)
            ->with('aproTF7', $aproTF7)
            ->with('aproTF8', $aproTF8)
            ->with('aproTF9', $aproTF9)
            ->with('aproTF10', $aproTF10)
            ->with('aproTF11', $aproTF11)
            ->with('aproTF12', $aproTF12)
            ->with('aproTF13', $aproTF13)
            ->with('aproTF14', $aproTF14)
            ->with('chAproT', $chAproT)
            ->with('tdForm1', $tdForm1)
            ->with('tdForm2', $tdForm2)
            ->with('tdForm3', $tdForm3)
            ->with('tdForm4', $tdForm4)
            ->with('tdForm5', $tdForm5)
            ->with('tdForm6', $tdForm6)
            ->with('tdForm7', $tdForm7)
            ->with('tdForm8', $tdForm8)
            ->with('tdForm9', $tdForm9)
            ->with('tdForm10', $tdForm10)
            ->with('tdForm11', $tdForm11)
            ->with('tdForm12', $tdForm12)
            ->with('tdForm13', $tdForm13)
            ->with('tdForm14', $tdForm14)
            ->with('tamTotalForms', $tamTotalForms);



        }

    }

    public function allListActivitiesApproved($id){
        
        if(Gate::authorize('administrador')){
            
            $idUser = User::find($id)->id;
            $chNecessaria = 140;
            $authorized = $id;
            $aproTF1 = Form1::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF2 = Form2::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF3 = Form3::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF4 = Form4::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF5 = Form5::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF6 = Form6::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF7 = Form7::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF8 = Form8::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF9 = Form9::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF10 = Form10::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF11 = Form11::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF12 = Form12::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF13 = Form13::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $aproTF14 = Form14::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $chAproT = $aproTF1+$aproTF2+$aproTF3+$aproTF4+$aproTF5+$aproTF6+$aproTF7+$aproTF8+$aproTF9+$aproTF10+$aproTF11+$aproTF12+$aproTF13+$aproTF14;
            $tdForm1 = Form1::all();
            $tdForm2 = Form2::all();
            $tdForm3 = Form3::all();
            $tdForm4 = Form4::all();
            $tdForm5 = Form5::all();
            $tdForm6 = Form6::all();
            $tdForm7 = Form7::all();
            $tdForm8 = Form8::all();
            $tdForm9 = Form9::all();
            $tdForm10 = Form10::all();
            $tdForm11 = Form11::all();
            $tdForm12 = Form12::all();
            $tdForm13 = Form13::all();
            $tdForm14 = Form14::all();
            $atividades = Activity::all();
            $tamForm1 = Form1::count();
            $tamForm2 = Form2::count();
            $tamForm3 = Form3::count();
            $tamForm4 = Form4::count();
            $tamForm5 = Form5::count();
            $tamForm6 = Form6::count();
            $tamForm7 = Form7::count();
            $tamForm8 = Form8::count();
            $tamForm9 = Form9::count();
            $tamForm10 = Form10::count();
            $tamForm11 = Form11::count();
            $tamForm12 = Form12::count();
            $tamForm13 = Form13::count();
            $tamForm14 = Form14::count();
            $tamTotalForms = $tamForm1+$tamForm2+$tamForm3+$tamForm4+$tamForm5+$tamForm6+$tamForm7+$tamForm8+$tamForm9+$tamForm10+$tamForm11+$tamForm12+$tamForm13+$tamForm14;


            return view('view_last_activities')
            ->with('atividades', $atividades)
            ->with('idUser', $idUser)
            ->with('chNecessaria', $chNecessaria)
            ->with('authorized', $authorized)
            ->with('aproTF1', $aproTF1)
            ->with('aproTF2', $aproTF2)
            ->with('aproTF3', $aproTF3)
            ->with('aproTF4', $aproTF4)
            ->with('aproTF5', $aproTF5)
            ->with('aproTF6', $aproTF6)
            ->with('aproTF7', $aproTF7)
            ->with('aproTF8', $aproTF8)
            ->with('aproTF9', $aproTF9)
            ->with('aproTF10', $aproTF10)
            ->with('aproTF11', $aproTF11)
            ->with('aproTF12', $aproTF12)
            ->with('aproTF13', $aproTF13)
            ->with('aproTF14', $aproTF14)
            ->with('chAproT', $chAproT)
            ->with('tdForm1', $tdForm1)
            ->with('tdForm2', $tdForm2)
            ->with('tdForm3', $tdForm3)
            ->with('tdForm4', $tdForm4)
            ->with('tdForm5', $tdForm5)
            ->with('tdForm6', $tdForm6)
            ->with('tdForm7', $tdForm7)
            ->with('tdForm8', $tdForm8)
            ->with('tdForm9', $tdForm9)
            ->with('tdForm10', $tdForm10)
            ->with('tdForm11', $tdForm11)
            ->with('tdForm12', $tdForm12)
            ->with('tdForm13', $tdForm13)
            ->with('tdForm14', $tdForm14)
            ->with('tamTotalForms', $tamTotalForms);



        }

    }

    public function form1(Form1Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form1::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 50;
        $chMax = 200;


        if($request->file('customFileLang1')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang1->extension();
            $request->file('customFileLang1')->storeAs('public', $nameA); //alterando a pasta arquivoPdf para a pasta public

            if($limT <= $chMax){
                if($limT+$request->input('carga_horaria1') <= $chMax){
                    if($request->input('carga_horaria1') <= $chLim){
                        $lim = $request->input('carga_horaria1');
                    }
                    else if($request->input('carga_horaria1') > $chLim){
                        $lim = 50;
                    }
                }
                else if($limT+$request->input('carga_horaria1') > $chMax){
                    $lim = $chMax - $limT;
                }
            }


            $data = Form1::create(array(
                'tipo' => $request->input('tipo1'),
                'carga_horaria' => $request->input('carga_horaria1'),
                'nome_projeto' => $request->input('nome_projeto1'),
                'dt_inicio' => $request->input('dt_inicio1'),
                'dt_fim' => $request->input('dt_fim1'),
                'status' => $request->input('status1'),
                'usuario_id' => $request->input('usuario_id1'),
                'customFileLang' => $nameA,
                'lim_carga_h' => $lim,
                'horas_aprovadas' => $request->input('horas_aprovadas1'),
                'aprovacao' => $request->input('aprovacao1'),
            ));

        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess)->with('success', 'Atividade cadastrada com sucesso!');

    }

    public function form2(Form2Request $request){ //função revisada

        $idUser = Auth::id();
        $limTForm2 = Form2::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm15 = Form15::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimArtigo = 40;
        $chLimResumo = 20;
        $chMaxArtigo = 120;
        $chMaxResumo = 100;

        if($request->file('customFileLang2')->isValid()){


            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang2->extension();
            $request->file('customFileLang2')->storeAs('public', $nameA);

            if($request->input('tipo2') == 'Artigo'){
                if($limTForm2 <= $chMaxArtigo){
                    if($limTForm2+$chLimArtigo <= $chMaxArtigo){
                        $lim = $chLimArtigo;
                    }
                    else if($limTForm2+$chLimArtigo > $chMaxArtigo){
                        $lim = $chMaxArtigo - $limTForm2;
                    }
                }

                $data = Form2::create(array(
                    'tipo' => $request->input('tipo2'),
                    'titulo' => $request->input('titulo2'),
                    'onde_pub' => $request->input('onde_pub2'),
                    'dt_pub' => $request->input('dt_pub2'),
                    'status' => $request->input('status2'),
                    'usuario_id' => $request->input('usuario_id2'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));
                
            }
            else if($request->input('tipo2') == 'Resumo'){
                if($limTForm15 <= $chMaxResumo){
                    if($limTForm15+$chLimResumo <= $chMaxResumo){
                        $lim = $chLimResumo;
                    }
                    else if($limTForm15+$chLimResumo > $chMaxResumo){
                        $lim = $chMaxResumo - $limTForm15;
                    }
                }

                $data = Form15::create(array(
                    'tipo' => $request->input('tipo2'),
                    'titulo' => $request->input('titulo2'),
                    'onde_pub' => $request->input('onde_pub2'),
                    'dt_pub' => $request->input('dt_pub2'),
                    'status' => $request->input('status2'),
                    'usuario_id' => $request->input('usuario_id2'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));
            }


        }

        $sucess = "atividade-sucesso";

        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form3(Form3Request $request){ //função revisada

        $idUser = Auth::id();
        $limTForm3 = Form3::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm16 = Form16::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm17 = Form17::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm18 = Form18::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm19 = Form19::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm20 = Form20::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm21 = Form21::where('usuario_id', $idUser)->sum('lim_carga_h');
        
        $limComCentral = 40;
        $limComSecundaria = 20;
        $chComCentral = 120;
        $chComSecundaria = 100;
        
        $limPartiEventoNacReg = 20;
        $limPartiEventoLocal = 10;
        $limPartiPalestra = 5;
        $chPartiEventoNacReg = 100;
        $chPartiEventoLocal = 100;
        $chPartiPalestra = 50;

        $limApreseTrabalho = 10;
        $chApreseTrabalho = 100;

        $limPalestrante = 15;
        $chPalestrante = 60;
        

        if($request->file('customFileLang3')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang3->extension();
            $request->file('customFileLang3')->storeAs('public', $nameA);

            if($request->input('tipo3') == 'Comissão Central de Organização'){ //form3
                if($limTForm3 <= $chComCentral){
                    if($request->input('carga_horaria3') <= $limComCentral){
                        if($limTForm3+$request->input('carga_horaria3') <= $chComCentral){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limTForm3+$request->input('carga_horaria3') > $chComCentral){
                            $lim = $chComCentral - $limTForm3;
                        }
                    }
                    else {
                        if($limTForm3+$limComCentral <= $chComCentral){
                            $lim = $limComCentral;
                        }
                        else if($limTForm3+$limComCentral > $chComCentral){
                            $lim = $chComCentral - $limTForm3;
                        }
                    }
                }

                $data = Form3::create(array(
                    'tipo' => $request->input('tipo3'),
                    'carga_horaria' => $request->input('carga_horaria3'),
                    'nome_evento' => $request->input('nome_evento3'),
                    'local' => $request->input('local3'),
                    'dt_inicio' => $request->input('dt_inicio3'),
                    'dt_fim' => $request->input('dt_fim3'),
                    'status' => $request->input('status3'),
                    'usuario_id' => $request->input('usuario_id3'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo3') == 'Comissão Secundária de Organização'){ //form16
                if($limTForm16 <= $chComSecundaria){
                    if($request->input('carga_horaria3') <= $limComSecundaria){
                        if($limTForm16+$request->input('carga_horaria3') <= $chComSecundaria){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limTForm16+$request->input('carga_horaria3') > $chComSecundaria){
                            $lim = $chComSecundaria - $limTForm16;
                        }
                    }
                    else {
                        if($limTForm16+$limComSecundaria <= $chComSecundaria){
                            $lim = $limComSecundaria;
                        }
                        else if($limTForm16+$limComSecundaria > $chComSecundaria){
                            $lim = $chComSecundaria - $limTForm16;
                        }
                    }
                }

                $data = Form16::create(array(
                    'tipo' => $request->input('tipo3'),
                    'carga_horaria' => $request->input('carga_horaria3'),
                    'nome_evento' => $request->input('nome_evento3'),
                    'local' => $request->input('local3'),
                    'dt_inicio' => $request->input('dt_inicio3'),
                    'dt_fim' => $request->input('dt_fim3'),
                    'status' => $request->input('status3'),
                    'usuario_id' => $request->input('usuario_id3'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo3') == 'Participação em Evento Científico Nacional ou Regional'){ //form17
                if($limTForm17 <= $chPartiEventoNacReg){
                    if($request->input('carga_horaria3') <= $limPartiEventoNacReg){
                        if($limTForm17+$request->input('carga_horaria3') <= $chPartiEventoNacReg){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limTForm17+$request->input('carga_horaria3') > $chPartiEventoNacReg){
                            $lim = $chPartiEventoNacReg - $limTForm17;
                        }
                    }
                    else {
                        if($limTForm17+$limPartiEventoNacReg <= $chPartiEventoNacReg){
                            $lim = $limPartiEventoNacReg;
                        }
                        else if($limTForm17+$limPartiEventoNacReg > $chPartiEventoNacReg){
                            $lim = $chPartiEventoNacReg - $limTForm17;
                        }
                    }
                }

                $data = Form17::create(array(
                    'tipo' => $request->input('tipo3'),
                    'carga_horaria' => $request->input('carga_horaria3'),
                    'nome_evento' => $request->input('nome_evento3'),
                    'local' => $request->input('local3'),
                    'dt_inicio' => $request->input('dt_inicio3'),
                    'dt_fim' => $request->input('dt_fim3'),
                    'status' => $request->input('status3'),
                    'usuario_id' => $request->input('usuario_id3'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo3') == 'Participação em Evento Científico Local'){ //form18
                if($limTForm18 <= $chPartiEventoLocal){
                    if($request->input('carga_horaria3') <= $limPartiEventoLocal){
                        if($limTForm18+$request->input('carga_horaria3') <= $chPartiEventoLocal){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limTForm18+$request->input('carga_horaria3') > $chPartiEventoLocal){
                            $lim = $chPartiEventoLocal - $limTForm18;
                        }
                    }
                    else {
                        if($limTForm18+$limPartiEventoLocal <= $chPartiEventoLocal){
                            $lim = $limPartiEventoLocal;
                        }
                        else if($limTForm18+$limPartiEventoLocal > $chPartiEventoLocal){
                            $lim = $chPartiEventoLocal - $limTForm18;
                        }
                    }
                }

                $data = Form18::create(array(
                    'tipo' => $request->input('tipo3'),
                    'carga_horaria' => $request->input('carga_horaria3'),
                    'nome_evento' => $request->input('nome_evento3'),
                    'local' => $request->input('local3'),
                    'dt_inicio' => $request->input('dt_inicio3'),
                    'dt_fim' => $request->input('dt_fim3'),
                    'status' => $request->input('status3'),
                    'usuario_id' => $request->input('usuario_id3'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo3') == 'Participação em Palestra e Conferências'){ //form19
                if($limTForm19 <= $chPartiPalestra){
                    if($request->input('carga_horaria3') <= $limPartiPalestra){
                        if($limTForm19+$request->input('carga_horaria3') <= $chPartiPalestra){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limTForm19+$request->input('carga_horaria3') > $chPartiPalestra){
                            $lim = $chPartiPalestra - $limTForm19;
                        }
                    }
                    else {
                        if($limTForm19+$limPartiPalestra <= $chPartiPalestra){
                            $lim = $limPartiPalestra;
                        }
                        else if($limTForm19+$limPartiPalestra > $chPartiPalestra){
                            $lim = $chPartiPalestra - $limTForm19;
                        }
                    }
                }

                $data = Form19::create(array(
                    'tipo' => $request->input('tipo3'),
                    'carga_horaria' => $request->input('carga_horaria3'),
                    'nome_evento' => $request->input('nome_evento3'),
                    'local' => $request->input('local3'),
                    'dt_inicio' => $request->input('dt_inicio3'),
                    'dt_fim' => $request->input('dt_fim3'),
                    'status' => $request->input('status3'),
                    'usuario_id' => $request->input('usuario_id3'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo3') == 'Apresentação em Evento Científico'){ //form20
                if($limTForm20 <= $chApreseTrabalho){
                    if($request->input('carga_horaria3') <= $limApreseTrabalho){
                        if($limTForm20+$request->input('carga_horaria3') <= $chApreseTrabalho){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limTForm20+$request->input('carga_horaria3') > $chApreseTrabalho){
                            $lim = $chApreseTrabalho - $limTForm20;
                        }
                    }
                    else {
                        if($limTForm20+$limApreseTrabalho <= $chApreseTrabalho){
                            $lim = $limApreseTrabalho;
                        }
                        else if($limTForm20+$limApreseTrabalho > $chApreseTrabalho){
                            $lim = $chApreseTrabalho - $limTForm20;
                        }
                    }
                }

                $data = Form20::create(array(
                    'tipo' => $request->input('tipo3'),
                    'carga_horaria' => $request->input('carga_horaria3'),
                    'nome_evento' => $request->input('nome_evento3'),
                    'local' => $request->input('local3'),
                    'dt_inicio' => $request->input('dt_inicio3'),
                    'dt_fim' => $request->input('dt_fim3'),
                    'status' => $request->input('status3'),
                    'usuario_id' => $request->input('usuario_id3'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo3') == 'Palestrante em Evento Científico'){ //form21
                if($limTForm21 <= $chPalestrante){
                    if($request->input('carga_horaria3') <= $limPalestrante){
                        if($limTForm21+$request->input('carga_horaria3') <= $chPalestrante){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limTForm21+$request->input('carga_horaria3') > $chPalestrante){
                            $lim = $chPalestrante - $limTForm21;
                        }
                    }
                    else {
                        if($limTForm21+$limPalestrante <= $chPalestrante){
                            $lim = $limPalestrante;
                        }
                        else if($limTForm21+$limPalestrante > $chPalestrante){
                            $lim = $chPalestrante - $limTForm21;
                        }
                    }
                }

                $data = Form21::create(array(
                    'tipo' => $request->input('tipo3'),
                    'carga_horaria' => $request->input('carga_horaria3'),
                    'nome_evento' => $request->input('nome_evento3'),
                    'local' => $request->input('local3'),
                    'dt_inicio' => $request->input('dt_inicio3'),
                    'dt_fim' => $request->input('dt_fim3'),
                    'status' => $request->input('status3'),
                    'usuario_id' => $request->input('usuario_id3'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }

        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form4(Form4Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form4::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chMax = 30;
        $limPremiacao = 10;

        if($request->file('customFileLang4')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang4->extension();
            $request->file('customFileLang4')->storeAs('public', $nameA);

            if($limT <= $chMax){
                if($limT+$limPremiacao <= $chMax){
                    $lim = $limPremiacao;
                }
                else if($limT+$limPremiacao > $chMax){
                    $lim = $chMax - $limT;
                }
            }

            $data = Form4::create(array(
                'carga_horaria' => $request->input('carga_horaria4'),
                'nome_evento' => $request->input('nome_evento4'),
                'dt_evento' => $request->input('dt_evento4'),
                'status' => $request->input('status4'),
                'usuario_id' => $request->input('usuario_id4'),
                'customFileLang' => $nameA,
                'lim_carga_h' => $lim,
                'aprovacao' => 'Não',
            ));
        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form5(Form5Request $request){ //função revisada

        $idUser = Auth::id();
        $limTForm5 = Form5::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm22 = Form22::where('usuario_id', $idUser)->sum('lim_carga_h');
        
        $limDA = 40;
        $limColegiado = 15;
        $chDA = 80;
        $chColegiado = 60;

        if($request->file('customFileLang5')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang5->extension();
            $request->file('customFileLang5')->storeAs('public', $nameA);

            if($request->input('tipo5') == 'Diretório Acadêmico'){
                if($limTForm5 <= $chDA){
                    if($request->input('quant_semestres5') >= 2){
                        if($limTForm5+$limDA <= $chDA){
                            $lim = $limDA;
                        }
                        else if($limTForm5+$limDA > $chDA){
                            $lim = $chDA - $limTForm5;
                        }
                    }
                    else {
                        $lim = 0;
                    }
                }
                else{
                    $lim = 0;
                }

                $data = Form5::create(array(
                    'tipo' => $request->input('tipo5'),
                    'quant_semestres' => $request->input('quant_semestres5'),
                    'nome_c' => $request->input('nome_c5'),
                    'dt_inicio' => $request->input('dt_inicio5'),
                    'dt_fim' => $request->input('dt_fim5'),
                    'status' => $request->input('status5'),
                    'usuario_id' => $request->input('usuario_id5'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo5') == 'Conselho ou Colegiado'){
                if($request->input('quant_semestres5')*$limColegiado <= $chColegiado-$limTForm22){
                    $lim = $request->input('quant_semestres5')*$limColegiado;
                }
                else if($request->input('quant_semestres5')*$limColegiado > $chColegiado-$limTForm22){
                    $lim = $chColegiado - $limTForm22;
                }

                $data = Form22::create(array(
                    'tipo' => $request->input('tipo5'),
                    'quant_semestres' => $request->input('quant_semestres5'),
                    'nome_c' => $request->input('nome_c5'),
                    'dt_inicio' => $request->input('dt_inicio5'),
                    'dt_fim' => $request->input('dt_fim5'),
                    'status' => $request->input('status5'),
                    'usuario_id' => $request->input('usuario_id5'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }

        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form6(Form6Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form6::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimEJ = 40;
        $chMax = 80;

        if($request->file('customFileLang6')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang6->extension();
            $request->file('customFileLang6')->storeAs('public', $nameA);

            if($limT <= $chMax){
                if($request->input('quant_semestres6') >= 1){
                    if($limT+$chLimEJ <= $chMax){
                        $lim = $chLimEJ;
                    }
                    else if($limT+$chLimEJ > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else {
                    $lim = 0;
                }

            }
            else {
                $lim = 0;
            }

            $data = Form6::create(array(
                'quant_semestres' => $request->input('quant_semestres6'),
                'dt_inicio' => $request->input('dt_inicio6'),
                'dt_fim' => $request->input('dt_fim6'),
                'status' => $request->input('status6'),
                'usuario_id' => $request->input('usuario_id6'),
                'customFileLang' => $nameA,
                'lim_carga_h' => $lim,
                'aprovacao' => 'Não',
            ));
        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form7(Form7Request $request){ //função revisada

        $idUser = Auth::id();
        $limTForm7 = Form7::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm23 = Form23::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimEstagioVoluntarioIFNMG = 50;
        $chLimEstagioVinculadoaArea = 50;
        $chMaxVoluntarioIFNMG = 100;
        $chMaxVinculadoaArea = 50;

        if($request->file('customFileLang7')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang7->extension();
            $request->file('customFileLang7')->storeAs('public', $nameA);

            if($request->input('tipo_inst7') == "Vinculado à Área do Curso"){
                if($limTForm7 <= $chMaxVinculadoaArea){
                    if($limTForm7+$chLimEstagioVinculadoaArea <= $chMaxVinculadoaArea){
                        $lim = $chLimEstagioVinculadoaArea;
                    }
                    else if($limTForm7+$chLimEstagioVinculadoaArea > $chMaxVinculadoaArea){
                        $lim = $chMaxVinculadoaArea - $limTForm7;
                    }
                }
                else {
                    $lim = 0;
                }

                $data = Form7::create(array(
                    'nome_inst' => $request->input('nome_inst7'),
                    'dt_inicio' => $request->input('dt_inicio7'),
                    'dt_fim' => $request->input('dt_fim7'),
                    'status' => $request->input('status7'),
                    'usuario_id' => $request->input('usuario_id7'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));
            }
            else if($request->input('tipo_inst7') == "Voluntário no IFNMG"){
                if($limTForm23 <= $chMaxVoluntarioIFNMG){
                    if($limTForm23+$chLimEstagioVoluntarioIFNMG <= $chMaxVoluntarioIFNMG){
                        $lim = $chLimEstagioVoluntarioIFNMG;
                    }
                    else if($limTForm23+$chLimEstagioVoluntarioIFNMG > $chMaxVoluntarioIFNMG){
                        $lim = $chMaxVoluntarioIFNMG - $limTForm23;
                    }
                }
                else {
                    $lim = 0;
                }

                $data = Form23::create(array(
                    'nome_inst' => $request->input('nome_inst7'),
                    'dt_inicio' => $request->input('dt_inicio7'),
                    'dt_fim' => $request->input('dt_fim7'),
                    'status' => $request->input('status7'),
                    'usuario_id' => $request->input('usuario_id7'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));
            }
            
        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form8(Form8Request $request){

        $idUser = Auth::id();
        $limT = Form8::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 10;
        $chMax = 50;

        if($request->file('customFileLang8')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang8->extension();
            $request->file('customFileLang8')->storeAs('public', $nameA);

            if($limT < $chMax){
                if($limT+$chLim <= $chMax){
                    $lim = $chLim;
                }
                else if($limT+$chLim > $chMax){
                    $lim = $chMax - $limT;
                }
            }

            $data = Form8::create(array(
                'carga_horaria' => $request->input('carga_horaria8'),
                'nome_atividade' => $request->input('nome_atividade8'),
                'dt_atividade' => $request->input('dt_atividade8'),
                'status' => $request->input('status8'),
                'usuario_id' => $request->input('usuario_id8'),
                'customFileLang' => $nameA,
                'lim_carga_h' => $lim,
                'aprovacao' => 'Não',
            ));
        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form9(Form9Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form9::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 15;
        $chMax = 60;

        if($request->file('customFileLang9')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang9->extension();
            $request->file('customFileLang9')->storeAs('public', $nameA);

            if($limT <= $chMax){
                if($limT+$chLim <= $chMax){
                    $lim = $chLim;
                }
                else if($limT+$chLim > $chMax){
                    $lim = $chMax - $limT;
                }
            }
            else {
                $lim = 0;
            }

            $data = Form9::create(array(
                'nome_proj' => $request->input('nome_proj9'),
                'dt_proj' => $request->input('dt_proj9'),
                'status' => $request->input('status9'),
                'usuario_id' => $request->input('usuario_id9'),
                'customFileLang' => $nameA,
                'lim_carga_h' => $lim,
                'aprovacao' => 'Não',
            ));
        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form10(Form10Request $request){ //função revisada

        $idUser = Auth::id();
        $limTForm10 = Form10::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm24 = Form24::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 40;
        $chLimC = 80;
        $chMax = 80;
        $chMaxC = 80;

        if($request->file('customFileLang10')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang10->extension();
            $request->file('customFileLang10')->storeAs('public', $nameA);

            if($request->input('tipo10') == 'Monitoria'){
                if($chLim >= $request->input('carga_horaria10')){
                    if($limTForm10+$request->input('carga_horaria10') <= $chMax){
                        $lim = $request->input('carga_horaria10');
                    }
                    else if($limTForm10+$request->input('carga_horaria10') > $chMax){
                        $lim = $chMax - $limTForm10;
                    }
                }
                else{
                    if($limTForm10+$chLim <= $chMax){
                        $lim = $chLim;
                    }
                    else if($limTForm10+$chLim > $chMax){
                        $lim = $chMax - $limTForm10;
                    }
                }

                $data = Form10::create(array(
                    'tipo' => $request->input('tipo10'),
                    'carga_horaria' => $request->input('carga_horaria10'),
                    'nome_disc' => $request->input('nome_disc10'),
                    'dt_inicio' => $request->input('dt_inicio10'),
                    'dt_fim' => $request->input('dt_fim10'),
                    'status' => $request->input('status10'),
                    'usuario_id' => $request->input('usuario_id10'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo10') == 'Disciplina Complementar'){
                
                if($limTForm24+$chLimC <= $chMaxC){
                    $lim = $chLimC;
                }
                else if($limTForm24+$chLimC > $chMaxC){
                    $lim = $chMaxC - $limTForm24;
                }

                $data = Form24::create(array(
                    'tipo' => $request->input('tipo10'),
                    'carga_horaria' => $request->input('carga_horaria10'),
                    'nome_disc' => $request->input('nome_disc10'),
                    'dt_inicio' => $request->input('dt_inicio10'),
                    'dt_fim' => $request->input('dt_fim10'),
                    'status' => $request->input('status10'),
                    'usuario_id' => $request->input('usuario_id10'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }

        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form11(Form11Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form11::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 10;
        $chMax = 50;

        if($request->file('customFileLang11')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang11->extension();
            $request->file('customFileLang11')->storeAs('public', $nameA);

            if($limT+$chLim <= $chMax){
                $lim = $chLim;
            }
            else if($limT+$chLim > $chMax){
                $lim = $chMax - $limT;
            }

            $data = Form11::create(array(
                'local' => $request->input('local11'),
                'dt_local' => $request->input('dt_local11'),
                'status' => $request->input('status11'),
                'usuario_id' => $request->input('usuario_id11'),
                'customFileLang' => $nameA,
                'lim_carga_h' => $lim,
                'aprovacao' => 'Não',
            ));
        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form12(Form12Request $request){ //função revisada

        $idUser = Auth::id();
        $limTForm12 = Form12::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm25 = Form25::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimInstru = 10;
        $chLimAluno = 20;
        $chMaxInstru = 50;
        $chMaxAluno = 100;

        if($request->file('customFileLang12')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang12->extension();
            $request->file('customFileLang12')->storeAs('public', $nameA);

            if($request->input('tipo12') == 'Instrutor'){
                if($chLimInstru >= $request->input('carga_horaria12')){
                    if($limTForm12+$request->input('carga_horaria12') <= $chMaxInstru){
                        $lim = $request->input('carga_horaria12');
                    }
                    else if($limT+$request->input('carga_horaria12') > $chMaxInstru){
                        $lim = $chMaxInstru - $limTForm12;
                    }
                }
                else{
                    if($limTForm12+$chLimInstru <= $chMaxInstru){
                        $lim = $chLimInstru;
                    }
                    else if($limTForm12+$chLimInstru > $chMaxInstru){
                        $lim = $chMaxInstru - $limTForm12;
                    }
                }

                $data = Form12::create(array(
                    'tipo' => $request->input('tipo12'),
                    'carga_horaria' => $request->input('carga_horaria12'),
                    'nome_curso' => $request->input('nome_curso12'),
                    'dt_inicio' => $request->input('dt_inicio12'),
                    'dt_fim' => $request->input('dt_fim12'),
                    'status' => $request->input('status12'),
                    'usuario_id' => $request->input('usuario_id12'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }
            else if($request->input('tipo12') == 'Aluno'){
                if($request->input('carga_horaria12') <= $chLimAluno){
                    if($limTForm25+$request->input('carga_horaria12') <= $chMaxAluno){
                        $lim = $request->input('carga_horaria12');
                    }
                    else if($limTForm25+$request->input('carga_horaria12') > $chMaxAluno){
                        $lim = $chMaxAluno - $limTForm25;
                    }
                }
                else{
                    if($limTForm25+$chLimAluno <= $chMaxAluno){
                        $lim = $chLimAluno;
                    }
                    else if($limTForm25+$chLimAluno > $chMaxAluno){
                        $lim = $chMaxAluno - $limTForm25;
                    }
                }

                $data = Form25::create(array(
                    'tipo' => $request->input('tipo12'),
                    'carga_horaria' => $request->input('carga_horaria12'),
                    'nome_curso' => $request->input('nome_curso12'),
                    'dt_inicio' => $request->input('dt_inicio12'),
                    'dt_fim' => $request->input('dt_fim12'),
                    'status' => $request->input('status12'),
                    'usuario_id' => $request->input('usuario_id12'),
                    'customFileLang' => $nameA,
                    'lim_carga_h' => $lim,
                    'aprovacao' => 'Não',
                ));

            }

            
        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form13(Form13Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form13::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 15;
        $chMax = 60;

        if($request->file('customFileLang13')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang13->extension();
            $request->file('customFileLang13')->storeAs('public', $nameA);

            if($limT+$chLim <= $chMax){
                $lim = $chLim;
            }
            else if($limT+$chLim > $chMax){
                $lim = $chMax - $limT;
            }

            $data = Form13::create(array(
                'nome_maratona' => $request->input('nome_maratona13'),
                'dt_maratona' => $request->input('dt_maratona13'),
                'status' => $request->input('status13'),
                'usuario_id' => $request->input('usuario_id13'),
                'customFileLang' => $nameA,
                'lim_carga_h' => $lim,
                'aprovacao' => 'Não',
            ));
        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);
    }

    public function form14(Form14Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form14::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 50;
        $chMax = 200;


        if($request->file('customFileLang14')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang14->extension();
            $request->file('customFileLang14')->storeAs('public', $nameA);

            if($limT <= $chMax){
                if($limT+$request->input('carga_horaria14') <= $chMax){
                    if($request->input('carga_horaria14') <= $chLim){
                        $lim = $request->input('carga_horaria14');
                    }
                    else if($request->input('carga_horaria14') > $chLim){
                        $lim = 50;
                    }
                }
                else if($limT+$request->input('carga_horaria14') > $chMax){
                    $lim = $chMax - $limT;
                }
            }


            $data = Form14::create(array(
                'tipo' => $request->input('tipo14'),
                'carga_horaria' => $request->input('carga_horaria14'),
                'nome_projeto' => $request->input('nome_projeto14'),
                'dt_inicio' => $request->input('dt_inicio14'),
                'dt_fim' => $request->input('dt_fim14'),
                'status' => $request->input('status14'),
                'usuario_id' => $request->input('usuario_id14'),
                'customFileLang' => $nameA,
                'lim_carga_h' => $lim,
                'aprovacao' => 'Não',
            ));

        }

        $sucess = "atividade-sucesso";
        return redirect()->action('Activity\ActivityController@pagForm', $sucess);

    }

    public function excluirAtividadeForm1($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){

            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;
             
            $dados = Form1::find($id);
            Form1::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado
            
            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm2($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){

            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form2::find($id);
            Form2::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm3($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){

            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;
            
            $dados = Form3::find($id);
            Form3::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm4($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form4::find($id);
            Form4::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm5($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form5::find($id);
            Form5::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm6($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form6::find($id);
            Form6::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm7($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form7::find($id);
            Form7::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm8($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form8::find($id);
            Form8::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm9($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form9::find($id);
            Form9::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm10($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form10::find($id);
            Form10::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm11($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form11::find($id);
            Form11::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm12($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form12::find($id);
            Form12::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm13($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form13::find($id);
            Form13::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm14($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form14::find($id);
            Form14::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));
            
            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm15($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form15::find($id);
            Form15::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm16($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form16::find($id);
            Form16::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm17($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form17::find($id);
            Form17::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm18($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form18::find($id);
            Form18::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm19($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form19::find($id);
            Form19::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm20($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form20::find($id);
            Form20::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm21($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form21::find($id);
            Form21::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm22($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form22::find($id);
            Form22::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm23($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form23::find($id);
            Form23::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));

            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm24($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form24::find($id);
            Form24::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));
            
            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function excluirAtividadeForm25($id){ //função exclui dados na tabela e o aquivo
        if(Gate::authorize('normal')){
            
            $idUser = Auth::id();
            $antHorasApro = User::where('id', $idUser)->first();
            $chAproAnterior = $antHorasApro->approved_hours;

            $dados = Form25::find($id);
            Form25::destroy($id);
            Storage::delete('public/'.$dados->customFileLang); //excluindo o arquivo copiado

            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior-$dados->horas_aprovadas, //subtraindo as horas aprovadas
            ));
            
            return redirect()->action('Activity\ActivityController@atividades');
        }
    }

    public function form1Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF1 = 200;
            $limTF1 = Form1::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF1 = Form1::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form1::find($id);
            return view('forms_edit.1_rep')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF1', $chMaxF1)
                    ->with('limTF1', $limTF1)
                    ->with('aproTF1', $aproTF1)
                    ->with('dados', $dados);
        }
    }

    public function form2Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF2 = 120;
            $limTF2 = Form2::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF2 = Form2::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form2::find($id);
            return view('forms_edit.2_paa')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF2', $chMaxF2)
                    ->with('limTF2', $limTF2)
                    ->with('aproTF2', $aproTF2)
                    ->with('dados', $dados);
        }
    }

    public function form3Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF3 = 120;
            $limTF3 = Form3::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF3 = Form3::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form3::find($id);
            return view('forms_edit.3_ecp')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF3', $chMaxF3)
                    ->with('limTF3', $limTF3)
                    ->with('aproTF3', $aproTF3)
                    ->with('dados', $dados);
        }
    }

    public function form4Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF4 = 30;
            $limTF4 = Form4::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF4 = Form4::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form4::find($id);
            return view('forms_edit.4_pre')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF4', $chMaxF4)
                    ->with('limTF4', $limTF4)
                    ->with('aproTF4', $aproTF4)
                    ->with('dados', $dados);
        }
    }

    public function form5Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF5 = 80;
            $limTF5 = Form5::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF5 = Form5::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form5::find($id);
            return view('forms_edit.5_re')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF5', $chMaxF5)
                    ->with('limTF5', $limTF5)
                    ->with('aproTF5', $aproTF5)
                    ->with('dados', $dados);
        }
    }

    public function form6Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF6 = 80;
            $limTF6 = Form6::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF6 = Form6::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form6::find($id);
            return view('forms_edit.6_ej')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF6', $chMaxF6)
                    ->with('limTF6', $limTF6)
                    ->with('aproTF6', $aproTF6)
                    ->with('dados', $dados);
        }
    }

    public function form7Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF7 = 50;
            $limTF7 = Form7::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF7 = Form7::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form7::find($id);
            return view('forms_edit.7_ee')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF7', $chMaxF7)
                    ->with('limTF7', $limTF7)
                    ->with('aproTF7', $aproTF7)
                    ->with('dados', $dados);
        }
    }

    public function form8Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF8 = 150;
            $limTF8 = Form8::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF8 = Form8::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form8::find($id);
            return view('forms_edit.8_vas')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF8', $chMaxF8)
                    ->with('limTF8', $limTF8)
                    ->with('aproTF8', $aproTF8)
                    ->with('dados', $dados);
        }
    }

    public function form9Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF9 = 60;
            $limTF9 = Form9::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF9 = Form9::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form9::find($id);
            return view('forms_edit.9_pc')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF9', $chMaxF9)
                    ->with('limTF9', $limTF9)
                    ->with('aproTF9', $aproTF9)
                    ->with('dados', $dados);
        }
    }

    public function form10Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF10 = 80;
            $limTF10 = Form10::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF10 = Form10::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form10::find($id);
            return view('forms_edit.10_dcm')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF10', $chMaxF10)
                    ->with('limTF10', $limTF10)
                    ->with('aproTF10', $aproTF10)
                    ->with('dados', $dados);
        }
    }

    public function form11Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF11 = 50;
            $limTF11 = Form11::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF11 = Form11::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form11::find($id);
            return view('forms_edit.11_vt')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF11', $chMaxF11)
                    ->with('limTF11', $limTF11)
                    ->with('aproTF11', $aproTF11)
                    ->with('dados', $dados);
        }
    }

    public function form12Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF12 = 50;
            $limTF12 = Form12::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF12 = Form12::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form12::find($id);
            return view('forms_edit.12_cm')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF12', $chMaxF12)
                    ->with('limTF12', $limTF12)
                    ->with('aproTF12', $aproTF12)
                    ->with('dados', $dados);
        }
    }

    public function form13Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF13 = 60;
            $limTF13 = Form13::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF13 = Form13::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form13::find($id);
            return view('forms_edit.13_mp')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF13', $chMaxF13)
                    ->with('limTF13', $limTF13)
                    ->with('aproTF13', $aproTF13)
                    ->with('dados', $dados);
        }
    }

    public function form14Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF14 = 200;
            $limTF14 = Form14::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF14 = Form14::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form14::find($id);
            return view('forms_edit.14_ext')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF14', $chMaxF14)
                    ->with('limTF14', $limTF14)
                    ->with('aproTF14', $aproTF14)
                    ->with('dados', $dados);
        }
    }

    public function form15Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF15 = 100;
            $limTF15 = Form15::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF15 = Form15::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form15::find($id);
            return view('forms_edit.15_paa')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF15', $chMaxF15)
                    ->with('limTF15', $limTF15)
                    ->with('aproTF15', $aproTF15)
                    ->with('dados', $dados);
        }
    }

    public function form16Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF16 = 100;
            $limTF16 = Form16::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF16 = Form16::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form16::find($id);
            return view('forms_edit.16_ecp')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF16', $chMaxF16)
                    ->with('limTF16', $limTF16)
                    ->with('aproTF16', $aproTF16)
                    ->with('dados', $dados);
        }
    }

    public function form17Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF17 = 100;
            $limTF17 = Form17::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF17 = Form17::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form17::find($id);
            return view('forms_edit.17_ecp')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF17', $chMaxF17)
                    ->with('limTF17', $limTF17)
                    ->with('aproTF17', $aproTF17)
                    ->with('dados', $dados);
        }
    }

    public function form18Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF18 = 100;
            $limTF18 = Form18::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF18 = Form18::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form18::find($id);
            return view('forms_edit.18_ecp')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF18', $chMaxF18)
                    ->with('limTF18', $limTF18)
                    ->with('aproTF18', $aproTF18)
                    ->with('dados', $dados);
        }
    }

    public function form19Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF19 = 50;
            $limTF19 = Form19::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF19 = Form19::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form19::find($id);
            return view('forms_edit.19_ecp')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF19', $chMaxF19)
                    ->with('limTF19', $limTF19)
                    ->with('aproTF19', $aproTF19)
                    ->with('dados', $dados);
        }
    }

    public function form20Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF20 = 100;
            $limTF20 = Form20::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF20 = Form20::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form20::find($id);
            return view('forms_edit.20_ecp')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF20', $chMaxF20)
                    ->with('limTF20', $limTF20)
                    ->with('aproTF20', $aproTF20)
                    ->with('dados', $dados);
        }
    }

    public function form21Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF21 = 60;
            $limTF21 = Form21::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF21 = Form21::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form21::find($id);
            return view('forms_edit.21_ecp')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF21', $chMaxF21)
                    ->with('limTF21', $limTF21)
                    ->with('aproTF21', $aproTF21)
                    ->with('dados', $dados);
        }
    }

    public function form22Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF22 = 60;
            $limTF22 = Form22::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF22 = Form22::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form22::find($id);
            return view('forms_edit.22_re')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF22', $chMaxF22)
                    ->with('limTF22', $limTF22)
                    ->with('aproTF22', $aproTF22)
                    ->with('dados', $dados);
        }
    }

    public function form23Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF23 = 100;
            $limTF23 = Form23::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF23 = Form23::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form23::find($id);
            return view('forms_edit.23_ee')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF23', $chMaxF23)
                    ->with('limTF23', $limTF23)
                    ->with('aproTF23', $aproTF23)
                    ->with('dados', $dados);
        }
    }

    public function form24Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF24 = 80;
            $limTF24 = Form24::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF24 = Form24::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form24::find($id);
            return view('forms_edit.24_dcm')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF24', $chMaxF24)
                    ->with('limTF24', $limTF24)
                    ->with('aproTF24', $aproTF24)
                    ->with('dados', $dados);
        }
    }

    public function form25Edicao($id, $idUser){ //função revisada - chamando formulário
        if(Gate::authorize('administrador')){
            $user = User::all();
            $idUser = $idUser;
            $nameUser = Auth::user()->name;
            $chMaxF25 = 100;
            $limTF25 = Form25::where('usuario_id', $idUser)->sum('lim_carga_h');
            $aproTF25 = Form25::where('usuario_id', $idUser)->sum('horas_aprovadas');
            $dados = Form25::find($id);
            return view('forms_edit.25_cm')->with('user', $user)
                    ->with('idUser', $idUser)
                    ->with('nameUser', $nameUser)
                    ->with('chMaxF25', $chMaxF25)
                    ->with('limTF25', $limTF25)
                    ->with('aproTF25', $aproTF25)
                    ->with('dados', $dados);
        }
    }

    public function editarForm1(Form1Request $request){ //função revisada - salvar edição

        $idUser =  $request->input('usuario_id1');
        $limT = (Form1::where('usuario_id', $idUser)->sum('lim_carga_h'))-$request->input('lim_carga_h');
        $chLim = 50;
        $chMax = 200;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status1') == "Deferido"){
            if($limT <= $chMax){
                if($limT+$request->input('carga_horaria1') <= $chMax){
                    if($request->input('carga_horaria1') <= $chLim){
                        $lim = $request->input('carga_horaria1');
                    }
                    else if($request->input('carga_horaria1') > $chLim){
                        $lim = 50;
                    }
                }
                else if($limT+$request->input('carga_horaria1') > $chMax){
                    $lim = $chMax - $limT;
                }
            }
            $aprovacao = 'Sim';
        }
        else{
            $lim = 0;
            $aprovacao = 'Não';
        }

        $chAproAnterior-=$request->input('horas_aprovadas1');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form1::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo1'),
            'carga_horaria' => $request->input('carga_horaria1'),
            'nome_projeto' => $request->input('nome_projeto1'),
            'dt_inicio' => $request->input('dt_inicio1'),
            'dt_fim' => $request->input('dt_fim1'),
            'status' => $request->input('status1'),
            'usuario_id' => $request->input('usuario_id1'),
            'customFileLang' => $request->input('customFileLang1'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
            'aprovacao' => $aprovacao,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm2(Form2Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id2');
        $limTForm2 = Form2::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm15 = Form15::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLimArtigo = 40;
        $chLimResumo = 20;
        $chMaxArtigo = 120;
        $chMaxResumo = 100;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status2') == "Deferido"){
            
            if($request->input('tipo2') == 'Artigo'){
                if($limTForm2 <= $chMaxArtigo){
                    if($limTForm2+$chLimArtigo <= $chMaxArtigo){
                        $limArtigo = $chLimArtigo;
                    }
                    else if($limTForm2+$chLimArtigo > $chMaxArtigo){
                        $limArtigo = $chMaxArtigo - $limTForm2;
                    }
                }
                $limResumo = 0;

                Form2::find($request->id)->update(array(
                    'id' => $request->input('id'),
                    'tipo' => $request->input('tipo2'),
                    'titulo' => $request->input('titulo2'),
                    'onde_pub' => $request->input('onde_pub2'),
                    'dt_pub' => $request->input('dt_pub2'),
                    'status' => $request->input('status2'),
                    'usuario_id' => $request->input('usuario_id2'),
                    'customFileLang' => $request->input('customFileLang2'),
                    'lim_carga_h' => $request->input('lim_carga_h'),
                    'horas_aprovadas' => $limArtigo,
                ));

                $chAproAnterior-=$request->input('horas_aprovadas2');
        
                User::find($idUser)->update(array(
                    'approved_hours' => $chAproAnterior+$limArtigo+$limResumo,
                ));

            }
            else if($request->input('tipo2') == 'Resumo'){
                if($limTForm15 <= $chMaxResumo){
                    if($limTForm15+$chLimResumo <= $chMaxResumo){
                        $limResumo = $chLimResumo;
                    }
                    else if($limTForm15+$chLimResumo > $chMaxResumo){
                        $limResumo = $chMaxResumo - $limTForm15;
                    }
                }
                $limArtigo = 0;

                Form15::find($request->id)->update(array(
                    'id' => $request->input('id'),
                    'tipo' => $request->input('tipo2'),
                    'titulo' => $request->input('titulo2'),
                    'onde_pub' => $request->input('onde_pub2'),
                    'dt_pub' => $request->input('dt_pub2'),
                    'status' => $request->input('status2'),
                    'usuario_id' => $request->input('usuario_id2'),
                    'customFileLang' => $request->input('customFileLang2'),
                    'lim_carga_h' => $request->input('lim_carga_h'),
                    'horas_aprovadas' => $limResumo,
                ));

                $chAproAnterior-=$request->input('horas_aprovadas2');
        
                User::find($idUser)->update(array(
                    'approved_hours' => $chAproAnterior+$limArtigo+$limResumo,
                ));
                
            }

            

        }
        else{
            $limArtigo = 0;
            $limResumo = 0;

            if($request->input('tipo2') == 'Artigo'){
                Form2::find($request->id)->update(array(
                    'id' => $request->input('id'),
                    'tipo' => $request->input('tipo2'),
                    'titulo' => $request->input('titulo2'),
                    'onde_pub' => $request->input('onde_pub2'),
                    'dt_pub' => $request->input('dt_pub2'),
                    'status' => $request->input('status2'),
                    'usuario_id' => $request->input('usuario_id2'),
                    'customFileLang' => $request->input('customFileLang2'),
                    'lim_carga_h' => $request->input('lim_carga_h'),
                    'horas_aprovadas' => $limArtigo,
                ));
            }
            else if($request->input('tipo2') == 'Resumo'){
                Form15::find($request->id)->update(array(
                    'id' => $request->input('id'),
                    'tipo' => $request->input('tipo2'),
                    'titulo' => $request->input('titulo2'),
                    'onde_pub' => $request->input('onde_pub2'),
                    'dt_pub' => $request->input('dt_pub2'),
                    'status' => $request->input('status2'),
                    'usuario_id' => $request->input('usuario_id2'),
                    'customFileLang' => $request->input('customFileLang2'),
                    'lim_carga_h' => $request->input('lim_carga_h'),
                    'horas_aprovadas' => $limResumo,
                ));
            }

            $chAproAnterior-=$request->input('horas_aprovadas2');
        
            User::find($idUser)->update(array(
                'approved_hours' => $chAproAnterior+$limArtigo+$limResumo,
            ));

        }

        

        return redirect()->route('lista_atividades', $idUser);

    }

    public function editarForm3(Form3Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id3');
        $limTForm3 = Form3::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm16 = Form16::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm17 = Form17::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm18 = Form18::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm19 = Form19::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm20 = Form20::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm21 = Form21::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        
        $chLimComCentral = 40;
        $chLimComSecundaria = 20;
        $chMaxComCentral = 120;
        $chMaxComSecundaria = 100;
        
        $chLimPartiEventoNacReg = 20;
        $chLimPartiEventoLocal = 10;
        $chLimPartiPalestra = 5;
        $chMaxPartiEventoNacReg = 100;
        $chMaxPartiEventoLocal = 100;
        $chMaxPartiPalestra = 50;

        $chLimApreseTrabalho = 10;
        $chMaxApreseTrabalho = 100;

        $chLimPalestrante = 15;
        $chMaxPalestrante = 60;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status3') == "Deferido"){
            
            if($request->input('tipo3') == 'Comissão Central de Organização'){
                if($limTForm3 <= $chMaxComCentral){
                    if($request->input('carga_horaria3') <= $chLimComCentral){
                        if($limTForm3+$request->input('carga_horaria3') <= $chMaxComCentral){
                            $limOrganC = $request->input('carga_horaria3');
                        }
                        else if($limTForm3+$request->input('carga_horaria3') > $chMaxComCentral){
                            $limOrganC = $chMaxComCentral - $limTForm3;
                        }
                    }
                    else {
                        if($limTForm3+$chLimComCentral <= $chMaxComCentral){
                            $limOrganC = $chLimComCentral;
                        }
                        else if($limTForm3+$chLimComCentral > $chMaxComCentral){
                            $limOrganC = $chMaxComCentral - $limTForm3;
                        }
                    }
                }
                $limOrganS = 0;
                $limPartEveNR = 0;
                $limPartEveL = 0;
                $limPartPale = 0;
                $limApreEveC = 0;
                $limPaleEveC = 0;

            }
            else if($request->input('tipo3') == 'Comissão Secundária de Organização'){ //form16
                if($limTForm16 <= $chMaxComSecundaria){
                    if($request->input('carga_horaria3') <= $chLimComSecundaria){
                        if($limTForm16+$request->input('carga_horaria3') <= $chMaxComSecundaria){
                            $limOrganS = $request->input('carga_horaria3');
                        }
                        else if($limTForm16+$request->input('carga_horaria3') > $chMaxComSecundaria){
                            $limOrganS = $chMaxComSecundaria - $limTForm16;
                        }
                    }
                    else {
                        if($limTForm16+$chLimComSecundaria <= $chMaxComSecundaria){
                            $limOrganS = $chLimComSecundaria;
                        }
                        else if($limTForm16+$chLimComSecundaria > $chMaxComSecundaria){
                            $limOrganS = $chMaxComSecundaria - $limTForm16;
                        }
                    }
                }
                $limOrganC = 0;
                $limPartEveNR = 0;
                $limPartEveL = 0;
                $limPartPale = 0;
                $limApreEveC = 0;
                $limPaleEveC = 0;
            }
            else if($request->input('tipo3') == 'Participação em Evento Científico Nacional ou Regional'){ //form17
                if($limTForm17 <= $chMaxPartiEventoNacReg){
                    if($request->input('carga_horaria3') <= $chLimPartiEventoNacReg){
                        if($limTForm17+$request->input('carga_horaria3') <= $chMaxPartiEventoNacReg){
                            $limPartEveNR = $request->input('carga_horaria3');
                        }
                        else if($limTForm17+$request->input('carga_horaria3') > $chMaxPartiEventoNacReg){
                            $limPartEveNR = $chMaxPartiEventoNacReg - $limTForm17;
                        }
                    }
                    else {
                        if($limTForm17+$chLimPartiEventoNacReg <= $chMaxPartiEventoNacReg){
                            $limPartEveNR = $chLimPartiEventoNacReg;
                        }
                        else if($limTForm17+$chLimPartiEventoNacReg > $chMaxPartiEventoNacReg){
                            $limPartEveNR = $chMaxPartiEventoNacReg - $limTForm17;
                        }
                    }
                }
                $limOrganC = 0;
                $limOrganS = 0;
                $limPartEveL = 0;
                $limPartPale = 0;
                $limApreEveC = 0;
                $limPaleEveC = 0;
            }
            else if($request->input('tipo3') == 'Participação em Evento Científico Local'){ //form18
                if($limTForm18 <= $chMaxPartiEventoLocal){
                    if($request->input('carga_horaria3') <= $chLimPartiEventoLocal){
                        if($limTForm18+$request->input('carga_horaria3') <= $chMaxPartiEventoLocal){
                            $limPartEveL = $request->input('carga_horaria3');
                        }
                        else if($limTForm18+$request->input('carga_horaria3') > $chMaxPartiEventoLocal){
                            $limPartEveL = $chMaxPartiEventoLocal - $limTForm18;
                        }
                    }
                    else {
                        if($limTForm18+$chLimPartiEventoLocal <= $chMaxPartiEventoLocal){
                            $limPartEveL = $chLimPartiEventoLocal;
                        }
                        else if($limTForm18+$chLimPartiEventoLocal > $chMaxPartiEventoLocal){
                            $limPartEveL = $chMaxPartiEventoLocal - $limTForm18;
                        }
                    }
                }
                $limOrganC = 0;
                $limOrganS = 0;
                $limPartEveNR = 0;
                $limPartPale = 0;
                $limApreEveC = 0;
                $limPaleEveC = 0;
            }
            else if($request->input('tipo3') == 'Participação em Palestra e Conferências'){ //form19
                if($limTForm19 <= $chMaxPartiPalestra){
                    if($request->input('carga_horaria3') <= $chLimPartiPalestra){
                        if($limTForm19+$request->input('carga_horaria3') <= $chMaxPartiPalestra){
                            $limPartPale = $request->input('carga_horaria3');
                        }
                        else if($limTForm19+$request->input('carga_horaria3') > $chMaxPartiPalestra){
                            $limPartPale = $chMaxPartiPalestra - $limTForm19;
                        }
                    }
                    else {
                        if($limTForm19+$chLimPartiPalestra <= $chMaxPartiPalestra){
                            $limPartPale = $chLimPartiPalestra;
                        }
                        else if($limTForm19+$chLimPartiPalestra > $chMaxPartiPalestra){
                            $limPartPale = $chMaxPartiPalestra - $limTForm19;
                        }
                    }
                }
                $limOrganC = 0;
                $limOrganS = 0;
                $limPartEveNR = 0;
                $limPartEveL = 0;
                $limApreEveC = 0;
                $limPaleEveC = 0;
            }
            else if($request->input('tipo3') == 'Apresentação em Evento Científico'){ //form20
                if($limTForm20 <= $chMaxApreseTrabalho){
                    if($request->input('carga_horaria3') <= $chLimApreseTrabalho){
                        if($limTForm20+$request->input('carga_horaria3') <= $chMaxApreseTrabalho){
                            $limApreEveC = $request->input('carga_horaria3');
                        }
                        else if($limTForm20+$request->input('carga_horaria3') > $chMaxApreseTrabalho){
                            $limApreEveC = $chMaxApreseTrabalho - $limTForm20;
                        }
                    }
                    else {
                        if($limTForm20+$chLimApreseTrabalho <= $chMaxApreseTrabalho){
                            $limApreEveC = $chLimApreseTrabalho;
                        }
                        else if($limTForm20+$chLimApreseTrabalho > $chMaxApreseTrabalho){
                            $limApreEveC = $chMaxApreseTrabalho - $limTForm20;
                        }
                    }
                }
                $limOrganC = 0;
                $limOrganS = 0;
                $limPartEveNR = 0;
                $limPartEveL = 0;
                $limPartPale = 0;
                $limPaleEveC = 0;
            }
            else if($request->input('tipo3') == 'Palestrante em Evento Científico'){ //form21
                if($limTForm21 <= $chMaxPalestrante){
                    if($request->input('carga_horaria3') <= $chLimPalestrante){
                        if($limTForm21+$request->input('carga_horaria3') <= $chMaxPalestrante){
                            $limPaleEveC = $request->input('carga_horaria3');
                        }
                        else if($limTForm21+$request->input('carga_horaria3') > $chMaxPalestrante){
                            $limPaleEveC = $chMaxPalestrante - $limTForm21;
                        }
                    }
                    else {
                        if($limTForm21+$chLimPalestrante <= $chMaxPalestrante){
                            $limPaleEveC = $chLimPalestrante;
                        }
                        else if($limTForm21+$chLimPalestrante > $chMaxPalestrante){
                            $limPaleEveC = $chMaxPalestrante - $limTForm21;
                        }
                    }
                }
                $limOrganC = 0;
                $limOrganS = 0;
                $limPartEveNR = 0;
                $limPartEveL = 0;
                $limPartPale = 0;
                $limApreEveC = 0;
            }

        }
        else {
            $limOrganC = 0;
            $limOrganS = 0;
            $limPartEveNR = 0;
            $limPartEveL = 0;
            $limPartPale = 0;
            $limApreEveC = 0;
            $limPaleEveC = 0;
        }
        
        $chAproAnterior-=$request->input('horas_aprovadas3');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$limOrganC+$limOrganS+$limPartEveNR+$limPartEveL+$limPartPale+$limApreEveC+$limPaleEveC,
        ));

        Form3::find($request->id)->update(array(
            'tipo' => $request->input('tipo3'),
            'carga_horaria' => $request->input('carga_horaria3'),
            'nome_evento' => $request->input('nome_evento3'),
            'local' => $request->input('local3'),
            'dt_inicio' => $request->input('dt_inicio3'),
            'dt_fim' => $request->input('dt_fim3'),
            'status' => $request->input('status3'),
            'usuario_id' => $request->input('usuario_id3'),
            'customFileLang' => $request->input('customFileLang3'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limOrganC,
        ));

        Form16::find($request->id)->update(array(
            'tipo' => $request->input('tipo3'),
            'carga_horaria' => $request->input('carga_horaria3'),
            'nome_evento' => $request->input('nome_evento3'),
            'local' => $request->input('local3'),
            'dt_inicio' => $request->input('dt_inicio3'),
            'dt_fim' => $request->input('dt_fim3'),
            'status' => $request->input('status3'),
            'usuario_id' => $request->input('usuario_id3'),
            'customFileLang' => $request->input('customFileLang3'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limOrganS,
        ));

        Form17::find($request->id)->update(array(
            'tipo' => $request->input('tipo3'),
            'carga_horaria' => $request->input('carga_horaria3'),
            'nome_evento' => $request->input('nome_evento3'),
            'local' => $request->input('local3'),
            'dt_inicio' => $request->input('dt_inicio3'),
            'dt_fim' => $request->input('dt_fim3'),
            'status' => $request->input('status3'),
            'usuario_id' => $request->input('usuario_id3'),
            'customFileLang' => $request->input('customFileLang3'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limPartEveNR,
        ));

        Form18::find($request->id)->update(array(
            'tipo' => $request->input('tipo3'),
            'carga_horaria' => $request->input('carga_horaria3'),
            'nome_evento' => $request->input('nome_evento3'),
            'local' => $request->input('local3'),
            'dt_inicio' => $request->input('dt_inicio3'),
            'dt_fim' => $request->input('dt_fim3'),
            'status' => $request->input('status3'),
            'usuario_id' => $request->input('usuario_id3'),
            'customFileLang' => $request->input('customFileLang3'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limPartEveL,
        ));

        Form19::find($request->id)->update(array(
            'tipo' => $request->input('tipo3'),
            'carga_horaria' => $request->input('carga_horaria3'),
            'nome_evento' => $request->input('nome_evento3'),
            'local' => $request->input('local3'),
            'dt_inicio' => $request->input('dt_inicio3'),
            'dt_fim' => $request->input('dt_fim3'),
            'status' => $request->input('status3'),
            'usuario_id' => $request->input('usuario_id3'),
            'customFileLang' => $request->input('customFileLang3'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limPartPale,
        ));

        Form20::find($request->id)->update(array(
            'tipo' => $request->input('tipo3'),
            'carga_horaria' => $request->input('carga_horaria3'),
            'nome_evento' => $request->input('nome_evento3'),
            'local' => $request->input('local3'),
            'dt_inicio' => $request->input('dt_inicio3'),
            'dt_fim' => $request->input('dt_fim3'),
            'status' => $request->input('status3'),
            'usuario_id' => $request->input('usuario_id3'),
            'customFileLang' => $request->input('customFileLang3'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limApreEveC,
        ));

        Form21::find($request->id)->update(array(
            'tipo' => $request->input('tipo3'),
            'carga_horaria' => $request->input('carga_horaria3'),
            'nome_evento' => $request->input('nome_evento3'),
            'local' => $request->input('local3'),
            'dt_inicio' => $request->input('dt_inicio3'),
            'dt_fim' => $request->input('dt_fim3'),
            'status' => $request->input('status3'),
            'usuario_id' => $request->input('usuario_id3'),
            'customFileLang' => $request->input('customFileLang3'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limPaleEveC,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm4(Form4Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id4');
        $limT = Form4::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chMax = 30;
        $limPremiacao = 10;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status4') == "Deferido"){
            if($limT <= $chMax){
                if($limT+$limPremiacao <= $chMax){
                    $lim = $limPremiacao;
                }
                else if($limT+$limPremiacao > $chMax){
                    $lim = $chMax - $limT;
                }
            }
        }
        else {
            $lim = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas4');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));
        
        $data = Form4::find($request->id)->update(array(
            'id' => $request->input('id'),
            'carga_horaria' => $request->input('carga_horaria4'),
            'nome_evento' => $request->input('nome_evento4'),
            'dt_evento' => $request->input('dt_evento4'),
            'status' => $request->input('status4'),
            'usuario_id' => $request->input('usuario_id4'),
            'customFileLang' => $request->input('customFileLang4'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm5(Form5Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id5');
        $limTForm5 = Form5::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm22 = Form22::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        
        $chLimDA = 40;
        $chLimColegiado = 15;
        $chMaxDA = 80;
        $chMaxColegiado = 60;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status5') == "Deferido"){

            if($request->input('tipo5') == 'Diretório Acadêmico'){
                if($limTForm5 <= $chMaxDA){
                    if($request->input('quant_semestres5') >= 2){
                        if($limTForm5+$chLimDA <= $chMaxDA){
                            $limDA = $chLimDA;
                        }
                        else if($limTForm5+$chLimDA > $chMaxDA){
                            $limDA = $chMaxDA - $limTForm5;
                        }
                    }
                    else {
                        $limDA = 0;
                    }
                }
                else{
                    $limDA = 0;
                }
                $limColegiado = 0;
            }
            else if($request->input('tipo5') == 'Conselho ou Colegiado'){
                if($request->input('quant_semestres5')*$chLimColegiado <= $chMaxColegiado-$limTForm22){
                    $limColegiado = $request->input('quant_semestres5')*$chLimColegiado;
                }
                else if($request->input('quant_semestres5')*$chLimColegiado > $chMaxColegiado-$limTForm22){
                    $limColegiado = $chMaxColegiado - $limTForm22;
                }
                $limDA = 0;
            }

        }
        else {
            $limDA = 0;
            $limColegiado = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas5');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$limDA+$limColegiado,
        ));

        Form5::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo5'),
            'quant_semestres' => $request->input('quant_semestres5'),
            'nome_c' => $request->input('nome_c5'),
            'dt_inicio' => $request->input('dt_inicio5'),
            'dt_fim' => $request->input('dt_fim5'),
            'status' => $request->input('status5'),
            'usuario_id' => $request->input('usuario_id5'),
            'customFileLang' => $request->input('customFileLang5'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limDA,
        ));

        Form22::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo5'),
            'quant_semestres' => $request->input('quant_semestres5'),
            'nome_c' => $request->input('nome_c5'),
            'dt_inicio' => $request->input('dt_inicio5'),
            'dt_fim' => $request->input('dt_fim5'),
            'status' => $request->input('status5'),
            'usuario_id' => $request->input('usuario_id5'),
            'customFileLang' => $request->input('customFileLang5'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limColegiado,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm6(Form6Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id6');
        $limT = Form6::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLimEJ = 40;
        $chMax = 80;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status6') == "Deferido"){
            if($limT <= $chMax){
                if($request->input('quant_semestres6') >= 1){
                    if($limT+$chLimEJ <= $chMax){
                        $lim = $chLimEJ;
                    }
                    else if($limT+$chLimEJ > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else {
                    $lim = 0;
                }
            }
            else {
                $lim = 0;
            }
        }
        else{
            $lim = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas6');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));
        

        $data = Form6::find($request->id)->update(array(
            'id' => $request->input('id'),
            'quant_semestres' => $request->input('quant_semestres6'),
            'dt_inicio' => $request->input('dt_inicio6'),
            'dt_fim' => $request->input('dt_fim6'),
            'status' => $request->input('status6'),
            'usuario_id' => $request->input('usuario_id6'),
            'customFileLang' => $request->input('customFileLang6'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm7(Form7Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id7');
        $limTForm7 = Form7::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm23 = Form23::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLimEstagioVoluntarioIFNMG = 50;
        $chLimEstagioVinculadoaArea = 50;
        $chMaxVoluntarioIFNMG = 100;
        $chMaxVinculadoaArea = 50;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status7') == "Deferido"){

            if($request->input('tipo_inst7') == "Vinculado à Área do Curso"){
                if($limTForm7 <= $chMaxVinculadoaArea){
                    if($limTForm7+$chLimEstagioVinculadoaArea <= $chMaxVinculadoaArea){
                        $limVinculadoaArea = $chLimEstagioVinculadoaArea;
                    }
                    else if($limTForm7+$chLimEstagioVinculadoaArea > $chMaxVinculadoaArea){
                        $limVinculadoaArea = $chMaxVinculadoaArea - $limTForm7;
                    }
                }
                else {
                    $limVinculadoaArea = 0;
                }
                $limVoluntarioIFNMG = 0;

            }
            else if($request->input('tipo_inst7') == "Voluntário no IFNMG"){
                if($limTForm23 <= $chMaxVoluntarioIFNMG){
                    if($limTForm23+$chLimEstagioVoluntarioIFNMG <= $chMaxVoluntarioIFNMG){
                        $limVoluntarioIFNMG = $chLimEstagioVoluntarioIFNMG;
                    }
                    else if($limTForm23+$chLimEstagioVoluntarioIFNMG > $chMaxVoluntarioIFNMG){
                        $limVoluntarioIFNMG = $chMaxVoluntarioIFNMG - $limTForm23;
                    }
                }
                else {
                    $limVoluntarioIFNMG = 0;
                }
                $limVinculadoaArea = 0;
            }

        }
        else{
            $limVinculadoaArea = 0;
            $limVoluntarioIFNMG = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas7');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$limVinculadoaArea+$limVoluntarioIFNMG,
        ));

        Form7::find($request->id)->update(array(
            'id' => $request->input('id'),
            'nome_inst' => $request->input('nome_inst7'),
            'dt_inicio' => $request->input('dt_inicio7'),
            'dt_fim' => $request->input('dt_fim7'),
            'status' => $request->input('status7'),
            'usuario_id' => $request->input('usuario_id7'),
            'customFileLang' => $request->input('customFileLang7'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limVinculadoaArea,
        ));

        Form23::find($request->id)->update(array(
            'id' => $request->input('id'),
            'nome_inst' => $request->input('nome_inst7'),
            'dt_inicio' => $request->input('dt_inicio7'),
            'dt_fim' => $request->input('dt_fim7'),
            'status' => $request->input('status7'),
            'usuario_id' => $request->input('usuario_id7'),
            'customFileLang' => $request->input('customFileLang7'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limVoluntarioIFNMG,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm8(Form8Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id8');
        $limT = Form8::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLim = 10;
        $chMax = 150;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status8') == "Deferido"){
            if($limT < $chMax){
                if($limT+$chLim <= $chMax){
                    $lim = $chLim;
                }
                else if($limT+$chLim > $chMax){
                    $lim = $chMax - $limT;
                }
            }
        }
        else{
            $lim = 0;
        }
        
        $chAproAnterior-=$request->input('horas_aprovadas8');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form8::find($request->id)->update(array(
            'id' => $request->input('id'),
            'carga_horaria' => $request->input('carga_horaria8'),
            'nome_atividade' => $request->input('nome_atividade8'),
            'dt_atividade' => $request->input('dt_atividade8'),
            'status' => $request->input('status8'),
            'usuario_id' => $request->input('usuario_id8'),
            'customFileLang' => $request->input('customFileLang8'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm9(Form9Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id9');
        $limT = Form9::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLim = 15;
        $chMax = 60;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status9') == "Deferido"){
            if($limT <= $chMax){
                if($limT+$chLim <= $chMax){
                    $lim = $chLim;
                }
                else if($limT+$chLim > $chMax){
                    $lim = $chMax - $limT;
                }
            }
            else {
                $lim = 0;
            }
        }
        else{
            $lim = 0;
        }
        
        $chAproAnterior-=$request->input('horas_aprovadas9');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form9::find($request->id)->update(array(
            'id' => $request->input('id'),
            'nome_proj' => $request->input('nome_proj9'),
            'dt_proj' => $request->input('dt_proj9'),
            'status' => $request->input('status9'),
            'usuario_id' => $request->input('usuario_id9'),
            'customFileLang' => $request->input('customFileLang9'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm10(Form10Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id10');
        $limTForm10 = Form10::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTForm24 = Form24::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 40;
        $chLimC = 80;
        $chMax = 80;
        $chMaxC = 80;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status10') == "Deferido"){
            
            if($request->input('tipo10') == 'Monitoria'){
                if($chLim >= $request->input('carga_horaria10')){
                    if($limTForm10+$request->input('carga_horaria10') <= $chMax){
                        $limMonitoria = $request->input('carga_horaria10');
                    }
                    else if($limTForm10+$request->input('carga_horaria10') > $chMax){
                        $limMonitoria = $chMax - $limTForm10;
                    }
                }
                else{
                    if($limTForm10+$chLim <= $chMax){
                        $limMonitoria = $chLim;
                    }
                    else if($limTForm10+$chLim > $chMax){
                        $limMonitoria = $chMax - $limTForm10;
                    }
                }
                $limDC = 0;
            }
            else if($request->input('tipo10') == 'Disciplina Complementar'){   
                if($limTForm24+$chLimC <= $chMaxC){
                    $limDC = $chLimC;
                }
                else if($limTForm24+$chLimC > $chMaxC){
                    $limDC = $chMaxC - $limTForm24;
                }
                $limMonitoria = 0;
            }
        }
        else{
            $limMonitoria = 0;
            $limDC = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas10');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$limMonitoria+$limDC,
        ));

        Form10::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo10'),
            'carga_horaria' => $request->input('carga_horaria10'),
            'nome_disc' => $request->input('nome_disc10'),
            'dt_inicio' => $request->input('dt_inicio10'),
            'dt_fim' => $request->input('dt_fim10'),
            'status' => $request->input('status10'),
            'usuario_id' => $request->input('usuario_id10'),
            'customFileLang' => $request->input('customFileLang10'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limMonitoria,
        ));

        Form24::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo10'),
            'carga_horaria' => $request->input('carga_horaria10'),
            'nome_disc' => $request->input('nome_disc10'),
            'dt_inicio' => $request->input('dt_inicio10'),
            'dt_fim' => $request->input('dt_fim10'),
            'status' => $request->input('status10'),
            'usuario_id' => $request->input('usuario_id10'),
            'customFileLang' => $request->input('customFileLang10'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limDC,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm11(Form11Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id11');
        $limT = Form11::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLim = 10;
        $chMax = 50;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status11') == "Deferido"){
            if($limT+$chLim <= $chMax){
                $lim = $chLim;
            }
            else if($limT+$chLim > $chMax){
                $lim = $chMax - $limT;
            }
        }
        else{
            $lim = 0;
        }
        
        $chAproAnterior-=$request->input('horas_aprovadas11');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form11::find($request->id)->update(array(
            'id' => $request->input('id'),
            'local' => $request->input('local11'),
            'dt_local' => $request->input('dt_local11'),
            'status' => $request->input('status11'),
            'usuario_id' => $request->input('usuario_id11'),
            'customFileLang' => $request->input('customFileLang11'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm12(Form12Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id12');
        $limTForm12 = Form12::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $limTForm25 = Form25::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLimInstru = 10;
        $chLimAluno = 20;
        $chMaxInstru = 50;
        $chMaxAluno = 100;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status12') == "Deferido"){

            if($request->input('tipo12') == 'Instrutor'){
                if($chLimInstru >= $request->input('carga_horaria12')){
                    if($limTForm12+$request->input('carga_horaria12') <= $chMaxInstru){
                        $limInstrutor = $request->input('carga_horaria12');
                    }
                    else if($limT+$request->input('carga_horaria12') > $chMaxInstru){
                        $limInstrutor = $chMaxInstru - $limTForm12;
                    }
                }
                else{
                    if($limTForm12+$chLimInstru <= $chMaxInstru){
                        $limInstrutor = $chLimInstru;
                    }
                    else if($limTForm12+$chLimInstru > $chMaxInstru){
                        $limInstrutor = $chMaxInstru - $limTForm12;
                    }
                }
                $limAluno = 0;
            }
            else if($request->input('tipo12') == 'Aluno'){
                if($request->input('carga_horaria12') <= $chLimAluno){
                    if($limTForm25+$request->input('carga_horaria12') <= $chMaxAluno){
                        $limAluno = $request->input('carga_horaria12');
                    }
                    else if($limTForm25+$request->input('carga_horaria12') > $chMaxAluno){
                        $limAluno = $chMaxAluno - $limTForm25;
                    }
                }
                else{
                    if($limTForm25+$chLimAluno <= $chMaxAluno){
                        $limAluno = $chLimAluno;
                    }
                    else if($limTForm25+$chLimAluno > $chMaxAluno){
                        $limAluno = $chMaxAluno - $limTForm25;
                    }
                }
                $limInstrutor = 0;
            }

        }
        else{
            $limInstrutor = 0;
            $limAluno = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas12');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$limInstrutor+$limAluno,
        ));

        Form12::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo12'),
            'carga_horaria' => $request->input('carga_horaria12'),
            'nome_curso' => $request->input('nome_curso12'),
            'dt_inicio' => $request->input('dt_inicio12'),
            'dt_fim' => $request->input('dt_fim12'),
            'status' => $request->input('status12'),
            'usuario_id' => $request->input('usuario_id12'),
            'customFileLang' => $request->input('customFileLang12'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limInstrutor,
        ));

        Form25::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo12'),
            'carga_horaria' => $request->input('carga_horaria12'),
            'nome_curso' => $request->input('nome_curso12'),
            'dt_inicio' => $request->input('dt_inicio12'),
            'dt_fim' => $request->input('dt_fim12'),
            'status' => $request->input('status12'),
            'usuario_id' => $request->input('usuario_id12'),
            'customFileLang' => $request->input('customFileLang12'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $limAluno,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm13(Form13Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id13');
        $limT = Form13::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLim = 15;
        $chMax = 60;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status13') == "Deferido"){
            if($limT+$chLim <= $chMax){
                $lim = $chLim;
            }
            else if($limT+$chLim > $chMax){
                $lim = $chMax - $limT;
            }
        }
        else {
            $lim = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas13');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form13::find($request->id)->update(array(
            'id' => $request->input('id'),
            'nome_maratona' => $request->input('nome_maratona13'),
            'dt_maratona' => $request->input('dt_maratona13'),
            'status' => $request->input('status13'),
            'usuario_id' => $request->input('usuario_id13'),
            'customFileLang' => $request->input('customFileLang13'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    public function editarForm14(Form14Request $request){ //função revisada - salvar edição

        $idUser =  $request->input('usuario_id14');
        $limT = (Form14::where('usuario_id', $idUser)->sum('lim_carga_h'))-$request->input('lim_carga_h');
        $chLim = 50;
        $chMax = 200;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status14') == "Deferido"){
            if($limT <= $chMax){
                if($limT+$request->input('carga_horaria14') <= $chMax){
                    if($request->input('carga_horaria14') <= $chLim){
                        $lim = $request->input('carga_horaria14');
                    }
                    else if($request->input('carga_horaria14') > $chLim){
                        $lim = 50;
                    }
                }
                else if($limT+$request->input('carga_horaria14') > $chMax){
                    $lim = $chMax - $limT;
                }
            }
        }
        else {
            $lim = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas14');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));
        

        $data = Form14::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo14'),
            'carga_horaria' => $request->input('carga_horaria14'),
            'nome_projeto' => $request->input('nome_projeto14'),
            'dt_inicio' => $request->input('dt_inicio14'),
            'dt_fim' => $request->input('dt_fim14'),
            'status' => $request->input('status14'),
            'usuario_id' => $request->input('usuario_id14'),
            'customFileLang' => $request->input('customFileLang14'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
        ));

        return redirect()->route('lista_atividades', $idUser);
    }

    //função inativa
    /*public function exibirPDF($nameFile){
        $pathToFile = 'file:///C:/Users/muril/Documents/TCC/sistema_accs2/storage/app/arquivosPdf/'.$nameFile;
        return response()->file($pathToFile);
    }*/


}
