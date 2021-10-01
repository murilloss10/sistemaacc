@extends('index')

<title>Avaliar Atividade | SAACC</title>

@section('main-content')

<div>
    <div class="container title-far-top">

        <form action="{{url('editar/form13/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h4>Carga Horária Parcial</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF13}} horas</li>
                        <li class="list-group-item"><strong>Submetida:</strong> {{$limTF13}} horas</li>
                        <li class="list-group-item"><strong>Aprovada:</strong> {{$aproTF13}} horas</li>
                        <li class="list-group-item"><strong>Restante:</strong>
                            @if ( $chMaxF13-$limTF13 < 0 )
                                0 horas
                            @else
                                {{$chMaxF13-$aproTF13}} horas
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
                            <select class="custom-select" id="status" style="font-size: 1.2em;" name="status13">
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
                <div class="col-md-8">
                    <label for="namemar" class="text-label">Nome da Maratona</label>
                    <input type="text" class="form-control" id="namemar" name="nome_maratona13" value="{{$dados->nome_maratona}}" readonly>
                    @error('nome_maratona13')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="datte" class="text-label">Data</label>
                    <input type="date" class="form-control" id="datte" name="dt_maratona13" value="{{$dados->dt_maratona}}" readonly>
                    @error('dt_maratona13')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-1 div-hidden"><!-- div para pegar usuario -->
                    <input type="number" type="hidden" class="form-control" placeholder="" id="usuario_id" name="usuario_id13" value="{{$dados->usuario_id}}">
                </div>
                <div class="col-md-6">
                    <label class="text-label" for="customFileLang">Arquivo</label>
                    <input type="text" class="form-control" id="customFileLang" lang="pt" name="customFileLang13" value="{{$dados->customFileLang}}" readonly>
                    @error('customFileLang13')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <br>
                    <button type="button" class="btn btn-primary"><a class="button-delete-custom" target="_blank" href="{{asset('storage/'.$dados->customFileLang)}}">Abrir</a></button>
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="lim_carga_h" name="lim_carga_h" value="{{$dados->lim_carga_h}}">
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="horas_aprovadas" name="horas_aprovadas13" value="{{$dados->horas_aprovadas}}">
                </div>
            </div>

        </form>
    </div>
</div>


@endsection
