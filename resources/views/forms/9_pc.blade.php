<div>
    <div class="container">

        <div class="card" style="width: 17rem; margin-left: 0;">
            <div class="card-header">
                <h4>Carga Horária Parcial</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF9}} horas</li>
                <li class="list-group-item"><strong>Submetida:</strong> {{$limTF9}} horas</li>
                <li class="list-group-item"><strong>Restante:</strong>
                    @if ( $chMaxF9-$limTF9 < 0 )
                        0 horas
                    @else
                        {{$chMaxF9-$limTF9}} horas
                    @endif
                </li>
            </ul>
            <div class="card-footer text-muted">
                Após atingido o limite de horas, as próximas atividades serão zeradas.
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form9/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <input type="text" value="form9" name="formS" hidden>

            <div class="row">
                <div class="col-md-12">
                    <label for="nameproject" class="text-label">Nome do Projeto</label>
                    <input type="text" class="form-control" placeholder="" id="nameproject" name="nome_proj9" value="{{ old('nome_proj9') }}">
                    @error('nome_proj9')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <label for="datte" class="text-label">Data</label>
                    <input type="date" class="form-control" placeholder="" id="datte" name="dt_proj9" value="{{ old('dt_proj9') }}">
                    @error('dt_proj9')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status9">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id9">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang9" for="customFileLang9"></label>
                    <input type="file" class="custom-file-input" id="customFileLang9" lang="pt" name="customFileLang9">
                    @error('customFileLang9')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>
