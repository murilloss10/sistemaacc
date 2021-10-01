<div>
    <div class="container">

        <div class="card" style="width: 17rem; margin-left: 0;">
            <div class="card-header">
                <h4>Carga Horária Parcial</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF6}} horas</li>
                <li class="list-group-item"><strong>Submetida:</strong> {{$limTF6}} horas</li>
                <li class="list-group-item"><strong>Restante:</strong>
                    @if ( $chMaxF6-$limTF6 < 0 )
                        0 horas
                    @else
                        {{$chMaxF6-$limTF6}} horas
                    @endif 
                </li>
            </ul>
            <div class="card-footer text-muted">
                Após atingido o limite de horas, as próximas atividades serão zeradas.
            </div>
        </div>
        <br>

        <form action="{{url('submeter/form6/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <input type="text" value="form6" name="formS" hidden>

            <div class="row">
                <div class="col-md-6">
                    <label for="quant" class="text-label">Quantidade de Semestres Completos</label>
                    <input type="number" class="form-control" placeholder="" id="quant" name="quant_semestres6" value="{{ old('quant_semestres6') }}">
                    @error('quant_semestres6')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio6" value="{{ old('dt_inicio6') }}">
                    @error('dt_inicio6')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim6" value="{{ old('dt_fim6') }}">
                    @error('dt_fim6')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status6">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id6">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang6" for="customFileLang6"></label>
                    <input type="file" class="custom-file-input" id="customFileLang6" lang="pt" name="customFileLang6">
                    @error('customFileLang6')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>
