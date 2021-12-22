<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\Activity;
use App\User;
use Carbon\Carbon;

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

        $idUser = Auth::user()->id;
        $tdForm1 = Form1::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm2 = Form2::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm3 = Form3::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm4 = Form4::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm5 = Form5::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm6 = Form6::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm7 = Form7::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm8 = Form8::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm9 = Form9::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm10 = Form10::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm11 = Form11::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm12 = Form12::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm13 = Form13::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm14 = Form14::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm15 = Form15::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm16 = Form16::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm17 = Form17::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm18 = Form18::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm19 = Form19::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm20 = Form20::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm21 = Form21::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm22 = Form22::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm23 = Form23::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm24 = Form24::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $tdForm25 = Form25::where('usuario_id',$idUser)->where('status', 'Deferido')->where('horas_aprovadas', '>', 0)->get();
        $atividades = Activity::all();
        $authorized = Auth::id();
        $dados = User::find($idUser);

        foreach ($tdForm1 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => 'Projeto de Pesquisa: ' . $form->nome_projeto,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm2 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => 'Publicação de Artigo: ' . $form->titulo,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm3 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_evento,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm4 as $form) {
            $date = new Carbon($form->dt_evento);
            $allActivityApproved[] = [
                'activity_name' => 'Premiação: ' . $form->nome_evento,
                'period' => $date->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm5 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_c,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm6 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => 'Empresa Júnior',
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm7 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => 'Estágio Extracurricular: ' . $form->nome_inst,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm8 as $form) {
            $date = new Carbon($form->dt_atividade);
            $allActivityApproved[] = [
                'activity_name' => 'Voluntariado ou Ação Social: ' . $form->nome_atividade,
                'period' => $date->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm9 as $form) {
            $date = new Carbon($form->dt_proj);
            $allActivityApproved[] = [
                'activity_name' => 'Projeto de Consultoria: ' . $form->nome_proj,
                'period' => $date->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm10 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_disc,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm11 as $form) {
            $date = new Carbon($form->dt_local);
            $allActivityApproved[] = [
                'activity_name' => 'Visita Técnica: ' . $form->local,
                'period' => $date->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm12 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ' de Minicurso: ' . $form->nome_curso,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm13 as $form) {
            $date = new Carbon($form->dt_maratona);
            $allActivityApproved[] = [
                'activity_name' => 'Maratona de Programação: ' . $form->nome_maratona,
                'period' => $date->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm14 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => 'Projeto de Extensão: ' . $form->nome_projeto,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm15 as $form) {
            $date = new Carbon($form->dt_pub);
            $allActivityApproved[] = [
                'activity_name' => 'Publicação de Resumo: ' . $form->titulo,
                'period' => $date->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm16 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_evento,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm17 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_evento,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm18 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_evento,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm19 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_evento,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm20 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_evento,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm21 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_evento,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm22 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_c,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }
        
        foreach ($tdForm23 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => 'Estágio Extracurricular: ' . $form->nome_inst,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm24 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ': ' . $form->nome_disc,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }

        foreach ($tdForm25 as $form) {
            $date_start = new Carbon($form->dt_inicio);
            $date_end = new Carbon($form->dt_fim);
            $allActivityApproved[] = [
                'activity_name' => $form->tipo . ' de Minicurso: ' . $form->nome_curso,
                'period' => $date_start->format('d/m/Y') . ' a ' . $date_end->format('d/m/Y'),
                'hours' => $form->horas_aprovadas,
                'status' => $form->status
            ];
        }


        if ( !isset($allActivityApproved) ) {
            $allActivityApproved = [];
        } else {

            foreach ($allActivityApproved as $key => $row){
                $date_period[$key] = $row['period'];
            }
            array_multisort($date_period, SORT_DESC, $allActivityApproved);
            
        }

        $allActivityApproved_json = json_encode($allActivityApproved);

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Helvetica']);
        return PDF::loadView('docs.doc_comprovacao', compact('dados', 'authorized', 'allActivityApproved_json') )
            ->setPaper('a4', 'portrait')
            ->download('Documentos_Para_Comprovacao_Das_Atividades_Complementares_'.date('Y-m-d__H-i').'.pdf');
            set_time_limit(300);

    }



}
