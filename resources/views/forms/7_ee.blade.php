<div>
    <div class="container">

        <form action="{{url('submeter/form7/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4>Carga Horária Parcial</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF7}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF7}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF7-$limTF7}} horas</li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="nameinst" class="text-label">Nome da Instituição</label>
                    <input type="text" class="form-control" placeholder="" id="nameinst" name="nome_inst7">
                    @error('nome_inst7')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio7">
                    @error('dt_inicio7')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim7">
                    @error('dt_fim7')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status7">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id7">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang7" for="customFileLang7"></label>
                    <input type="file" class="custom-file-input" id="customFileLang7" lang="pt" name="customFileLang7">
                    @error('customFileLang7')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>
