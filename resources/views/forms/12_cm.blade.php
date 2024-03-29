<div>
    <div class="container">

        <div class="row">
            <div class="card" id="card-ch-instrutor" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C. H. Parcial: Instrutor</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF12}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF12}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF12-$limTF12 < 0 )
                            0 horas
                        @else
                            {{$chMaxF12-$limTF12}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <div class="card" id="card-ch-aluno" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C. H. Parcial: Aluno</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF25}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF25}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF25-$limTF25 < 0 )
                            0 horas
                        @else
                            {{$chMaxF25-$limTF25}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form12/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <input type="text" value="form12" name="formS" hidden>

            <div class="row">
                <div class="col-md-4">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo12"
                    onchange="java_script_:showCargaHoraria(this.options[this.selectedIndex].value)">
                        <option selected value="">Selecione o tipo</option>
                        <option value="Instrutor" {{ old('tipo12') == 'Instrutor' ? 'selected' : '' }}>Instrutor</option>
                        <option value="Aluno" {{ old('tipo12') == 'Aluno' ? 'selected' : '' }}>Aluno</option>
                    </select>
                    @error('tipo12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria12" value="{{ old('carga_horaria12') }}">
                    @error('carga_horaria12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="namecourse" class="text-label">Nome do Curso ou Minicurso</label>
                    <input type="text" class="form-control" placeholder="" id="namecourse" name="nome_curso12" value="{{ old('nome_curso12') }}">
                    @error('nome_curso12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio12" value="{{ old('dt_inicio12') }}">
                    @error('dt_inicio12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim12" value="{{ old('dt_fim12') }}">
                    @error('dt_fim12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status12">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id12">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <input type="file" class="custom-file-input" id="customFileLang12" lang="pt" name="customFileLang12">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang12" for="customFileLang12"></label>
                    @error('customFileLang12')
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
        if (t == "Instrutor") {
            document.getElementById('card-ch-instrutor').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-instrutor').style.display = 'none';
        }

        if (t == "Aluno") {
            document.getElementById('card-ch-aluno').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-aluno').style.display = 'none';
        }
   }

</script>


