<div>
    <div class="container">

        <form action="{{url('submeter/form10/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4>Carga Horária Parcial</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF10}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF10}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF10-$limTF10}} horas</li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo10">
                      <option selected value="">Selecione o tipo</option>
                      <option value="Disciplina Complementar">Disciplina Complementar</option>
                      <option value="Monitoria">Monitoria</option>
                    </select>
                    @error('tipo10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria10">
                    @error('carga_horaria10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="namedisc" class="text-label">Nome da Disciplina</label>
                    <input type="text" class="form-control" placeholder="" id="namedisc" name="nome_disc10">
                    @error('nome_disc10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio10">
                    @error('dt_inicio10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim10">
                    @error('dt_fim10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status10">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id10">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang10" for="customFileLang10"></label>
                    <input type="file" class="custom-file-input" id="customFileLang10" lang="pt" name="customFileLang10">
                    @error('customFileLang10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>
