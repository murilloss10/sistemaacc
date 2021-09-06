<div>
    <div class="container">

        <div class="card" style="width: 17rem; margin-left: 0;">
            <div class="card-header">
                <h4>Carga Horária Parcial</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF11}} horas</li>
                <li class="list-group-item"><strong>Submetida:</strong> {{$limTF11}} horas</li>
                <li class="list-group-item"><strong>Restante:</strong>
                    @if ( $chMaxF11-$limTF11 < 0 )
                        0 horas
                    @else
                        {{$chMaxF11-$limTF11}} horas
                    @endif
                </li>
            </ul>
            <div class="card-footer text-muted">
                Após atingido o limite de horas, as próximas atividades serão zeradas.
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form11/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="col-md-12">
                    <label for="localevisit" class="text-label">Local da Visita</label>
                    <input type="text" class="form-control" placeholder="" id="localevisit" name="local11">
                    @error('local11')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <label for="datte" class="text-label">Data</label>
                    <input type="date" class="form-control" placeholder="" id="datte" name="dt_local11">
                    @error('dt_local11')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status11">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id11">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang11" for="customFileLang11"></label>
                    <input type="file" class="custom-file-input" id="customFileLang11" lang="pt" name="customFileLang11">
                    @error('customFileLang11')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>
