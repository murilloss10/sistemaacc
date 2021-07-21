@extends('index')

@section('main-content')

<div>
    <div class="container title-far-top">

        <form action="{{url('editar/form2/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h4>Carga Horária Parcial</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF15}} horas</li>
                        <li class="list-group-item"><strong>Submetida:</strong> {{$limTF15}} horas</li>
                        <li class="list-group-item"><strong>Aprovada:</strong> {{$aproTF15}} horas</li>
                        <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF15-$aproTF15}} horas</li>
                    </ul>
                    <div class="card-footer text-muted">
                        Após atingido o limite de horas, as próximas atividades serão zeradas.
                    </div>
                </div>
                <div class="col-md-8">
                    <br><br>
                    <!--<label class="text-label" for="status">Aprovar atividade ?</label>-->
                    <h3>Aprovar atividade ?</h3>
                    <div class="row">
                        <div class="col-md-10">
                            <select class="custom-select" id="status" style="font-size: 1.2em;" name="status2">
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
                <div class="col-md-2">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <input type="text" class="form-control" placeholder="" id="tipo2" name="tipo2" value="{{$dados->tipo}}" readonly>
                    @error('tipo2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-7">
                    <label for="titleAR" class="text-label">Título</label>
                    <input type="text" class="form-control" placeholder="" id="titleAR" name="titulo2" value="{{$dados->titulo}}" readonly>
                    @error('titulo2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label for="dateEvent" class="text-label">Data</label>
                    <input type="date" class="form-control" id="dateEvent" name="dt_pub2"  value="{{$dados->dt_pub}}" readonly>
                    @error('dt_pub2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="whenPub" class="text-label">Onde foi publicado</label>
                    <input type="text" class="form-control" placeholder="Nome da Revista ou Evento" id="whenPub" name="onde_pub2" value="{{$dados->onde_pub}}" readonly>
                    @error('onde_pub2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label class="text-label" for="customFileLang">Arquivo</label>
                    <input type="text" class="form-control" id="customFileLang" lang="pt" name="customFileLang2" value="{{$dados->customFileLang}}" readonly>
                    @error('customFileLang2')
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
                    <input type="number" class="form-control"  id="usuario_id" name="usuario_id2" value="{{$dados->usuario_id}}" >
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="lim_carga_h" name="lim_carga_h" value="{{$dados->lim_carga_h}}">
                </div>
                <div class="col-md-1 div-hidden"><!-- div para pegar limite -->
                    <input type="number" type="hidden" class="form-control" id="horas_aprovadas" name="horas_aprovadas2" value="{{$dados->horas_aprovadas}}">
                </div>
            </div>
        </form>
    </div>
</div>

<!--
<script src=""></script>-->


@endsection
