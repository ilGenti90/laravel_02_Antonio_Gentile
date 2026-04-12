<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel HTML </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
   <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}"> 
    <img src="media/logo.svg" alt="logo" width="40" height="40">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " aria-current="page" href="{{ route('homepage') }}">Home</a>
        <a class="nav-link" href="{{ route('ChiSiamo') }}">Chi Siamo</a>
        <a class="nav-link" href="{{ route('Servizi') }}">Servizi</a>
        
      </div>
    </div>
  </div>
</nav>
<!-- FINE NAVBAR -->

<!-- HEADER -->

    <div class="conteiner-fluid vh-100">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 testo">
                    SERVIZI 
                </h1>
            </div>
        </div>
    </div>

    <!-- FINE HEADER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>