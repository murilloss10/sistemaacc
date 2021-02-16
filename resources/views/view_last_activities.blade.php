@extends('index')

<title>Atividades Aprovadas | SAACC</title>

@section('main-content')
    
    <br><br><br><br><br>
    <div class="container-fluid">

        @can('normal')
            <!-- verificar se o usuário completou todas as horas necessárias para gerar o documento de comprovação -->
            @if ($chAproT >= $chNecessaria)
                <p>Você completou a quantidade mínimas de horas complementares aprovadas, gere o documento com a relação de atividade, imprima, assine e entregue pessoalmente ao professor responsável pelas AACC.</p>
                <button type="button" class="btn btn-primary"><a class="button-delete-custom" title="" href="{{url('atividades/documento-comprovacao/'.$idUser)}}">
                    <i class="fas fa-file-pdf" style="font-size: 14px;"></i>  RELAÇÃO DE ATIVIDADES APROVADAS</a>
                </button>
                <br><br>
            @endif
            
        @endcan

        @include('tables.completed_activities')

    </div>

@endsection