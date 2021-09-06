@extends('index')

@section('main-content')

<div>
    <div class="container title-far-top">

        <form action="{{url('editar/form10/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h4>Carga Horária Parcial</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF10}} horas</li>
                        <li class="list-group-item"><strong>Submetida:</strong> {{$limTF10}} horas</li>
                        <li class="list-group-item"><strong>Aprovada:</strong> {{$aproTF10}} horas</li>
                        <li class="list-group-item"><strong>Restante:</strong>
                            @if ( $chMaxF10-$limTF10 < 0 )
                                0 horas
                            @else
                                {{$chMaxF10-$aproTF10}} horas
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
                            <select class="custom-select" id="status" style="font-size: 1.2em;" name="status10">
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
                <div class="col-md-3">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <input type="text" class="form-control" id="tipo10" name="tipo10" value="{{$dados->tipo}}" readonly>
                    @error('tipo10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="namedisc" class="text-label">Nome da Disciplina</label>
                    <input type="text" class="form-control" id="namedisc" name="nome_disc10" value="{{$dados->nome_disc}}" readonly>
                    @error('nome_disc10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="hours" class="text-label">Carga-Horária <span class="badge badge-pill badge-danger">Definir</span></label>
                    <input type="number" class="form-control" id="hours" name="carga_horaria10" value="{{$dados->carga_horaria}}">
                    @error('carga_horaria10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" id="start" name="dt_inicio10" value="{{$dados->dt_inicio}}" readonly>
                    @error('dt_inicio10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" id="finish" name="dt_fim10" value="{{$dados->dt_fim}}" readonly>
                    @error('dt_fim10')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label class="text-label" for="customFileLang">Arquivo</label>
                    <input type="text" class="form-control" id="customFileLang" lang="pt" name="customFileLang10" value="{{$dados->customFileLang}}" readonly>
                    @error('customFileLang10')
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
                    <input type="number" type="hidden" class="form-control" placeholder="" id="usuario_id" name="usuario_id10" value="{{$dados->usuario_id}}">
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="lim_carga_h" name="lim_carga_h" value="{{$dados->lim_carga_h}}">
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="horas_aprovadas" name="horas_aprovadas10" value="{{$dados->horas_aprovadas}}">
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
