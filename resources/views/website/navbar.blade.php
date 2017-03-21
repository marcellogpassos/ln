<div class="navbar-fixed">
    <nav role="navigation">
        <div class="nav-wrapper container">

            <a id="logo-container" href="{{ url('/index') }}" class="brand-logo">
                <img class="brand-a" src="{{ asset('img/index/brand-logo.png') }}" width="96px" alt="{{ env('NOME_ESTABELECIMENTO') }}">
                <img class="brand-b" src="{{ asset('img/index/brand-logo-b.png') }}" width="96px" alt="{{ env('NOME_ESTABELECIMENTO') }}" style="display: none">
            </a>

            <ul class="right hide-on-med-and-down">
                <li><a href="#sobre">Sobre n&oacute;s</a></li>
                <li><a href="#servicos">Servi&ccedil;os</a></li>
                <li><a href="#equipe">Equipe</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="{{ url('/register') }}" class="call-to-action">Cadastre-se</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="#sobre">Sobre n&oacute;s</a></li>
                <li><a href="#servicos">Servi&ccedil;os</a></li>
                <li><a href="#equipe">Equipe</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="{{ url('/register') }}" class="call-to-action">Cadastre-se</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

        </div>
    </nav>
</div>