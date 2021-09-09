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

    <img src="{{ asset('img/cabecalho.jpg') }}" style="width: 100%;">
    <h6 class="title_p">DOCUMENTOS PARA COMPROVAÇÃO DAS ATIVIDADES COMPLEMENTARES</h6><br>
    <p style="text-align: justify;">Eu, {{$dados->name}}, acadêmico(a) regularmente matriculado(a) no Curso de Bacharelado em {{$dados->course}}, CPF
        _________________, matrícula ______________, venho requerer o aproveitamento das atividades abaixo especificadas e
        respectivos certificados e/ou declarações para compor a carga horária das Atividades Complementares.</p>
    <br>

    <table class="table table-bordered" id="tableAllActivities">
        
        <thead>
            <tr>
                <th style="width: 55%;">Especificação da atividade</th>
                <th style="width: 15%;">Data/Período</th>
                <th style="width: 30%;">Carga Horária Contabilizada</th>
            </tr>
        </thead>

        <tbody>

            @if ( $allActivityApproved_json != '')
                @forelse (json_decode($allActivityApproved_json) as $key => $item)
                    <tr>
                        <td>{{ $item->activity_name }}</td>
                        <td>{{ $item->period }}</td>
                        <td>{{ $item->hours }}</td>
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