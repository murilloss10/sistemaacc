
<div>
    <div class="container">

        <form action="{{url('submeter/form2/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="card" style="width: 17rem;">
                    <div class="card-header">
                        <h4>C.H. Parcial: Artigo</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF2}} horas</li>
                        <li class="list-group-item"><strong>Submetida:</strong> {{$limTF2}} horas</li>
                        <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF2-$limTF2}} horas</li>
                    </ul>
                    <div class="card-footer text-muted">
                        Após atingido o limite de horas, as próximas atividades serão zeradas.
                    </div>
                </div>
                <div class="card" style="width: 17rem;">
                    <div class="card-header">
                        <h4>C.H. Parcial: Resumo</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF15}} horas</li>
                        <li class="list-group-item"><strong>Submetida:</strong> {{$limTF15}} horas</li>
                        <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF15-$limTF15}} horas</li>
                    </ul>
                    <div class="card-footer text-muted">
                        Após atingido o limite de horas, as próximas atividades serão zeradas.
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="inlineFormCustomSelect" class="text-label">Tipo</label>
                    <select class="custom-select" id="inlineFormCustomSelect" name="tipo2">
                      <option selected value="">Selecione o tipo</option>
                      <option value="Artigo">Artigo</option>
                      <option value="Resumo">Resumo</option>
                    </select>
                    @error('tipo2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="titleAR" class="text-label">Título</label>
                    <input type="text" class="form-control" placeholder="" id="titleAR" name="titulo2">
                    @error('titulo2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="whenPub" class="text-label">Onde foi publicado</label>
                    <input type="text" class="form-control" placeholder="Nome da Revista ou Evento" id="whenPub" name="onde_pub2">
                    @error('onde_pub2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7">
                    <label for="dateEvent" class="text-label">Data</label>
                    <input type="date" class="form-control" placeholder="" id="dateEvent" name="dt_pub2">
                    @error('dt_pub2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status2">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id2">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang2" for="customFileLang2"></label>
                    <input type="file" class="custom-file-input" id="customFileLang2" lang="pt" name="customFileLang2">
                    @error('customFileLang2')
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
