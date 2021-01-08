@extends('index')

@section('main-content')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Form1', 50],
                ['Form2', 0],
                ['Form3', 0],
                ['Form4', 0],
                ['Form5', 0]
                ]);

            var options = {
                is3D: true,
                'legend':'bottom',
                chartArea:{left:0,top:0,right:0,height:'100%',weight:'100%'}
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>


    <br><br><h2 class="submit_title title-far-top">Seja Bem Vindo, {{$nameUser}}!</h2><br><br>


    @can('normal')
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="content-page">
                <div class="content">

                    <div class="row">
                        <div class="col-12">
                            <div class="card widget-inline">
                                <div class="card-body p-0">
                                    <div class="row no-gutters">

                                        <div class="col-sm-6 col-xl-4">
                                            <a href="{{url('submeter')}}" class="link-submit">
                                                <div class="card shadow-none m-0 height-small-card-dashboard">
                                                    <div class="card-body text-center">
                                                        <i class="fas fa-upload" style="font-size: 54px;"></i>
                                                        <h3><span></span></h3>
                                                        <p class="text-muted font-15 mb-0">Submeter atividade</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-sm-6 col-xl-2">
                                            <div class="card shadow-none m-0 border-left height-small-card-dashboard">
                                                <div class="card-body text-center">
                                                    <i class="fas fa-hourglass-end" style="font-size: 34px;"></i>
                                                    <h3><span>{{$chNecessaria}}</span></h3>
                                                    <p class="text-muted font-15 mb-0">Carga horária mínima</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-2">
                                            <div class="card shadow-none m-0 border-left height-small-card-dashboard">
                                                <div class="card-body text-center">
                                                    <i class="fas fa-hourglass-half" style="font-size: 34px;"></i>
                                                    <h3><span>{{$chTotal}}</span></h3>
                                                    <p class="text-muted font-15 mb-0">Horas submetidas</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-2">
                                            <div class="card shadow-none m-0 border-left height-small-card-dashboard">
                                                <div class="card-body text-center">
                                                    <i class="fas fa-hourglass-start" style="font-size: 34px;"></i>
                                                    <h3><span>{{$chRestante}}</span></h3>
                                                    <p class="text-muted font-15 mb-0">Horas restantes</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-2">
                                            <div class="card shadow-none m-0 border-left height-small-card-dashboard">
                                                <div class="card-body text-center">
                                                    <i class="fas fa-percent" style="font-size: 34px;"></i>
                                                    <h3><span>{{$percTotal}}</span></h3>
                                                    <p class="text-muted font-15 mb-0">Concluído</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title mb-4">Project Status</h4>

                                    <div id="piechart_3d" ></div>

                                    <div class="row text-center mt-2 py-2">
                                        <div class="col-4">
                                            <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                                            <h3 class="font-weight-normal">
                                                <span>64%</span>
                                            </h3>
                                            <p class="text-muted mb-0">Completed</p>
                                        </div>
                                        <div class="col-4">
                                            <i class="mdi mdi-trending-down text-primary mt-3 h3"></i>
                                            <h3 class="font-weight-normal">
                                                <span>26%</span>
                                            </h3>
                                            <p class="text-muted mb-0"> In-progress</p>
                                        </div>
                                        <div class="col-4">
                                            <i class="mdi mdi-trending-down text-danger mt-3 h3"></i>
                                            <h3 class="font-weight-normal">
                                                <span>10%</span>
                                            </h3>
                                            <p class="text-muted mb-0"> Behind</p>
                                        </div>
                                    </div>
                                    <!-- end row-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">

                                    <a href="{{url('atividades')}}" class="link-submit"><h4 class="header-title mb-3">Atividades</h4></a>

                                    <p>Últimas submetidas</p>

                                    <div class="table-responsive" style="max-height: 260px;">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">{{$lastIDF1->tipo ?? NULL}}</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF1->nome_projeto ?? NULL}}</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Carga H.</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF1->lim_carga_h ?? NULL}}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">{{$lastIDF2->tipo ?? NULL}}</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF2->titulo ?? NULL}}</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Carga H.</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF2->lim_carga_h ?? NULL}}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">{{$lastIDF3->tipo ?? NULL}}</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF3->nome_evento ?? NULL}}</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Carga H.</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF3->lim_carga_h ?? NULL}}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">{{$lastIDF5->tipo ?? NULL}}</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF5->nome_c ?? NULL}}</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Carga H.</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF5->lim_carga_h ?? NULL}}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">{{$lastIDF8->tipo ?? NULL}}</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF8->nome_atividade ?? NULL}}</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Carga H.</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF8->lim_carga_h ?? NULL}}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">{{$lastIDF9->tipo ?? NULL}}</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF9->nome_proj ?? NULL}}</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Carga H.</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF9->lim_carga_h ?? NULL}}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="text-muted font-13">{{$lastIDF10->tipo ?? NULL}}</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF10->nome_disc ?? NULL}}</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Carga H.</span>
                                                        <h5 class="font-14 mt-1 font-weight-normal">{{$lastIDF10->lim_carga_h ?? NULL}}</h5>
                                                    </td>
                                                </tr>
<<<<<<< HEAD

=======
>>>>>>> 6078c2484a14760f1d36dd043559305a6770e8d8

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->

                </div>

            </div>

        </div>
    @endcan


    @can('administrador')

        <h5>Lista de discentes: </h5>
        <div class="table-responsive">
            <table class="table table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>ACESSAR</th>
                    </tr>
                </thead>
                @forelse ($listUsers as $dado)
                    @if ($dado->type != 'administrador')
                        <tr>
                            <td>{{$dado->name}}</td>
                            <td><a href="{{url('atividades/lista/'.$dado->id)}}">ACESSAR ATIVIDADES</a></td>
                        </tr>
                    @else

                    @endif
                @empty

                    <tr>
                        <td colspan="14" style="text-align: center;">Sem alunos cadastrados.</td>
                    </tr>

                @endforelse
            </table>

        </div>

    @endcan


@endsection
