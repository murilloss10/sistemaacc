@extends('index')

<title>Contabilização - Atividades Pendentes | SAACC</title>

@section('main-content')


    <div class="container-fluid">

        
        <br><br><br><br>
        <button type="button" class="btn btn-primary float-right"><a class="button-delete-custom" title="Últimas atividades" href="{{url('atividades/aprovadas')}}">
            Mostrar atividades aprovadas</a>
        </button>

        @include('tables.table_form1') <!-- PROJ. PESQUISA -->
        
        @include('tables.table_form14') <!-- PROJ. EXTENSÃO -->

        @include('tables.table_form2') <!-- PUB. ARTIGO -->

        @include('tables.table_form15') <!-- PUB. RESUMO -->

        @include('tables.table_form3') <!-- COM. CENTRAL DE ORGANIZAÇÃO -->

        @include('tables.table_form16') <!-- COM. SECUNDÁRIA DE ORGANIZAÇÃO -->

        @include('tables.table_form17') <!-- PARTICIP. EVENTO CIENT. NACIONAL OU REGIONAL -->

        @include('tables.table_form18') <!-- PARTICIP. EVENTO CIENT. LOCAL -->

        @include('tables.table_form19') <!-- PARTICIP. PALESTRAS E CONFERÊNCIAS -->

        @include('tables.table_form20') <!-- APRESENTAÇÃO EM EVENTO CIENT. -->

        @include('tables.table_form21') <!-- PALESTRANTE EM EVENTO CIENT. -->

        @include('tables.table_form4') <!-- PREMIAÇÕES -->

        @include('tables.table_form5') <!-- DIRETÓRIO ACADÊMICO -->

        @include('tables.table_form22') <!-- CONSELHO OU COLEGIADO -->

        @include('tables.table_form6') <!-- EMPRESA JÚNIOR -->

        @include('tables.table_form7') <!-- ESTÁGIO NA ÁREA -->

        @include('tables.table_form23') <!-- ESTÁGIO VOLUNTÁRIO -->

        @include('tables.table_form8') <!-- VOLUNTARIADO E AÇÃO SOCIAL -->

        @include('tables.table_form9') <!-- PROJ. CONSULTORIA -->

        @include('tables.table_form10') <!-- MONITORIA -->

        @include('tables.table_form24') <!-- DISC. COMPLEMENTAR -->

        @include('tables.table_form11') <!-- VISITA TÉCNICA -->

        @include('tables.table_form12') <!-- CURSOS: INTRUTOR -->

        @include('tables.table_form25') <!-- CURSOS: ALUNO -->

        @include('tables.table_form13') <!-- MARATONA DE PROGRAMAÇÃO -->


    </div>


@endsection
