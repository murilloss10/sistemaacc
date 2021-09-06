
<div>
    <div class="container">

        <div class="row">
            <div class="card" id="card-ch-diretorio" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Diretório</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF5}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF5}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF5-$limTF5 < 0 )
                            0 horas
                        @else
                            {{$chMaxF5-$limTF5}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <div class="card" id="card-ch-colegiado" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Colegiado</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF22}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF22}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF22-$limTF22 < 0 )
                            0 horas
                        @else
                            {{$chMaxF22-$limTF22}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form5/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="col-md-7">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo5"
                    onchange="java_script_:showCargaHoraria(this.options[this.selectedIndex].value)">
                      <option selected value="">Selecione o tipo</option>
                      <option value="Conselho ou Colegiado">Conselho ou Colegiado</option>
                      <option value="Diretório Acadêmico">Diretório Acadêmico</option>
                    </select>
                    @error('tipo5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="semestre" class="text-label">Quantidade de Semestres</label>
                    <input type="number" class="form-control" placeholder="" id="semestre" name="quant_semestres5">
                    @error('quant_semestres5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7">
                    <label for="namere" class="text-label">Nome do Conselhor, Colegiado ou Diretório</label>
                    <input type="text" class="form-control" placeholder="" id="namere" name="nome_c5">
                    @error('nome_c5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio5">
                    @error('dt_inicio5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim5">
                    @error('dt_fim5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status5">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id5">
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang5" for="customFileLang5"></label>
                    <input type="file" class="custom-file-input" id="customFileLang5" lang="pt" name="customFileLang5">
                    @error('customFileLang5')
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
        if (t == "Diretório Acadêmico") {
            document.getElementById('card-ch-diretorio').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-diretorio').style.display = 'none';
        }

        if (t == "Conselho ou Colegiado") {
            document.getElementById('card-ch-colegiado').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-colegiado').style.display = 'none';
        }
   }

</script>
