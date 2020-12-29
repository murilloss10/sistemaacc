@extends('index')

@section('main-content')

<div>
    <div class="container title-far-top">

        <form action="{{url('editar/form3/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

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

            <input type="hidden" name="id" value="{{$dados->id}}">

            <div class="row">
                <div class="col-md-7">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo3">
                      <option selected value="">Selecione o tipo</option>
                      <option value="Participação em Evento Científico" {{($dados->tipo == "Participação em Evento Científico") ? 'selected' : ''}}>Participação em Evento Científico: Nacional ou Regional</option>
                      <option value="Organização em Evento Científico" {{($dados->tipo == "Organização em Evento Científico") ? 'selected' : ''}}>Organização em Evento Científico: Nacional ou Regional</option>
                      <option value="Apresentação em Evento Científico" {{($dados->tipo == "Apresentação em Evento Científico") ? 'selected' : ''}}>Apresentação em Evento Científico: Nacional ou Regional</option>
                      <option value="Participação de Palestra" {{($dados->tipo == "Participação de Palestra") ? 'selected' : ''}}>Participação em Palestra: Nacional ou Regional</option>
                      <option value="Organização de Palestra" {{($dados->tipo == "Organização de Palestra") ? 'selected' : ''}}>Organização de Palestra: Nacional ou Regional</option>
                      <option value="Apresentação de Palestra" {{($dados->tipo == "Apresentação de Palestra") ? 'selected' : ''}}>Apresentação de Palestra: Nacional ou Regional</option>
                    </select>
                    @error('tipo3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria3" value="{{$dados->carga_horaria}}">
                    @error('carga_horaria3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7">
                    <label for="nameevent" class="text-label">Nome do Evento ou Palestra ou Trabalho Apresentado</label>
                    <input type="text" class="form-control" placeholder="" id="nameevent" name="nome_evento3" value="{{$dados->nome_evento}}">
                    @error('nome_evento3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7">
                    <label for="localeevent" class="text-label">Local</label>
                    <input type="text" class="form-control" placeholder="Nome da Revista ou Evento" id="localeevent" name="local3" value="{{$dados->local}}">
                    @error('local3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" id="start" name="dt_inicio3" value="{{$dados->dt_inicio}}">
                    @error('dt_inicio3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control"  id="finish" name="dt_fim3" value="{{$dados->dt_fim}}">
                    @error('dt_fim3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <label class="text-label" for="status">Status</label>
                    <select class="custom-select" id="status" name="status3">
                        <option selected value="Em análise" {{($dados->status == "Em análise") ? 'selected' : ''}}>Em análise</option>
                        <option value="Deferido" {{($dados->status == "Deferido") ? 'selected' : ''}}>Deferido</option>
                        <option value="Indeferido" {{($dados->status == "Indeferido") ? 'selected' : ''}}>Indeferido</option>
                    </select>
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" class="form-control" placeholder="" id="usuario_id" name="usuario_id3" value="{{$dados->usuario_id}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <label class="text-label" for="customFileLang">Arquivo</label>
                    <input type="text" class="form-control" id="customFileLang" lang="pt" name="customFileLang3" value="{{$dados->customFileLang}}" readonly>
                    @error('customFileLang3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                <input type="number" type="hidden" class="form-control" id="lim_carga_h" name="lim_carga_h" value="{{$dados->lim_carga_h}}">
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>

<!--
<script src=""></script>-->



@endsection
