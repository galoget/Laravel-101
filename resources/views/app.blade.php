<!Doctype html>
<html lang="es">
<head>
  <title>Taller 1</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="{{ URL::to('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <link type="text/css" href="{{ URL::to('/css/main.css')}}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel - 101</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class=""><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
            @if(Auth::check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Integrantes <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('/alex') }}">Alex</a></li>
                <li><a href="{{ URL::to('/Linux') }}">Andres</a></li>
                <!-- <?php echo URL::to('/edith'); ?> -->
                <li><a href="{{ URL::to('/cristhian') }}">Cristhian</a></li>
                <li><a href="{{ URL::to('/carlos') }}">Carlos</a></li>
                <li><a href="{{ URL::to('/edith') }}">Edith</a></li>
                <li><a href="{{ URL::to('/esther') }}">Esther</a></li>
                <li><a href="{{ URL::to('/galoget') }}">Galoget</a></li>
                <li><a href="{{ URL::to('/jessa') }}">Jessa</a></li>
                <li><a href="{{ URL::to('/josse') }}">Josse</a></li>
                <li><a href="{{ URL::to('/miguel') }}">Miguel</a></li>
                <li><a href="{{ URL::to('/nelson') }}">Nelson</a></li>
                <li><a href="{{ URL::to('/roberto') }}">Roberto</a></li>
              </ul>
            </li>
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
            <li class=""><a href="{{ URL::to('/auth/register') }}">Registrarse <span class="sr-only">(current)</span></a></li>
            <li class=""><a href="{{ URL::to('/auth/login') }}">Login <span class="sr-only">(current)</span></a></li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hola, {{ Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('/auth/logout') }}">Logout</a></li>
              </ul>
            </li>
            @endif
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <main>
    @yield('content')
  </main>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{ URL::to('/js/bootstrap.min.js') }}"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
</body>
</html>
