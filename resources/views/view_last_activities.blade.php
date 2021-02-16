@extends('index')

<title>Atividades Aprovadas | SAACC</title>

@section('main-content')
    
    <br><br><br><br><br>
    <div class="container-fluid">

        @can('normal')
            <!-- verificar se o usuário completou todas as horas necessárias para gerar o documento de comprovação -->
            <button type="button" class="btn btn-primary"><a class="button-delete-custom" title="" href="{{url('atividades/documento-comprovacao/'.$idUser)}}">
                DOC. COMPROVAÇÃO</a>
            </button>
        @endcan

        @include('tables.completed_activities')

    </div>

@endsection