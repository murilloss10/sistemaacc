<div class="table-responsive">

    <table class="table table table-striped table-bordered" id="tableAllActivities" style="width:100%">
    
        <thead>
            <tr style="width: 100%;">
                <th style="width: 65%;">Especificação da atividade</th>
                <th style="width: 11%;">Data/Período</th>
                <th style="width: 13%;">Carga Horária Contabilizada</th>
                <th style="width: 11%;">Status</th>
            </tr>
        </thead>

        <tbody>

            @if ( $allActivityApproved != '')
                @forelse (json_decode($allActivityApproved) as $key => $item)
                    <tr>
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


</div>