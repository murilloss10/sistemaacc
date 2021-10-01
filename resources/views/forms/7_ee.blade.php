<div>
    <div class="container">

        <div class="row">
            <div class="card" id="card-ch-vinculado" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Vinculado</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF7}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF7}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF7-$limTF7 < 0 )
                            0 horas
                        @else
                            {{$chMaxF7-$limTF7}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <div class="card" id="card-ch-voluntario" style="width: 17rem; margin-left: 0; display: none;">
                <div class="card-header">
                    <h4>C.H. Parcial: Voluntário</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF23}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF23}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong>
                        @if ( $chMaxF23-$limTF23 < 0 )
                            0 horas
                        @else
                            {{$chMaxF23-$limTF23}} horas
                        @endif
                    </li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form7/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <input type="text" value="form7" name="formS" hidden>

            <div class="row">
                <div class="col-md-12">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo_inst7"
                    onchange="java_script_:showCargaHoraria(this.options[this.selectedIndex].value)">
                        <option selected value="">Selecione o tipo</option>
                        <option value="Vinculado à Área do Curso" {{ old('tipo_inst7') == 'Vinculado à Área do Curso' ? 'selected' : '' }}>Vinculado à Área do Curso</option>
                        <option value="Voluntário no IFNMG" {{ old('tipo_inst7') == 'Voluntário no IFNMG' ? 'selected' : '' }}>Voluntário no IFNMG</option>
                    </select>
                    @error('tipo_inst7')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="nameinst" class="text-label">Nome da Instituição</label>
                    <input type="text" class="form-control" placeholder="" id="nameinst" name="nome_inst7" value="{{ old('nome_inst7') }}">
                    @error('nome_inst7')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio7" value="{{ old('dt_inicio7') }}">
                    @error('dt_inicio7')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim7" value="{{ old('dt_fim7') }}">
                    @error('dt_fim7')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status7">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id7">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang7" for="customFileLang7"></label>
                    <input type="file" class="custom-file-input" id="customFileLang7" lang="pt" name="customFileLang7">
                    @error('customFileLang7')
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
        if (t == "Vinculado à Área do Curso") {
            document.getElementById('card-ch-vinculado').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-vinculado').style.display = 'none';
        }

        if (t == "Voluntário no IFNMG") {
            document.getElementById('card-ch-voluntario').style.display = 'inline-block';
        }else{
            document.getElementById('card-ch-voluntario').style.display = 'none';
        }
   }

</script>
