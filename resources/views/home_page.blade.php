@extends('index')

<title>Página Inicial | SAACC</title>

@section('main-content')

    <br><br><h2 class="submit_title title-far-top">Seja Bem Vindo, {{$nameUser}}!</h2><br><br>

    @can('normal')

        @if ($chAproT >= $chNecessaria)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Você completou a carga horária mínima, gere o documento com a relação de atividades e entre em contato com o coordenador responsável pelas AACC. <br><a class="" href="{{url('atividades/aprovadas')}}">Clique aqui.</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        @else
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Assim que você completar a carga horária mínima, gere o documento com a relação de atividades e entre em contato com o coordenador responsável pelas AACC.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        @endif

        <?php $sucess = "atividade" ?>
        
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="content-page">
                <div class="content">

                    <div class="row">
                        <div class="col-12">
                            <div class="card widget-inline">
                                <div class="card-body p-0">
                                    <div class="row no-gutters">

                                        <div class="col-sm-6 col-xl-2">
                                            <a href="{{url('submeter/'.$sucess)}}" class="link-submit">
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
                                                    <i class="fas fa-hourglass" style="font-size: 34px;"></i>
                                                    <h3><span>{{$chAproT}}</span></h3>
                                                    <p class="text-muted font-15 mb-0">Carga horária aprovada</p>
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
                                                    <h3><span>{{round($percTotal, 2)}}</span></h3>
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

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h4 class="header-title mb-3">Últimas atividades
                                        
                                        <button type="button" class="btn btn-primary float-right"><a class="button-delete-custom" title="Últimas atividades" href="{{url('atividades/aprovadas')}}">
                                            Mostrar atividades aprovadas</a>
                                        </button>
                                    
                                    </h4>

                                    <div class="table-responsive" style="max-height: 260px;">

                                        @include('tables.all_activities')

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
                        <th>CURSO</th>
                        <th>C.H. APROVADA</th>
                        <th>ACESSAR</th>
                        <th></th>
                    </tr>
                </thead>
                @forelse ($listUsers as $dado) 
                    @if ($dado->type != 'administrador')
                        <tr>
                            <td>{{$dado->name}}</td>                           
                            <td>{{$dado->course}}</td>
                            <td>{{$dado->approved_hours}}</td>
                            <td>
                                <button class="btn btn-primary"  style="font-size: 14px;" type="button"><a class="button-delete-custom" title="Pendentes" href="{{url('atividades/lista/'.$dado->id)}}"><i class="fas fa-mouse" style="font-size: 14px;"></i> ATIVIDADES PENDENTES</a></button>
                                <button class="btn btn-primary"  style="font-size: 14px;" type="button"><a class="button-delete-custom" title="Aprovadas" href="{{url('atividades/aprovadas/lista/'.$dado->id)}}"><i class="fas fa-mouse" style="font-size: 14px;"></i> ATIVIDADES APROVADAS</a></button>
                            </td>
                            <td>
                                @if ($dado->approved_hours > 140)
                                    <form action="{{url('atividades/documento-final/'.$dado->id)}}" method="GET">
                                        <input hidden type="number" value="{{$dado->id}}" class="form-control" placeholder="" id="docfinal" name="docfinal">
                                        <button class="btn btn-primary"  style="font-size: 14px;" type="submit"><i class="fas fa-file-pdf" style="font-size: 14px;"></i> DOC. FINAL</button>
                                    </form>
                                @endif
                            </td>
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


@endsection
