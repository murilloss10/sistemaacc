<div>
    <div class="container">

        <div class="card" style="width: 17rem; margin-left: 0;">
            <div class="card-header">
                <h4>Carga Horária Parcial</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF8}} horas</li>
                <li class="list-group-item"><strong>Submetida:</strong> {{$limTF8}} horas</li>
                <li class="list-group-item"><strong>Restante:</strong>
                    @if ( $chMaxF8-$limTF8 < 0 )
                        0 horas
                    @else
                        {{$chMaxF8-$limTF8}} horas
                    @endif
                </li>
            </ul>
            <div class="card-footer text-muted">
                Após atingido o limite de horas, as próximas atividades serão zeradas.
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form8/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="col-md-8">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria8">
                    @error('carga_horaria8')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="nameact" class="text-label">Nome da Atividade</label>
                    <input type="text" class="form-control" placeholder="" id="nameact" name="nome_atividade8">
                    @error('nome_atividade8')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <label for="datte" class="text-label">Data</label>
                    <input type="date" class="form-control" placeholder="" id="datte" name="dt_atividade8">
                    @error('dt_atividade8')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status8">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id8">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang8" for="customFileLang8"></label>
                    <input type="file" class="custom-file-input" id="customFileLang8" lang="pt" name="customFileLang8">
                    @error('customFileLang8')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>
