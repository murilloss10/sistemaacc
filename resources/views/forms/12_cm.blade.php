<div>
    <div class="container">

        <form action="{{url('submeter/form12/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="card" id="card-instrutor" style="width: 17rem;">
                    <div class="card-header">
                        <h4>C. H. Parcial: Instrutor</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF12}} horas</li>
                        <li class="list-group-item"><strong>Submetida:</strong> {{$limTF12}} horas</li>
                        <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF12-$limTF12}} horas</li>
                    </ul>
                    <div class="card-footer text-muted">
                        Após atingido o limite de horas, as próximas atividades serão zeradas.
                    </div>
                </div>
                <div class="card" id="card-aluno" style="width: 17rem;">
                    <div class="card-header">
                        <h4>C. H. Parcial: Aluno</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF25}} horas</li>
                        <li class="list-group-item"><strong>Submetida:</strong> {{$limTF25}} horas</li>
                        <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF25-$limTF25}} horas</li>
                    </ul>
                    <div class="card-footer text-muted">
                        Após atingido o limite de horas, as próximas atividades serão zeradas.
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo12">
                      <option selected value="">Selecione o tipo</option>
                      <option value="Instrutor">Instrutor</option>
                      <option value="Aluno">Aluno</option>
                    </select>
                    @error('tipo12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria12">
                    @error('carga_horaria12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="namecourse" class="text-label">Nome do Curso ou Minicurso</label>
                    <input type="text" class="form-control" placeholder="" id="namecourse" name="nome_curso12">
                    @error('nome_curso12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio12">
                    @error('dt_inicio12')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim12">
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




