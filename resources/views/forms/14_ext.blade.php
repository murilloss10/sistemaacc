
<div>
    <div class="container">

        <div class="card" style="width: 17rem; margin-left: 0;">
            <div class="card-header">
                <h4>Carga Horária Parcial</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF14}} horas</li>
                <li class="list-group-item"><strong>Submetida:</strong> {{$limTF14}} horas</li>
                <li class="list-group-item"><strong>Restante:</strong>
                    @if ( $chMaxF14-$limTF14 < 0 )
                        0 horas
                    @else
                        {{$chMaxF14-$limTF14}} horas
                    @endif
                </li>
            </ul>
            <div class="card-footer text-muted">
                Após atingido o limite de horas, as próximas atividades serão zeradas.
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form14/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <input type="text" value="form14" name="formS" hidden>

            <div class="row">
                <div class="col-md-4 div-hidden">
                    <input type="text" value="Extensão" class="form-control" placeholder="" id="inlineFormCustomSelect" name="tipo14">
                    @error('tipo14')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria14" value="{{ old('carga_horaria14') }}">
                    @error('carga_horaria14')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="nameproject" class="text-label">Nome do Projeto</label>
                    <input type="text" class="form-control" placeholder="" id="nameproject" name="nome_projeto14" value="{{ old('nome_projeto14') }}">
                    @error('nome_projeto14')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio14" value="{{ old('dt_inicio14') }}">
                    @error('dt_inicio14')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim14" value="{{ old('dt_fim14') }}">
                    @error('dt_fim14')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status14">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id14">
                </div>
            </div>

            <!-- revisar name's e ordem dos name's-->
            <div class="row">
                <div class="col-md-8">
                    <input type="file" class="custom-file-input" id="customFileLang14" lang="pt" name="customFileLang14">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang14" for="customFileLang14"></label>
                    @error('customFileLang14')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>

