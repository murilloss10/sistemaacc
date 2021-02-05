<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\Activity;
use App\User;

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



}
