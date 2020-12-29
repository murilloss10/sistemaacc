
<div>
    <div class="container">

        <form action="{{url('submeter/form3/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4>Carga Horária Parcial</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF3}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF3}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF3-$limTF3}} horas</li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-7">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo3">
                      <option selected value="">Selecione o tipo</option>
                      <option value="Participação em Evento Científico">Participação em Evento Científico: Nacional ou Regional</option>
                      <option value="Organização em Evento Científico">Organização em Evento Científico: Nacional ou Regional</option>
                      <option value="Apresentação em Evento Científico">Apresentação em Evento Científico: Nacional ou Regional</option>
                      <option value="Participação de Palestra">Participação em Palestra: Nacional ou Regional</option>
                      <option value="Organização de Palestra">Organização de Palestra: Nacional ou Regional</option>
                      <option value="Apresentação de Palestra">Apresentação de Palestra: Nacional ou Regional</option>
                    </select>
                    @error('tipo3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria3">
                    @error('carga_horaria3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7">
                    <label for="nameevent" class="text-label">Nome do Evento ou Palestra ou Trabalho Apresentado</label>
                    <input type="text" class="form-control" placeholder="" id="nameevent" name="nome_evento3">
                    @error('nome_evento3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7">
                    <label for="localeevent" class="text-label">Local</label>
                    <input type="text" class="form-control" placeholder="Nome da Revista ou Evento" id="localeevent" name="local3">
                    @error('local3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio3">
                    @error('dt_inicio3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim3">
                    @error('dt_fim3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status3">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id3">
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang3" for="customFileLang3"></label>
                    <input type="file" class="custom-file-input" id="customFileLang3" lang="pt" name="customFileLang3">
                    @error('customFileLang3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>

<!--
<script src=""></script>-->

