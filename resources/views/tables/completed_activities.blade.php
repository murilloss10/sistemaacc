<div class="table-responsive">

    <table class="table table table-striped table-bordered" id="tableAllActivities" style="width:100%"> <!-- adicionar a classe: sortable  para criar uma tabela que ordena de acordo com 
    com a coluna selecionada-->

    
        <thead>
            @can('normal')
                <tr style="width: 100%;">
                    <th style="width: 55%;">Especificação da atividade</th>
                    <th style="width: 15%;">Data/Período</th>
                    <th style="width: 15%;">Carga Horária Contabilizada</th>
                    <th style="width: 10%;">Situação</th>
                </tr>
            @endcan

            @can('administrador')
                <tr style="width: 100%;">
                    <th style="width: 55%;">Especificação da atividade</th>
                    <th style="width: 10%;">Data/Período</th>
                    <th style="width: 10%;">Carga Horária Contabilizada</th>
                    <th style="width: 10%;">Situação</th>
                    <th style="width: 10%;">Certificado</th>
                </tr>
            @endcan
        </thead>

        <tbody>

            @if ( $allActivityApproved != '')
                @forelse (json_decode($allActivityApproved) as $key => $item)
                    @can('normal')
                        <tr>
                            <td>{{ $item->activity_name }}</td>
                            <td>{{ $item->period }}</td>
                            <td>{{ $item->hours }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                    @endcan

                    @can('administrador')
                        <tr>
                            <td>{{ $item->activity_name }}</td>
                            <td>{{ $item->period }}</td>
                            <td>{{ $item->hours }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <button type="button" class="btn btn-primary"><a class="button-delete-custom" target="_blank" href="{{asset('storage/'.$item->customFileLang)}}">
                                    Abrir</a>
                                </button>
                            </td>
                        </tr>
                    @endcan

                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">Sem atividades aprovadas.</td>
                    </tr>
                @endforelse    
            @else
                <tr>
                    <p>Sem atividades aprovadas.</p>
                </tr>
            @endif
        
        </tbody>


    </table>


</div>