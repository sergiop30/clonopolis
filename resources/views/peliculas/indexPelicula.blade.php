<html>
  <head>
    <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peliculas</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/creative.min.css" rel="stylesheet">
  </head>

  <body id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Clonopolis</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Mis peliculas') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </li>
            <li class="nav-item">
              @if(Auth::user()->email == "sergiop@gmail.com" )
                <a class="nav-link js-scroll-trigger" href="{{ route('pelicula.create') }}">Catálogo</a>
              @else
                <a class="nav-link js-scroll-trigger" href="{{ route('pelicula.index') }}">Catálogo</a>
              @endif
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/sobre_nosotros') }}">Sobre nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <br>
            <br>
            <br>
            <br>
            <hr>
            <h1 class="text-uppercase">
              <h1 style="color: #e7a520; font-family:courier;">
              <strong>Clonopolis</strong>
            </h1>
           <hr>
          </div>
        </div>
      </div>
    </header>
    <div class="derecha" style= "background-image: url(../img/galaxy.png);">
        <ul id="menu2" compact>
          <a href="{{ url('/compra') }}"><img src="img/animales.jpg" alt="animales" width= 200px height=250px  title="Animales fantasticos" </a>

          <a href="{{ url('/sobre_nosotros') }}"><img src="img/aquaman.jpg" alt="aquaman" width= 200px height=250px title="Aquaman" /></a>

          <a href="{{ url('/sobre_nosotros') }}"><img src="img/el-primer-hombre-a-la-luna.jpg" alt="el-primer-hombre-a-la-luna" width= 200px height=250px  title="El primer hombre a la luna" /></a>

          <a href="{{ url('/sobre_nosotros') }}"><img src="img/venom.jpg" alt="venom" width= 200px height=250px  title="Venom" /></a>

          <a href="{{ url('/sobre_nosotros') }}"><img src="img/spiderman.jpg" alt="spiderman" width= 200px height=250px title="Spiderman" /></a>

          <a href="{{ url('/sobre_nosotros') }}"><img src="img/ralph.jpg" alt="ralph" width= 200px height=250px title="Ralph" /></a>
          <hr>
          
          <a href="{{ url('/sobre_nosotros') }}"><img src="img/queen.jpg" alt="queen" width= 200px height=250px title="Queen" /></a>
          <a href="{{ url('/sobre_nosotros') }}"><img src="img/matar-o-morir.jpg" alt="matar-o-morir" width= 200px height=250px title="Matar o morir" /></a>
          <a href="{{ url('/sobre_nosotros') }}"><img src="img/grinch.jpg" alt="grinch" width= 200px height=250px title="Grinch" /></a>
          <a href="{{ url('/sobre_nosotros') }}"><img src="img/gonjiam.jpg" alt="gonjiam" width= 200px height=250px title="Gonjiam" /></a>
        </ul>
      </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/creative.min.js"></script>

  </body>
</html>
