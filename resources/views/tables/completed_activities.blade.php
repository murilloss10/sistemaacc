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
            
        
        @foreach ($tdForm1 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td>{{$atv->id}}</td>
                <td>{{$atv->tipo}}: {{$atv->nome_projeto}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm2 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->tipo}}: {{$atv->titulo}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm3 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->tipo}}: {{$atv->nome_evento}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm4 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>Premiação: {{$atv->nome_evento}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_evento)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm5 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->tipo}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm6 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>Participação em Empresa Júnior</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm7 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>Estágio Extracurricular: {{$atv->nome_inst}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm8 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->nome_atividade}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_atividade)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm9 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->nome_proj}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_proj)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm10 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->tipo}}: {{$atv->nome_disc}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm11 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>Visita Técnica: {{$atv->local}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_local)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm12 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->tipo}}: {{$atv->nome_curso}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm13 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->nome_maratona}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_maratona)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else

            @endif
        @endforeach

        @foreach ($tdForm14 as $atv)
            @if ($atv->usuario_id == $authorized && $atv->status == "Deferido")
            <tr>
                <td hidden>{{$atv->created_at}}</td>
                <td></td>
                <td>{{$atv->tipo}}: {{$atv->nome_projeto}}</td>
                <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                <td>{{$atv->horas_aprovadas}}</td>
                <td>{{$atv->status}}</td>
            </tr>
            @else
                
            @endif
        @endforeach
        
        </tbody>


    </table>

    <script>
        $(document).ready(function(){
            
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("tableAllActivities");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[0];
                    y = rows[i + 1].getElementsByTagName("TD")[0];
                    //check if the two rows should switch place:
                    if (Number(x.innerHTML) < Number(y.innerHTML)) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }

                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
                
            }


        });
    </script>


</div>