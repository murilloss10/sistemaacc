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
use App\Models\Activity;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\AuthorizationException;

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
        $chTotal = $limTF1+$limTF2+$limTF3+$limTF4+$limTF5+$limTF6+$limTF7+$limTF8+$limTF9+$limTF10+$limTF11+$limTF12+$limTF13+$limTF14;

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
        $tamTotalForms = $tamForm1+$tamForm2+$tamForm3+$tamForm4+$tamForm5+$tamForm6+$tamForm7+$tamForm8+$tamForm9+$tamForm10+$tamForm11+$tamForm12+$tamForm13+$tamForm14;




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
            ->with('tamTotalForms', $tamTotalForms);

    }

    public function listActivities($id){
        if(Gate::authorize('administrador')){
            
            $idUser = User::find($id)->id;
            $chMaxF1 = 200;
            $chMaxF2 = 220;
            $chMaxF3 = 630;
            $chMaxF4 = 30;
            $chMaxF5 = 140;
            $chMaxF6 = 80;
            $chMaxF7 = 50;
            $chMaxF8 = 150;
            $chMaxF9 = 60;
            $chMaxF10 = 160;
            $chMaxF11 = 50;
            $chMaxF12 = 150;
            $chMaxF13 = 60;
            $chMaxF14 = 200;
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
                ->with('chMaxF14', $chMaxF14);
        }
    }

}
