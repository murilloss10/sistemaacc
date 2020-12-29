<br><br><h4 class="submit_title">Representação Estudantil: Conselhos, Colegiados e DA</h4>

<div class="d-flex justify-content-end mb-3">
    <div class="p-2 bd-highlight">C.H. Máxima: {{$chMaxF5}}</div>
    <span class="border-right"></span>
    <div class="p-2 bd-highlight">C.H. Total: {{$limTF5}}</div>
    <span class="border-right"></span>
    <div class="p-2 bd-highlight">C.H. Restante: {{$chMaxF5-$limTF5}}</div>
</div>

<div class="table-responsive">

    <table class="table table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>TIPO</th>
                <th>QUANT. SEMESTRES</th>
                <th>NOME</th>
                <th>DATA INÍCIO</th>
                <th>DATA FIM</th>
                <th>STATUS</th>
                <th>ARQUIVO</th>
                <th>C.H. FINAL</th>
                <th>OPÇÕES</th>
            </tr>
        </thead>


        @forelse ($dadosForm5 as $dado)
            @if ($dado->usuario_id == $authorized)
                <tr>
                    <td>{{$dado->tipo}}</td>
                    <td>{{$dado->quant_semestres}}</td>
                    <td>{{$dado->nome_c}}</td>
                    <td>
                        <?php echo date('d/m/Y', strtotime($dado->dt_inicio)); ?>
                    </td>
                    <td>
                        <?php echo date('d/m/Y', strtotime($dado->dt_fim)); ?>
                    </td>
                    <td>{{$dado->status}}</td>
                    <td>
                        <button type="button" class="btn btn-primary"><a class="button-delete-custom" target="_blank" href="{{url('atividades/arquivos/'.$dado->customFileLang)}}">
                            Abrir</a>
                        </button>
                    </td>
                    <td>{{$dado->lim_carga_h}}</td>
                    <td>
                        @can('administrador')
                            <button type="button" class="btn btn-primary"><a class="button-delete-custom" title="Editar" href="{{url('atividades/form5/editar/'.$dado->id.'/'.$dado->usuario_id)}}">
                                Editar</a>
                            </button>
                        @endcan
                        @can('normal')
                            <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado5{{$dado->id}}">
                                Excluir
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="ExemploModalCentralizado5{{$dado->id}}" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">{{$dado->nome_c}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    Deseja excluir esta atividade ?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                    <button type="button" class="btn btn-primary"><a class="button-delete-custom" title="Deletar" href="{{url('atividades/form5/excluir/'.$dado->id)}}">Sim</a></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endcan
                    </td>
                </tr>
            @else

            @endif


        @empty

            <tr>
                <td colspan="14" style="text-align: center;">Sem atividades cadastradas.</td>
            </tr>

        @endforelse

    </table>

</div>
