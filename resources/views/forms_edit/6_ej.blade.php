@extends('index')

@section('main-content')

<div>
    <div class="container title-far-top">

        <form action="{{url('editar/form6/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4>Carga Horária Parcial</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF6}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF6}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF6-$limTF6}} horas</li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <br>

            <input type="hidden" name="id" value="{{$dados->id}}">

            <div class="row">
                <div class="col-md-6">
                    <label for="quant" class="text-label">Quantidade de Semestres Completos</label>
                    <input type="number" class="form-control" id="quant" name="quant_semestres6" value="{{$dados->quant_semestres}}">
                    @error('quant_semestres6')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" id="start" name="dt_inicio6" value="{{$dados->dt_inicio}}">
                    @error('dt_inicio6')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" id="finish" name="dt_fim6" value="{{$dados->dt_fim}}">
                    @error('dt_fim6')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label class="text-label" for="status">Status</label>
                    <select class="custom-select" id="status" name="status6">
                        <option selected value="Em análise" {{($dados->status == "Em análise") ? 'selected' : ''}}>Em análise</option>
                        <option value="Deferido" {{($dados->status == "Deferido") ? 'selected' : ''}}>Deferido</option>
                        <option value="Indeferido" {{($dados->status == "Indeferido") ? 'selected' : ''}}>Indeferido</option>
                    </select>
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar usuario -->
                    <input type="number" type="hidden" class="form-control" placeholder="" id="usuario_id" name="usuario_id6" value="{{$dados->usuario_id}}">
                </div>
                <div class="col-md-8">
                    <label class="text-label" for="customFileLang">Arquivo</label>
                    <input type="text" class="form-control" id="customFileLang" lang="pt" name="customFileLang6" value="{{$dados->customFileLang}}" readonly>
                    @error('customFileLang6')
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
