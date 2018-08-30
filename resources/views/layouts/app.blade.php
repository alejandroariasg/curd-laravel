<head>
	<meta charset="utf-8">
     <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav animate side-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{action('LibroController@index')}}"" title="Cart"> <i class="fas fa-cart-plus"></i><span class="ttip">Lista libros</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{action('LibroController@create')}}" title="Comment"> <i class="fas fa-comment"></i><span class="ttip">Crear libro</span></a>
      </li>
    </ul>

  </div>
</nav>