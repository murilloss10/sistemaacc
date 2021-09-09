<div class="table-responsive">

    <table class="table table table-striped table-bordered" id="tableAllActivities" style="width:100%"> <!-- adicionar a classe: sortable  para criar uma tabela que ordena de acordo com 
    com a coluna selecionada-->

    
        <thead>
            <tr style="width: 100%;">
                <th hidden data-sorter="datesSorter">Criação</th>
                <th style="width: 5%;">Nº</th>
                <th style="width: 55%;">Especificação da atividade</th>
                <th style="width: 15%;">Data/Período</th>
                <th style="width: 15%;">Carga Horária Contabilizada</th>
                <th style="width: 10%;">Situação</th>
            </tr>
        </thead>

        <tbody>

            @if ( $allActivityApproved != '')
                @forelse (json_decode($allActivityApproved) as $key => $item)
                    <tr>
                        <td> </td>
                        <td>{{ $item->activity_name }}</td>
                        <td>{{ $item->period }}</td>
                        <td>{{ $item->hours }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
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

    <script>

        var table = document.getElementsByTagName('tbody')[0],
        rows = table.getElementsByTagName('tr'),
        text = 'textContent' in document ? 'textContent' : 'innerText';

        for (var i = 0, len = rows.length; i < len; i++) {
        rows[i].children[0][text] = i + rows[i].children[0][text];
        }

    </script>


</div>