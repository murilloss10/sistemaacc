@extends('index')

@section('main-content')

<div>
    <div class="container title-far-top">

        <form action="{{url('editar/form4/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4>Carga Horária Parcial</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF4}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF4}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF4-$limTF4}} horas</li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <br>

            <input type="hidden" name="id" value="{{$dados->id}}">

            <div class="row">
                <div class="col-md-6">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria4" value="{{$dados->carga_horaria}}">
                    @error('carga_horaria4')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="nameelocale" class="text-label">Nome do Evento onde foi premiado</label>
                    <input type="text" class="form-control" placeholder="" id="nameelocale" name="nome_evento4" value="{{$dados->nome_evento}}">
                    @error('nome_evento4')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="datte" class="text-label">Data</label>
                    <input type="date" class="form-control" placeholder="" id="datte" name="dt_evento4" value="{{$dados->dt_evento}}">
                    @error('dt_evento4')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"><!-- div para status do arquivo -->
                    <label class="text-label" for="status">Status</label>
                    <select class="custom-select" id="status" name="status4">
                        <option selected value="Em análise" {{($dados->status == "Em análise") ? 'selected' : ''}}>Em análise</option>
                        <option value="Deferido" {{($dados->status == "Deferido") ? 'selected' : ''}}>Deferido</option>
                        <option value="Indeferido" {{($dados->status == "Indeferido") ? 'selected' : ''}}>Indeferido</option>
                    </select>
                </div>
                <div class="col-md-4 div-hidden">
                    <input type="number" class="form-control" placeholder="" id="usuario_id" name="usuario_id4" value="{{$dados->usuario_id}}" >
                </div>
                <div class="col-md-8">
                    <label class="text-label" for="customFileLang">Arquivo</label>
                    <input type="text" class="form-control" id="customFileLang" lang="pt" name="customFileLang4" value="{{$dados->customFileLang}}" readonly>
                    @error('customFileLang4')
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
