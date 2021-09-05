<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
use App\Models\Activity;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\AuthorizationException;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() //para todo o controlador necessitar de autenticação
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $listUsers = User::all();
        $nameUser = Auth::user()->name;
        $idUser = Auth::id();
        $chNecessaria = 140;
        $limTF1 = Form1::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF2 = Form2::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF3 = Form3::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF4 = Form4::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF5 = Form5::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF6 = Form6::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF7 = Form7::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF8 = Form8::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF9 = Form9::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF10 = Form10::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF11 = Form11::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF12 = Form12::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF13 = Form13::where('usuario_id', $idUser)->sum('lim_carga_h');
        $limTF14 = Form14::where('usuario_id', $idUser)->sum('lim_carga_h');
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
        $chTotal = $limTF1+$limTF2+$limTF3+$limTF4+$limTF5+$limTF6+$limTF7+$limTF8+$limTF9+$limTF10+$limTF11+$limTF12+$limTF13+$limTF14+$limTF15+$limTF16+$limTF17+$limTF18+$limTF19+$limTF20+$limTF21+$limTF22+$limTF23+$limTF24+$limTF25;

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
        $aproTF15 = Form15::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF16 = Form16::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF17 = Form17::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF18 = Form18::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF19 = Form19::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF20 = Form20::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF21 = Form21::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF22 = Form22::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF23 = Form23::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF24 = Form24::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $aproTF25 = Form25::where('usuario_id', $idUser)->sum('horas_aprovadas');
        $chAproT = $aproTF1+$aproTF2+$aproTF3+$aproTF4+$aproTF5+$aproTF6+$aproTF7+$aproTF8+$aproTF9+$aproTF10+$aproTF11+$aproTF12+$aproTF13+$aproTF14+$aproTF15+$aproTF16+$aproTF17+$aproTF18+$aproTF19+$aproTF20+$aproTF21+$aproTF22+$aproTF23+$aproTF24+$aproTF25;
        
        $tdForm1 = Form1::where('usuario_id', $idUser)->get();
        $tdForm2 = Form2::where('usuario_id', $idUser)->get();
        $tdForm3 = Form3::where('usuario_id', $idUser)->get();
        $tdForm4 = Form4::where('usuario_id', $idUser)->get();
        $tdForm5 = Form5::where('usuario_id', $idUser)->get();
        $tdForm6 = Form6::where('usuario_id', $idUser)->get();
        $tdForm7 = Form7::where('usuario_id', $idUser)->get();
        $tdForm8 = Form8::where('usuario_id', $idUser)->get();
        $tdForm9 = Form9::where('usuario_id', $idUser)->get();
        $tdForm10 = Form10::where('usuario_id', $idUser)->get();
        $tdForm11 = Form11::where('usuario_id', $idUser)->get();
        $tdForm12 = Form12::where('usuario_id', $idUser)->get();
        $tdForm13 = Form13::where('usuario_id', $idUser)->get();
        $tdForm14 = Form14::where('usuario_id', $idUser)->get();
        $tdForm15 = Form15::where('usuario_id', $idUser)->get();
        $tdForm16 = Form16::where('usuario_id', $idUser)->get();
        $tdForm17 = Form17::where('usuario_id', $idUser)->get();
        $tdForm18 = Form18::where('usuario_id', $idUser)->get();
        $tdForm19 = Form19::where('usuario_id', $idUser)->get();
        $tdForm20 = Form20::where('usuario_id', $idUser)->get();
        $tdForm21 = Form21::where('usuario_id', $idUser)->get();
        $tdForm22 = Form22::where('usuario_id', $idUser)->get();
        $tdForm23 = Form23::where('usuario_id', $idUser)->get();
        $tdForm24 = Form24::where('usuario_id', $idUser)->get();
        $tdForm25 = Form25::where('usuario_id', $idUser)->get();

        $atividades = Activity::all();
        $authorized = Auth::id();

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
        $tamForm15 = Form15::count();
        $tamForm16 = Form16::count();
        $tamForm17 = Form17::count();
        $tamForm18 = Form18::count();
        $tamForm19 = Form19::count();
        $tamForm20 = Form20::count();
        $tamForm21 = Form21::count();
        $tamForm22 = Form22::count();
        $tamForm23 = Form23::count();
        $tamForm24 = Form24::count();
        $tamForm25 = Form25::count();
        $tamTotalForms = $tamForm1+$tamForm2+$tamForm3+$tamForm4+$tamForm5+$tamForm6+$tamForm7+$tamForm8+$tamForm9+$tamForm10+$tamForm11+$tamForm12+$tamForm13+$tamForm14+$tamForm15+$tamForm16+$tamForm17+$tamForm18+$tamForm19+$tamForm20+$tamForm21+$tamForm22+$tamForm23+$tamForm24+$tamForm25;


        if($chNecessaria-$chAproT >= 0){
            $chRestante = $chNecessaria-$chAproT;
            if($chAproT != 0){
                $percTotal = ($chAproT*100)/$chNecessaria;
            }
            else{
                $percTotal = 0;
            }
        }
        else{
            $chRestante = 0;
            $percTotal = 100;
        }

        return view('home_page')
            ->with('authorized', $authorized)
            ->with('idUser', $idUser)
            ->with('nameUser', $nameUser)
            ->with('chNecessaria', $chNecessaria)
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
            ->with('chTotal', $chTotal)
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
            ->with('aproTF15', $aproTF15)
            ->with('aproTF16', $aproTF16)
            ->with('aproTF17', $aproTF17)
            ->with('aproTF18', $aproTF18)
            ->with('aproTF19', $aproTF19)
            ->with('aproTF20', $aproTF20)
            ->with('aproTF21', $aproTF21)
            ->with('aproTF22', $aproTF22)
            ->with('aproTF23', $aproTF23)
            ->with('aproTF24', $aproTF24)
            ->with('aproTF25', $aproTF25)
            ->with('chAproT', $chAproT)
            ->with('chRestante', $chRestante)
            ->with('percTotal', $percTotal)
            ->with('listUsers', $listUsers)
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
            ->with('tdForm15', $tdForm15)
            ->with('tdForm16', $tdForm16)
            ->with('tdForm17', $tdForm17)
            ->with('tdForm18', $tdForm18)
            ->with('tdForm19', $tdForm19)
            ->with('tdForm20', $tdForm20)
            ->with('tdForm21', $tdForm21)
            ->with('tdForm22', $tdForm22)
            ->with('tdForm23', $tdForm23)
            ->with('tdForm24', $tdForm24)
            ->with('tdForm25', $tdForm25)
            ->with('tamTotalForms', $tamTotalForms);

    }

    public function listActivities($id){
        if(Gate::authorize('administrador')){
            
            $idUser = User::find($id)->id;
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
            $limTF1 = Form1::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF2 = Form2::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF3 = Form3::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF4 = Form4::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF5 = Form5::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF6 = Form6::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF7 = Form7::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF8 = Form8::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF9 = Form9::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF10 = Form10::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF11 = Form11::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF12 = Form12::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF13 = Form13::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF14 = Form14::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF15 = Form15::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF16 = Form16::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF17 = Form17::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF18 = Form18::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF19 = Form19::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF20 = Form20::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF21 = Form21::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF22 = Form22::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF23 = Form23::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF24 = Form24::where('usuario_id', $id)->sum('horas_aprovadas');
            $limTF25 = Form25::where('usuario_id', $id)->sum('horas_aprovadas');
            $dadosForm1 = Form1::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm2 = Form2::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm3 = Form3::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm4 = Form4::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm5 = Form5::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm6 = Form6::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm7 = Form7::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm8 = Form8::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm9 = Form9::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm10 = Form10::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm11 = Form11::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm12 = Form12::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm13 = Form13::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm14 = Form14::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm15 = Form15::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm16 = Form16::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm17 = Form17::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm18 = Form18::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm19 = Form19::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm20 = Form20::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm21 = Form21::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm22 = Form22::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm23 = Form23::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm24 = Form24::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $dadosForm25 = Form25::where('usuario_id', $id)->where('status', 'Indeferido')->orWhere('status', 'Em análise')->get();
            $authorized = $id;

            return  view('list_activities')
                ->with('idUser', $id)
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

    public function form(){
        return view('register_users');
    }

    public function create(Request $data){

        User::create(array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
            'course' => $data['course'],
            'approved_hours' => $data['approved_hours'],
        ));

        return redirect()->action('HomeController@form');
    }

}
