
<div>
    <div class="container">

        <div class="row">
            <div class="card" id="card-ch-nacional" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Nacional ou Regional</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF3}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF3}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF3-$limTF3 < 0 )
                            0 horas
                        @else
                            {{$chMaxF3-$limTF3}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <!-- editar daqui para baixo -->
            <div class="card" id="card-ch-local" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Local</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF16}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF16}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF16-$limTF16 < 0 )
                            0 horas
                        @else
                            {{$chMaxF16-$limTF16}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <div class="card" id="card-ch-participacao" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Participação</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF17}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF17}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF17-$limTF17 < 0 )
                            0 horas
                        @else
                            {{$chMaxF17-$limTF17}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <div class="card" id="card-ch-comissao-c" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Comissão Central</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF18}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF18}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF18-$limTF18 < 0 )
                            0 horas
                        @else
                            {{$chMaxF18-$limTF18}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <div class="card" id="card-ch-comissao-s" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Comissão Secundária</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF19}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF19}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF19-$limTF19 < 0 )
                            0 horas
                        @else
                            {{$chMaxF19-$limTF19}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <div class="card" id="card-ch-apresentacao" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Apresentação</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF20}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF20}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF20-$limTF20 < 0 )
                            0 horas
                        @else
                            {{$chMaxF20-$limTF20}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <div class="card" id="card-ch-palestrante" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Palestrante</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF21}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF21}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF21-$limTF21 < 0 )
                            0 horas
                        @else
                            {{$chMaxF21-$limTF21}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form3/salvar')}}" method="POST" class="col-lg-12" enctype="multipart/form-data">

            @csrf

            <input type="text" value="form3" name="formS" hidden>

            <div class="row">
                <div class="col-lg-7">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo3"
                    onchange="java_script_:showCargaHoraria(this.options[this.selectedIndex].value)">
                      <option selected value="">Selecione o tipo</option>
                      <option value="Participação em Evento Científico Nacional ou Regional" {{ old('tipo3') == 'Participação em Evento Científico Nacional ou Regional' ? 'selected' : '' }}>Participação em Evento Científico: Nacional ou Regional</option>
                      <option value="Participação em Evento Científico Local" {{ old('tipo3') == 'Participação em Evento Científico Local' ? 'selected' : '' }}>Participação em Evento Científico: Local</option>
                      <option value="Participação em Palestra e Conferências" {{ old('tipo3') == 'Participação em Palestra e Conferências' ? 'selected' : '' }}>Participação em Palestra e Conferências</option>
                      <option value="Comissão Central de Organização" {{ old('tipo3') == 'Comissão Central de Organização' ? 'selected' : '' }}>Organização em Evento Científico: Comissão Central</option>
                      <option value="Comissão Secundária de Organização" {{ old('tipo3') == 'Comissão Secundária de Organização' ? 'selected' : '' }}>Organização em Evento Científico: Comissão Secundária</option>
                      <option value="Apresentação em Evento Científico" {{ old('tipo3') == 'Apresentação em Evento Científico' ? 'selected' : '' }}>Apresentação de Trabalho em Evento Científico</option>
                      <option value="Palestrante em Evento Científico" {{ old('tipo3') == 'Palestrante em Evento Científico' ? 'selected' : '' }}>Palestrante em Evento Científico</option>
                    </select>
                    @error('tipo3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-5">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria3" value="{{ old('carga_horaria3') }}">
                    @error('carga_horaria3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-7">
                    <label for="nameevent" class="text-label">Nome do Evento ou Palestra ou Trabalho Apresentado</label>
                    <input type="text" class="form-control" placeholder="" id="nameevent" name="nome_evento3" value="{{ old('nome_evento3') }}">
                    @error('nome_evento3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-7">
                    <label for="localeevent" class="text-label">Local</label>
                    <input type="text" class="form-control" placeholder="Nome da Revista ou Evento" id="localeevent" name="local3" value="{{ old('local3') }}">
                    @error('local3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio3" value="{{ old('dt_inicio3') }}">
                    @error('dt_inicio3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-3">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim3" value="{{ old('dt_fim3') }}">
                    @error('dt_fim3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-lg-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status3">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-lg-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id3">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang3" for="customFileLang3"></label>
                    <input type="file" class="custom-file-input" id="customFileLang3" lang="pt" name="customFileLang3">
                    @error('customFileLang3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>

<script language="javascript">

    function showCargaHoraria(t) {
        if (t == "Participação em Evento Científico Nacional ou Regional") {
            document.getElementById('card-ch-nacional').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-nacional').style.display = 'none';
        }

        if (t == "Participação em Evento Científico Local") {
            document.getElementById('card-ch-local').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-local').style.display = 'none';
        }

        if (t == "Participação em Palestra e Conferências") {
            document.getElementById('card-ch-participacao').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-participacao').style.display = 'none';
        }

        if (t == "Comissão Central de Organização") {
            document.getElementById('card-ch-comissao-c').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-comissao-c').style.display = 'none';
        }

        if (t == "Comissão Secundária de Organização") {
            document.getElementById('card-ch-comissao-s').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-comissao-s').style.display = 'none';
        }

        if (t == "Apresentação em Evento Científico") {
            document.getElementById('card-ch-apresentacao').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-apresentacao').style.display = 'none';
        }

        if (t == "Palestrante em Evento Científico") {
            document.getElementById('card-ch-palestrante').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-palestrante').style.display = 'none';
        }

   }

</script>

