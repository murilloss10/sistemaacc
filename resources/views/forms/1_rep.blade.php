
<div>
    <div class="container">

        <form action="{{url('submeter/form1/salvar')}}" method="POST" class="col-md-12" enctype="multipart/form-data">

            @csrf

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h4>Carga Horária Parcial</h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Limite:</strong> {{$chMaxF1}} horas</li>
                    <li class="list-group-item"><strong>Submetida:</strong> {{$limTF1}} horas</li>
                    <li class="list-group-item"><strong>Restante:</strong> {{$chMaxF1-$limTF1}} horas</li>
                </ul>
                <div class="card-footer text-muted">
                    Após atingido o limite de horas, as próximas atividades serão zeradas.
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4 div-hidden">
                    <input type="text" value="Pesquisa" class="form-control" placeholder="" id="inlineFormCustomSelect" name="tipo1">
                    @error('tipo1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="hours" class="text-label">Carga-Horária (conforme certificado)</label>
                    <input type="number" class="form-control" placeholder="" id="hours" name="carga_horaria1">
                    @error('carga_horaria1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="nameproject" class="text-label">Nome do Projeto</label>
                    <input type="text" class="form-control" placeholder="" id="nameproject" name="nome_projeto1">
                    @error('nome_projeto1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="start" class="text-label">Início</label>
                    <input type="date" class="form-control" placeholder="" id="start" name="dt_inicio1">
                    @error('dt_inicio1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="finish" class="text-label">Fim</label>
                    <input type="date" class="form-control" placeholder="" id="finish" name="dt_fim1">
                    @error('dt_fim1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <div class="row div-hidden"><!-- div para status do arquivo -->
                <div class="col-md-4">
                    <input type="text" value="Em análise" class="form-control" placeholder="" id="status" name="status1">
                </div>
            </div>
            <div class="row div-hidden" ><!-- div para pegar usuario -->
                <div class="col-md-4">
                    <input type="number" value="{{$idUser}}" class="form-control" placeholder="" id="usuario_id" name="usuario_id1">
                </div>
            </div>

            <!-- revisar name's e ordem dos name's-->
            <div class="row">
                <div class="col-md-8">
                    <input type="file" class="custom-file-input" id="customFileLang1" lang="pt" name="customFileLang1">
                    <label class="custom-file-label textNameFileSelected" id="customFileLang1" for="customFileLang1"></label>
                    @error('customFileLang1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row div-hidden" ><!-- div -->
                <div class="col-md-4">
                    <input type="number" value="0" class="form-control" placeholder="" id="horas_aprovadas" name="horas_aprovadas1">
                </div>
            </div>

            <div class="row div-hidden" ><!-- div -->
                <div class="col-md-4">
                    <input type="text" value="Não" class="form-control" placeholder="" id="aprovacao" name="aprovacao1">
                </div>
            </div>

            <br><button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</div>

<!-- Aqui o script que colei em submit.blade.php
<script src=""></script>-->

