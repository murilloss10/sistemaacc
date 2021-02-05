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

    public function pagForm(){ //função revisada

        if(Gate::authorize('normal')){
            $user = User::all();
            $idUser = Auth::id();
            $nameUser = Auth::user()->name;
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
        //Form1::create($request->input());

        //flash("Atividade submetida com sucesso !")->sucess();
        //Session::flash("Atividade submetida com sucesso !");

        return redirect()->action('Activity\ActivityController@pagForm')->with('success', 'Atividade cadastrada com sucesso!');

    }

    public function form2(Form2Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form2::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimArtigo = 40;
        $chLimResumo = 20;
        $chMax = 220;

        if($request->file('customFileLang2')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang2->extension();
            $request->file('customFileLang2')->storeAs('public', $nameA);

            if($request->input('tipo2') == 'Artigo'){
                if($limT <= $chMax){
                    if($limT+$chLimArtigo <= $chMax){
                        $lim = $chLimArtigo;
                    }
                    else if($limT+$chLimArtigo > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }
            else if($request->input('tipo2') == 'Resumo'){
                if($limT <= $chMax){
                    if($limT+$chLimResumo <= $chMax){
                        $lim = $chLimResumo;
                    }
                    else if($limT+$chLimResumo > $chMax){
                        $lim = $chMax - $limT;
                    }
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
        return redirect()->action('Activity\ActivityController@pagForm');
    }

    public function form3(Form3Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form3::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chMax = 630;
        $limOrganEvento = 40;
        $limOrganPalestra = 20;
        $limPartiEvento = 20;
        $limPartiPalestra = 5;
        $limApreseEvento = 15;
        $limApresePalestra = 15;

        if($request->file('customFileLang3')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang3->extension();
            $request->file('customFileLang3')->storeAs('public', $nameA);

            if($request->input('tipo3') == 'Organização em Evento Científico'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limOrganEvento){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limOrganEvento <= $chMax){
                            $lim = $limOrganEvento;
                        }
                        else if($limT+$limOrganEvento > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }

                }
            }
            else if($request->input('tipo3') == 'Organização de Palestra'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limOrganPalestra){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limOrganPalestra <= $chMax){
                            $lim = $limOrganPalestra;
                        }
                        else if($limT+$limOrganPalestra > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
            else if($request->input('tipo3') == 'Participação em Evento Científico'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limPartiEvento){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limPartiEvento <= $chMax){
                            $lim = $limPartiEvento;
                        }
                        else if($limT+$limPartiEvento > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
            else if($request->input('tipo3') == 'Participação de Palestra'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limPartiPalestra){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limPartiPalestra <= $chMax){
                            $lim = $limPartiPalestra;
                        }
                        else if($limT+$limPartiPalestra > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
            else if($request->input('tipo3') == 'Apresentação em Evento Científico'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limApreseEvento){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limApreseEvento <= $chMax){
                            $lim = $limApreseEvento;
                        }
                        else if($limT+$limApreseEvento > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
            else if($request->input('tipo3') == 'Apresentação de Palestra'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limApresePalestra){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limApresePalestra <= $chMax){
                            $lim = $limApresePalestra;
                        }
                        else if($limT+$limApresePalestra > $chMax){
                            $lim = $chMax - $limT;
                        }
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
        return redirect()->action('Activity\ActivityController@pagForm');
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
        return redirect()->action('Activity\ActivityController@pagForm');
    }

    public function form5(Form5Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form5::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimDA = 40;
        $chLimColegiado = 15;
        $chMax = 140;

        if($request->file('customFileLang5')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang5->extension();
            $request->file('customFileLang5')->storeAs('public', $nameA);

            if($request->input('tipo5') == 'Diretório Acadêmico'){
                if($limT <= $chMax){
                    if($request->input('quant_semestres5') >= 2){
                        if($limT+$chLimDA <= $chMax){
                            $lim = $chLimDA;
                        }
                        else if($limT+$chLimDA > $chMax){
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
            }
            else if($request->input('tipo5') == 'Conselho ou Colegiado'){
                if($request->input('quant_semestres5')*$chLimColegiado <= $chMax-$limT){
                    $lim = $request->input('quant_semestres5')*$chLimColegiado;
                }
                else if($request->input('quant_semestres5')*$chLimColegiado > $chMax-$limT){
                    $lim = $chMax - $limT;
                }
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
        return redirect()->action('Activity\ActivityController@pagForm');
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
        return redirect()->action('Activity\ActivityController@pagForm');
    }

    public function form7(Form7Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form7::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimEstagio = 50;
        $chMax = 50;

        if($request->file('customFileLang7')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang7->extension();
            $request->file('customFileLang7')->storeAs('public', $nameA);

            if($limT <= $chMax){
                if($limT+$chLimEstagio <= $chMax){
                    $lim = $chLimEstagio;
                }
                else if($limT+$chLimEstagio > $chMax){
                    $lim = $chMax - $limT;
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
        return redirect()->action('Activity\ActivityController@pagForm');
    }

    public function form8(Form8Request $request){

        $idUser = Auth::id();
        $limT = Form8::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 10;
        $chMax = 150;

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
        return redirect()->action('Activity\ActivityController@pagForm');
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
        return redirect()->action('Activity\ActivityController@pagForm');
    }

    public function form10(Form10Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form10::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLim = 40;
        $chLimC = 80;
        $chMax = 160;

        if($request->file('customFileLang10')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang10->extension();
            $request->file('customFileLang10')->storeAs('public', $nameA);

            if($request->input('tipo10') == 'Monitoria'){
                if($chLim >= $request->input('carga_horaria10')){
                    if($limT+$request->input('carga_horaria10') <= $chMax){
                        $lim = $request->input('carga_horaria10');
                    }
                    else if($limT+$request->input('carga_horaria10') > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else{
                    if($limT+$chLim <= $chMax){
                        $lim = $chLim;
                    }
                    else if($limT+$chLim > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }
            else if($request->input('tipo10') == 'Disciplina Complementar'){
                if($request->input('carga_horaria10') <= $chLimC){
                    if($limT+$request->input('carga_horaria10') <= $chMax){
                        $lim = $request->input('carga_horaria10');
                    }
                    else if($limT+$request->input('carga_horaria10') > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else{
                    if($limT+$chLimC <= $chMax){
                        $lim = $chLimC;
                    }
                    else if($limT+$chLimC > $chMax){
                        $lim = $chMax - $limT;
                    }
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
        return redirect()->action('Activity\ActivityController@pagForm');
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
        return redirect()->action('Activity\ActivityController@pagForm');
    }

    public function form12(Form12Request $request){ //função revisada

        $idUser = Auth::id();
        $limT = Form12::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimInstru = 10;
        $chLimAluno = 20;
        $chMax = 150;

        if($request->file('customFileLang12')->isValid()){
            $h = uniqid(date('HisYmd'));
            $nameA = $h .'.'.$request->customFileLang12->extension();
            $request->file('customFileLang12')->storeAs('public', $nameA);

            if($request->input('tipo12') == 'Instrutor'){
                if($chLimInstru >= $request->input('carga_horaria12')){
                    if($limT+$request->input('carga_horaria12') <= $chMax){
                        $lim = $request->input('carga_horaria12');
                    }
                    else if($limT+$request->input('carga_horaria12') > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else{
                    if($limT+$chLimInstru <= $chMax){
                        $lim = $chLimInstru;
                    }
                    else if($limT+$chLimInstru > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }
            else if($request->input('tipo12') == 'Aluno'){
                if($request->input('carga_horaria12') <= $chLimAluno){
                    if($limT+$request->input('carga_horaria12') <= $chMax){
                        $lim = $request->input('carga_horaria12');
                    }
                    else if($limT+$request->input('carga_horaria12') > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else{
                    if($limT+$chLimAluno <= $chMax){
                        $lim = $chLimAluno;
                    }
                    else if($limT+$chLimAluno > $chMax){
                        $lim = $chMax - $limT;
                    }
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
        return redirect()->action('Activity\ActivityController@pagForm');
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
        return redirect()->action('Activity\ActivityController@pagForm');
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

        return redirect()->action('Activity\ActivityController@pagForm')->with('success', 'Atividade cadastrada com sucesso!');

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
            $chMaxF2 = 220;
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
            $chMaxF3 = 630;
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
            $chMaxF5 = 140;
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
            $chMaxF10 = 160;
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
            $chMaxF12 = 150;
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

        $idUser =  $request->input('usuario_id2');
        $limT = Form2::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLimArtigo = 40;
        $chLimResumo = 20;
        $chMax = 220;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status2') == "Deferido"){
            if($request->input('tipo2') == 'Artigo'){
                if($limT <= $chMax){
                    if($limT+$chLimArtigo <= $chMax){
                        $lim = $chLimArtigo;
                    }
                    else if($limT+$chLimArtigo > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }
            else if($request->input('tipo2') == 'Resumo'){
                if($limT <= $chMax){
                    if($limT+$chLimResumo <= $chMax){
                        $lim = $chLimResumo;
                    }
                    else if($limT+$chLimResumo > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }    
        }
        else{
            $lim = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas2');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));
        
        $data = Form2::find($request->id)->update(array(
            'id' => $request->input('id'),
            'tipo' => $request->input('tipo2'),
            'titulo' => $request->input('titulo2'),
            'onde_pub' => $request->input('onde_pub2'),
            'dt_pub' => $request->input('dt_pub2'),
            'status' => $request->input('status2'),
            'usuario_id' => $request->input('usuario_id2'),
            'customFileLang' => $request->input('customFileLang2'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
        ));

        return redirect()->route('lista_atividades', $idUser);

    }

    public function editarForm3(Form3Request $request){ //função revisada - salvar edição

        $idUser = $request->input('usuario_id3');
        $limT = Form3::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chMax = 630;
        $limOrganEvento = 40;
        $limOrganPalestra = 20;
        $limPartiEvento = 20;
        $limPartiPalestra = 5;
        $limApreseEvento = 15;
        $limApresePalestra = 15;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status3') == "Deferido"){
            if($request->input('tipo3') == 'Organização em Evento Científico'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limOrganEvento){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limOrganEvento <= $chMax){
                            $lim = $limOrganEvento;
                        }
                        else if($limT+$limOrganEvento > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
    
                }
            }
            else if($request->input('tipo3') == 'Organização de Palestra'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limOrganPalestra){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limOrganPalestra <= $chMax){
                            $lim = $limOrganPalestra;
                        }
                        else if($limT+$limOrganPalestra > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
            else if($request->input('tipo3') == 'Participação em Evento Científico'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limPartiEvento){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limPartiEvento <= $chMax){
                            $lim = $limPartiEvento;
                        }
                        else if($limT+$limPartiEvento > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
            else if($request->input('tipo3') == 'Participação de Palestra'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limPartiPalestra){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limPartiPalestra <= $chMax){
                            $lim = $limPartiPalestra;
                        }
                        else if($limT+$limPartiPalestra > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
            else if($request->input('tipo3') == 'Apresentação em Evento Científico'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limApreseEvento){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limApreseEvento <= $chMax){
                            $lim = $limApreseEvento;
                        }
                        else if($limT+$limApreseEvento > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
            else if($request->input('tipo3') == 'Apresentação de Palestra'){
                if($limT <= $chMax){
                    if($request->input('carga_horaria3') <= $limApresePalestra){
                        if($limT+$request->input('carga_horaria3') <= $chMax){
                            $lim = $request->input('carga_horaria3');
                        }
                        else if($limT+$request->input('carga_horaria3') > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                    else {
                        if($limT+$limApresePalestra <= $chMax){
                            $lim = $limApresePalestra;
                        }
                        else if($limT+$limApresePalestra > $chMax){
                            $lim = $chMax - $limT;
                        }
                    }
                }
            }
        }
        else {
            $lim = 0;
        }
        
        $chAproAnterior-=$request->input('horas_aprovadas3');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form3::find($request->id)->update(array(
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
            'horas_aprovadas' => $lim,
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
        $limT = Form5::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLimDA = 40;
        $chLimColegiado = 15;
        $chMax = 140;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status5') == "Deferido"){
            if($request->input('tipo5') == 'Diretório Acadêmico'){
                if($limT <= $chMax){
                    if($request->input('quant_semestres5') >= 2){
                        if($limT+$chLimDA <= $chMax){
                            $lim = $chLimDA;
                        }
                        else if($limT+$chLimDA > $chMax){
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
            }
            else if($request->input('tipo5') == 'Conselho ou Colegiado'){
                if($request->input('quant_semestres5')*$chLimColegiado <= $chMax-$limT){
                    $lim = $request->input('quant_semestres5')*$chLimColegiado;
                }
                else if($request->input('quant_semestres5')*$chLimColegiado > $chMax-$limT){
                    $lim = $chMax - $limT;
                }
            }
        }
        else {
            $lim = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas5');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form5::find($request->id)->update(array(
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
            'horas_aprovadas' => $lim,
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
        $limT = Form7::where('usuario_id', $idUser)->sum('lim_carga_h');
        $chLimEstagio = 50;
        $chMax = 50;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status7') == "Deferido"){
            if($limT <= $chMax){
                if($request->input('lim_carga_h') == $chLimEstagio){
                    $lim = $chLimEstagio;
                }
                else{
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

        $chAproAnterior-=$request->input('horas_aprovadas7');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));


        $data = Form7::find($request->id)->update(array(
            'id' => $request->input('id'),
            'nome_inst' => $request->input('nome_inst7'),
            'dt_inicio' => $request->input('dt_inicio7'),
            'dt_fim' => $request->input('dt_fim7'),
            'status' => $request->input('status7'),
            'usuario_id' => $request->input('usuario_id7'),
            'customFileLang' => $request->input('customFileLang7'),
            'lim_carga_h' => $request->input('lim_carga_h'),
            'horas_aprovadas' => $lim,
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
        $limT = Form10::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLim = 40;
        $chLimC = 80;
        $chMax = 160;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status10') == "Deferido"){
            if($request->input('tipo10') == 'Monitoria'){
                if($chLim >= $request->input('carga_horaria10')){
                    if($limT+$request->input('carga_horaria10') <= $chMax){
                        $lim = $request->input('carga_horaria10');
                    }
                    else if($limT+$request->input('carga_horaria10') > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else{
                    if($limT+$chLim <= $chMax){
                        $lim = $chLim;
                    }
                    else if($limT+$chLim > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }
            else if($request->input('tipo10') == 'Disciplina Complementar'){
                if($request->input('carga_horaria10') <= $chLimC){
                    if($limT+$request->input('carga_horaria10') <= $chMax){
                        $lim = $request->input('carga_horaria10');
                    }
                    else if($limT+$request->input('carga_horaria10') > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else{
                    if($limT+$chLimC <= $chMax){
                        $lim = $chLimC;
                    }
                    else if($limT+$chLimC > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }
        }
        else{
            $lim = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas10');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form10::find($request->id)->update(array(
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
            'horas_aprovadas' => $lim,
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
        $limT = Form12::where('usuario_id', $idUser)->sum('lim_carga_h')-$request->input('lim_carga_h');
        $chLimInstru = 10;
        $chLimAluno = 20;
        $chMax = 150;

        $antHorasApro = User::where('id', $idUser)->first();
        $chAproAnterior = $antHorasApro->approved_hours;

        if($request->input('status12') == "Deferido"){
            if($request->input('tipo12') == 'Instrutor'){
                if($chLimInstru >= $request->input('carga_horaria12')){
                    if($limT+$request->input('carga_horaria12') <= $chMax){
                        $lim = $request->input('carga_horaria12');
                    }
                    else if($limT+$request->input('carga_horaria12') > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else{
                    if($limT+$chLimInstru <= $chMax){
                        $lim = $chLimInstru;
                    }
                    else if($limT+$chLimInstru > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }
            else if($request->input('tipo12') == 'Aluno'){
                if($request->input('carga_horaria12') <= $chLimAluno){
                    if($limT+$request->input('carga_horaria12') <= $chMax){
                        $lim = $request->input('carga_horaria12');
                    }
                    else if($limT+$request->input('carga_horaria12') > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
                else{
                    if($limT+$chLimAluno <= $chMax){
                        $lim = $chLimAluno;
                    }
                    else if($limT+$chLimAluno > $chMax){
                        $lim = $chMax - $limT;
                    }
                }
            }
        }
        else{
            $lim = 0;
        }

        $chAproAnterior-=$request->input('horas_aprovadas12');
        
        User::find($idUser)->update(array(
            'approved_hours' => $chAproAnterior+$lim,
        ));

        $data = Form12::find($request->id)->update(array(
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
            'horas_aprovadas' => $lim,
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
