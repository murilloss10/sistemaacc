<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
</head>

<body>

    <style>
        .th-hidden{
            visibility: hidden;
        }
        body{
            padding-left: 5em;
            padding-right: 2.5em;
            text-align: center;
            line-height: 2;
        }
        .title_p{
            font: 100;
        }
        .table-bordered{
            line-height: 1;
            border: 1.2px;
        }
        .table-bordered thead{
            background-color: rgb(193, 196, 199);
            border: 1.2px;
        }

    </style>

    <img src="{{URL::asset('img/cabecalho.jpg')}}" style="width: 100%;" alt="">
    <h6 class="title_p">DOCUMENTOS PARA COMPROVAÇÃO DAS ATIVIDADES COMPLEMENTARES</h6><br>
    <p style="text-align: justify;">Eu, {{$dados->name}}, acadêmico(a) regularmente matriculado(a) no Curso de Bacharelado em {{$dados->course}}, CPF
        _________________, matrícula ______________, venho requerer o aproveitamento das atividades abaixo especificadas e
        respectivos certificados e/ou declarações para compor a carga horária das Atividades Complementares.</p>
    <br>
    <table class="table table-bordered" id="tableAllActivities"> <!-- adicionar a classe: sortable  para criar uma tabela que ordena de acordo com 
        com a coluna selecionada-->
    
        
        <thead>
            <tr>
                <th hidden data-sorter="datesSorter" class="th-hidden">Criação</th>
                <th style="width: 0%;" class="th-hidden">Nº</th>
                <th style="width: 55%;">Especificação da atividade</th>
                <th style="width: 15%;">Data/Período</th>
                <th style="width: 30%;">Carga Horária Contabilizada</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tdForm1 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden">{{$atv->id}}</td>
                            <td>{{$atv->tipo}}: {{$atv->nome_projeto}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm2 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->tipo}}: {{$atv->titulo}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm3 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->tipo}}: {{$atv->nome_evento}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm4 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>Premiação: {{$atv->nome_evento}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_evento)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm5 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->tipo}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm6 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>Participação em Empresa Júnior</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm7 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>Estágio Extracurricular: {{$atv->nome_inst}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm8 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->nome_atividade}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_atividade)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm9 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->nome_proj}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_proj)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>  
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm10 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->tipo}}: {{$atv->nome_disc}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm11 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>Visita Técnica: {{$atv->local}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_local)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm12 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->tipo}}: {{$atv->nome_curso}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm13 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden">{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->nome_maratona}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_maratona)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else

                @endif
            @endforeach

            @foreach ($tdForm14 as $atv)
                @if ($atv->usuario_id == $authorized)
                    @if ($atv->horas_aprovadas > 0)
                        <tr>
                            <td hidden class="th-hidden"    >{{$atv->created_at}}</td>
                            <td class="th-hidden"></td>
                            <td>{{$atv->tipo}}: {{$atv->nome_projeto}}</td>
                            <td><?php echo date('d/m/Y', strtotime($atv->dt_inicio)); ?> a <br><?php echo date('d/m/Y', strtotime($atv->dt_fim)); ?></td>
                            <td>{{$atv->horas_aprovadas}} hrs</td>
                        </tr>
                    @else
                        
                    @endif
                @else
                    
                @endif
            @endforeach
        
        </tbody>


    </table>
    
    <br>
    
    <p style="text-align: justify;">Declaro estar ciente das penalidades incorridas em caso de apresentação de documentos falsos e/ou que apresente irregularidades
    de qualquer natureza.</p>

    <br><br>

    <p>Pirapora (MG), _____ de _________________ de _________</p>
    <br>
    <p>_________________________________________</p>
    <p>Assinatura do Acadêmico(a)</p>

</body>


</html>