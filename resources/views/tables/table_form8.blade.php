<br><br><h4 class="submit_title">Vonluntariado ou Ação Social</h4>

<div class="d-flex justify-content-end mb-3">
    <div class="p-2 bd-highlight">C.H. Máxima: {{$chMaxF8}}</div>
    <span class="border-right"></span>
    <div class="p-2 bd-highlight">C.H. Aprovada: {{$limTF8}}</div>
    <span class="border-right"></span>
    <div class="p-2 bd-highlight">C.H. Restante: {{$chMaxF8-$limTF8}}</div>
</div>

<div class="table-responsive">

    <table class="table table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>CARGA H.</th>
                <th>NOME DA ATIVIDADE</th>
                <th>DATA</th>
                <th>STATUS</th>
                <th>ARQUIVO</th>
                <th>C.H. CONTABILIZADA</th>
                <th>C.H. APROVADA</th>
                <th>OPÇÕES</th>
            </tr>
        </thead>


        @forelse ($dadosForm8 as $dado)
            @if ($dado->usuario_id == $authorized && $dado->status == "Indeferido")
                <tr>
                    <td>{{$dado->carga_horaria}}</td>
                    <td>{{$dado->nome_atividade}}</td>
                    <td>
                        <?php echo date('d/m/Y', strtotime($dado->dt_atividade)); ?>
                    </td>
                    <td>{{$dado->status}}</td>
                    <td>
                        <button type="button" class="btn btn-primary"><a class="button-delete-custom" target="_blank" href="{{asset('storage/'.$dado->customFileLang)}}">
                            Abrir</a>
                        </button>
                    </td>
                    <td>{{$dado->lim_carga_h}}</td>
                    <td>{{$dado->horas_aprovadas}}</td>
                    <td>
                        @can('administrador')
                            <button type="button" class="btn btn-primary"><a class="button-delete-custom" title="Editar" href="{{url('atividades/form8/editar/'.$dado->id.'/'.$dado->usuario_id)}}">
                                Avaliar</a>
                            </button>
                        @endcan
                        @can('normal')
                            <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado8{{$dado->id}}">
                                Excluir
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="ExemploModalCentralizado8{{$dado->id}}" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">{{$dado->nome_atividade}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    Deseja excluir esta atividade ?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                    <button type="button" class="btn btn-primary"><a class="button-delete-custom" title="Deletar" href="{{url('atividades/form8/excluir/'.$dado->id)}}">Sim</a></button>
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
