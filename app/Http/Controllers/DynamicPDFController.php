<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
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

class DynamicPDFController extends Controller
{
    //
    public function docFinal(Request $request){

        $idUser = $request->input('docfinal');
        $nameUser = Auth::user()->name;
        $dados = User::find($idUser);
        //PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Helvetica']);
        return PDF::loadView('docs.doc_final', compact('dados', 'nameUser'))
            ->setPaper('a4', 'portrait')
            ->download('Resultado_final_atividades_complementares_'.date('Y-m-d__H-i').'.pdf');
            set_time_limit(300);
            

    }


    public function docComprovacao(Request $request){

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
        $idUser = Auth::user()->id;
        $dados = User::find($idUser);

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Helvetica']);
        return PDF::loadView('docs.doc_comprovacao', compact('dados', 'authorized', 'tdForm1', 'tdForm2', 'tdForm3', 'tdForm4', 'tdForm5', 'tdForm6', 'tdForm7', 'tdForm8', 'tdForm9', 'tdForm10', 'tdForm11', 'tdForm12', 'tdForm13', 'tdForm14'))
            ->setPaper('a4', 'portrait')
            ->download('Documentos_Para_Comprovacao_Das_Atividades_Complementares_'.date('Y-m-d__H-i').'.pdf');
            set_time_limit(300);

    }



}
