<div>
    <div class="container"> 

        <form action="{{url('submeter/form13/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4>Carga Horária Parcial</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF13}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF13}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF13-$limTF13}} horas</li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="namemar" class="text-label">Nome da Maratona</label>
                    <input type="text" class="form-control" placeholder="" id="namemar" name="nome_maratona13">
                    @error('nome_maratona13')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <label for="datte" class="text-label">Data</label>
                    <input type="date" class="form-control" placeholder="" id="datte" name="dt_maratona13">
                    @error('dt_maratona13')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status13">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id13">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="file" class="custom-file-input" id="customFileLang13" lang="pt" name="customFileLang13">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang13" for="customFileLang13"></label>
                    @error('customFileLang13')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>
