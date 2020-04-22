<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="\css\app.css">
    <link rel="stylesheet" href=@yield('estilo2')>
    <link rel="stylesheet" href=@yield('fqa')>
    <link rel="stylesheet" href=@yield('listadoProductos')>
    <link rel="stylesheet" href="style.css"> 
    <link href="style.css" rel="stylesheet"> 
  </head>

  <body>
      <header>
        
        <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="http://localhost:8000/index">Pelicùlas!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/actores">Detalle de Peliculas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/peliculas">Titulos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/registrarse">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/listadoProductos">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/home">Login</a>
            </li>
          </ul>
        </div>
      </nav> 
      <div> 
    </header>

   

    <main class="container">
        <h1>@yield('h1')</h1>

        @yield('main')

    </main>



    <footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 mt-md-0 mt-3">

          <h5 class="text-uppercase">Todos los derechos reservados</h5>
          <p>Links y lineas de contacto: </p>

        </div>
        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase">Redes Sociales</h5>

          <ul class="list-unstyled">
            <li>
              <a href="https://www.facebook.com">Facebook 1</a>
            </li>
            <li>
              <a href="https://twitter.com">Twitter 2</a>
            </li>
            <li>
              <a href="https://www.instagram.com">Instagram 3</a>
            </li>
            <li>
              <a href="https://www.gmail.com">Gmail 4</a>
            </li>
          </ul>

        </div>
        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase">Redes Contacto</h5>

          <ul class="list-unstyled">
            <li>
              <a href="http://localhost:8000/contacto">Mail RRHH 1</a>
            </li>
            <li>
              <a href="http://localhost:8000/contacto">Atencion empresas</a>
            </li>
            <li>
              <a href="http://localhost:8000/contacto">Atencion particulares</a>
            </li>
            <li>
              <a href="http://localhost:8000/contacto">Denuncias </a> 
            </li>
          </ul>

        </div>

      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="#!">Ver Pelicula!</a>
    </div>

  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
