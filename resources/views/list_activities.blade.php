@extends('index')

<title>Lista de Atividades | SAACC</title>

@section('main-content')

    <div class="container-fluid">

        <br><br><br><br>
        <button type="button" class="btn btn-primary float-right"><a class="button-delete-custom" title="Últimas atividades" href="{{url('atividades/aprovadas/lista/'.$idUser)}}">
            Mostrar atividades aprovadas</a>
        </button>

        @include('tables.table_form1')

        @include('tables.table_form14')

        @include('tables.table_form2')

        @include('tables.table_form3')

        @include('tables.table_form4')

        @include('tables.table_form5')

        @include('tables.table_form6')

        @include('tables.table_form7')

        @include('tables.table_form8')

        @include('tables.table_form9')

        @include('tables.table_form10')

        @include('tables.table_form11')

        @include('tables.table_form12')

        @include('tables.table_form13')


    </div>

@endsection