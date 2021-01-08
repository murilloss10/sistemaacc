@extends('index')

@section('main-content')

<div>
    <div class="container title-far-top">

        <form action="{{url('editar/form5/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4>Carga Horária Parcial</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF5}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF5}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF5-$limTF5}} horas</li>
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
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo5">
                      <option selected value="">Selecione o tipo</option>
                      <option value="Conselho ou Colegiado" {{($dados->tipo == "Conselho ou Colegiado") ? 'selected' : ''}}>Conselho ou Colegiado</option>
                      <option value="Diretório Acadêmico" {{($dados->tipo == "Diretório Acadêmico") ? 'selected' : ''}}>Diretório Acadêmico</option>
                    </select>
                    @error('tipo5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="semestre" class="text-label">Quantidade de Semestres</label>
                    <input type="number" class="form-control" id="semestre" name="quant_semestres5" value="{{$dados->quant_semestres}}">
                    @error('quant_semestres5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7">
                    <label for="namere" class="text-label">Nome do Conselhor, Colegiado ou Diretório</label>
                    <input type="text" class="form-control" id="namere" name="nome_c5" value="{{$dados->nome_c}}">
                    @error('nome_c5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" id="start" name="dt_inicio5" value="{{$dados->dt_inicio}}">
                    @error('dt_inicio5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" id="finish" name="dt_fim5" value="{{$dados->dt_fim}}">
                    @error('dt_fim5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <label class="text-label" for="status">Status</label>
                    <select class="custom-select" id="status" name="status5">
                        <option selected value="Em análise" {{($dados->status == "Em análise") ? 'selected' : ''}}>Em análise</option>
                        <option value="Deferido" {{($dados->status == "Deferido") ? 'selected' : ''}}>Deferido</option>
                        <option value="Indeferido" {{($dados->status == "Indeferido") ? 'selected' : ''}}>Indeferido</option>
                    </select>
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar usuario -->
                    <input type="number"class="form-control" placeholder="" id="usuario_id" name="usuario_id5" value="{{$dados->usuario_id}}" >
                </div>
                <div class="col-md-8">
                    <label class="text-label" for="customFileLang">Arquivo</label>
                    <input type="text" class="form-control" id="customFileLang" lang="pt" name="customFileLang5" value="{{$dados->customFileLang}}" readonly>
                    @error('customFileLang5')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="lim_carga_h" name="lim_carga_h" value="{{$dados->lim_carga_h}}">
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>

@endsection