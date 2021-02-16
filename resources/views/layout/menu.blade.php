

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">SAACC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php $sucess = "atividade" ?>
    
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Início <span class="sr-only">(current)</span></a>
            </li>
            @can('normal')
                <li class="nav-item">
                    <a class="nav-link" href="{{url('submeter/'.$sucess)}}">Submeter Atividade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('atividades')}}">Contabilização</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('atividades/aprovadas')}}">Atividades Aprovadas</a>
                </li>
            @endcan
        </ul>

        <ul class="navbar-nav navbar-text">
            <li class="nav-item"><a class="nav-link">{{Auth::user()->name}}</a></li>
        </ul>
        <br>
        <ul class="navbar-nav navbar-text">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" title="Sair"><i class="fas fa-sign-out-alt"></i></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </div>
</nav>
