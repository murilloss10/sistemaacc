@extends('index')

<title>Avaliar Atividade | SAACC</title>

@section('main-content')

<div>
    <div class="container title-far-top">

        <form action="{{url('editar/form1/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h4>Carga Horária Parcial</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF1}} horas</li>
                        <li class="list-group-item"><strong>Submetida:</strong> {{$limTF1}} horas</li>
                        <li class="list-group-item"><strong>Aprovada:</strong> {{$aproTF1}} horas</li>
                        <li class="list-group-item"><strong>Restante:</strong>
                            @if ( $chMaxF1-$limTF1 < 0 )
                                0 horas
                            @else
                                {{$chMaxF1-$aproTF1}} horas
                            @endif
                        </li>
                    </ul>
                    <div class="card-footer text-muted">
                        Após atingido o limite de horas, as próximas atividades serão zeradas.
                    </div>
                </div>
                <div class="col-md-8">
                    <br><br>
                    <h3>Aprovar atividade ?</h3>
                    <div class="row">
                        <div class="col-md-10">
                            <select class="custom-select" id="status" style="font-size: 1.2em;" name="status1">
                                <option selected value="Em análise" {{($dados->status == "Em análise") ? 'selected' : ''}}>Em análise</option>
                                <option value="Deferido" {{($dados->status == "Deferido") ? 'selected' : ''}}>Sim</option>
                                <option value="Indeferido" {{($dados->status == "Indeferido") ? 'selected' : ''}}>Não</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary" style="font-size: 1.4em;" type="submit">Salvar</button>
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <br>

            <input type="hidden" name="id" value="{{$dados->id}}">

            <div class="row">
                <div class="col-md-4 div-hidden">
                    <input type="text" value="Pesquisa" class="form-control" placeholder="" id="inlineFormCustomSelect" name="tipo1">
                    @error('tipo1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <label for="nameproject" class="text-label">Nome do Projeto</label>
                    <input type="text" class="form-control" placeholder="" id="nameproject" name="nome_projeto1" value="{{$dados->nome_projeto}}" readonly>
                    @error('nome_projeto1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="hours" class="text-label">Carga-Horária <span class="badge badge-pill badge-danger">Definir</span></label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria1" value="{{$dados->carga_horaria}}">
                    @error('carga_horaria1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="start" class="text-label">Data Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio1" value="{{$dados->dt_inicio}}" readonly>
                    @error('dt_inicio1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="finish" class="text-label">Data Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim1" value="{{$dados->dt_fim}}" readonly>
                    @error('dt_fim1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label class="text-label" for="customFileLang">Arquivo</label>
                    <input type="text" class="form-control" id="customFileLang" lang="pt" name="customFileLang1" value="{{$dados->customFileLang}}" readonly>
                    @error('customFileLang1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <br>
                    <button type="button" class="btn btn-primary"><a class="button-delete-custom" target="_blank" href="{{asset('storage/'.$dados->customFileLang)}}">Abrir</a></button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-1 div-hidden"><!-- div para pegar usuario -->
                    <input type="number" type="hidden" class="form-control" placeholder="" id="usuario_id" name="usuario_id1" value="{{$dados->usuario_id}}">
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="lim_carga_h" name="lim_carga_h" value="{{$dados->lim_carga_h}}">
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="horas_aprovadas" name="horas_aprovadas1" value="{{$dados->horas_aprovadas}}">
                </div>
            </div>

            
        </form>
    </div>
</div>

@endsection
