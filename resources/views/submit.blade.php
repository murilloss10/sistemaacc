@extends('index')

<title>Submeter Atividade | SAACC</title>

@section('main-content')


    <div class="container-fluid">

        <br><br><br><br><br>

        @if ($sucess == "atividade-sucesso")
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Atividade cadastrada com sucesso!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        

        <h4 class="submit_title title-far-top">Submissão de Documento AACC</h4><br><br>
        <div class="row">
            <div class="form-inline col-md-12">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo de Atividade</label>
                <select class="custom-select my-1 col-12" id="inlineFormCustomSelectPref"
                    name="formSelect" onchange="java_script_:show(this.options[this.selectedIndex].value)">

                    <option selected value="0">Selecione o tipo de atividade...</option>
                    <option value="form1">Projeto de Pesquisa</option>
                    <option value="form14">Projeto de Extensão</option>
                    <option value="form2">Publicação de Artigo ou Resumo</option>
                    <option value="form3">Eventos Científicos e Palestras: Participação, Organização e Apresentação</option>
                    <option value="form4">Premiação</option>
                    <option value="form5">Representação Estudantil: Conselhos, Colegiados e DA</option>
                    <option value="form6">Empresa Júnior</option>
                    <option value="form7">Estágio Extracurricular</option>
                    <option value="form8">Vonluntariado ou Ação Social</option>
                    <option value="form9">Projeto de Consultoria</option>
                    <option value="form10">Disciplina Complementar ou Monitoria</option>
                    <option value="form11">Visita Técnica</option>
                    <option value="form12">Curso ou Minicurso</option>
                    <option value="form13">Maratona de Programação</option>
                </select>
                <div class="form-submit-top col-md-12">

                    <div id="form1" style="display:none">
                        @include('forms.1_rep')
                    </div>
                    <div id="form14" style="display:none">
                        @include('forms.14_ext')
                    </div>
                    <div id="form2" style="display:none">
                        @include('forms.2_paa')
                    </div>
                    <div id="form3" style="display:none">
                        @include('forms.3_ecp')
                    </div>
                    <div id="form4" style="display: none">
                        @include('forms.4_pre')
                    </div>
                    <div id="form5" style="display: none">
                        @include('forms.5_re')
                    </div>
                    <div id="form6" style="display: none">
                        @include('forms.6_ej')
                    </div>
                    <div id="form7" style="display: none">
                        @include('forms.7_ee')
                    </div>
                    <div id="form8" style="display: none">
                        @include('forms.8_vas')
                    </div>
                    <div id="form9" style="display: none">
                        @include('forms.9_pc')
                    </div>
                    <div id="form10" style="display: none">
                        @include('forms.10_dcm')
                    </div>
                    <div id="form11" style="display: none">
                        @include('forms.11_vt')
                    </div>
                    <div id="form12" style="display: none">
                        @include('forms.12_cm')
                    </div>
                    <div id="form13" style="display: none">
                        @include('forms.13_mp')
                    </div>

                    <script src="{{URL::asset('js/confForm.js')}}"></script>
                </div>
            </div>


        </div>

    </div>


    <script language="javascript">

        function show(aval) {

            if (aval == "form1") {
                form1.style.display = 'inline-block';
            }else{
                form1.style.display = 'none';
            }

            if (aval == "form14") {
                form14.style.display = 'inline-block';
            }else{
                form14.style.display = 'none';
            }

            if (aval == "form2") {
                form2.style.display = 'inline-block';
            }else{
                form2.style.display = 'none';
            }

            if (aval == "form3") {
                form3.style.display = 'inline-block';
            }else{
                form3.style.display = 'none';
            }

            if(aval == "form4") {
                form4.style.display = 'inline-block';
            }else{
                form4.style.display = 'none';
            }

            if(aval == "form5") {
                form5.style.display = 'inline-block';
            }else{
                form5.style.display = 'none';
            }

            if(aval == "form6") {
                form6.style.display = 'inline-block';
            }else{
                form6.style.display = 'none';
            }

            if(aval == "form7") {
                form7.style.display = 'inline-block';
            }else{
                form7.style.display = 'none';
            }

            if(aval == "form8") {
                form8.style.display = 'inline-block';
            }else{
                form8.style.display = 'none';
            }

            if(aval == "form9") {
                form9.style.display = 'inline-block';
            }else{
                form9.style.display = 'none';
            }

            if(aval == "form10") {
                form10.style.display = 'inline-block';
            }else{
                form10.style.display = 'none';
            }

            if(aval == "form11") {
                form11.style.display = 'inline-block';
            }else{
                form11.style.display = 'none';
            }

            if(aval == "form12") {
                form12.style.display = 'inline-block';
            }else{
                form12.style.display = 'none';
            }

            if(aval == "form13") {
                form13.style.display = 'inline-block';
            }else{
                form13.style.display = 'none';
            }


       }

    </script>

@endsection
