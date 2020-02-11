<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="pt-br">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Afirmativa Corretora de Seguros</title>
  <!--  <link rel="stylesheet" href="css/index.css"> -->
  
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <nav class="navbar navbar-expand-md navbar-dark  bg-dark navbar-fixed-top">
         <!-- Navbar-brand serve pra por titulo(geralmente nome de empresa)-->
          <a class="navbar-brand col-xs-offset-3 col-lg-offset-1 col-sm-offset-0 col-md-offset-0"  href="#">Afirmativa</a>
         <!--Navbar-toggler serve para minizar a tela e ajustar-->
          <button class="navbar-toggler col-xs-offset-2 col-md-offset-0" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">

          <span class="navbar-toggler-icon"></span>
          </button>

          <div  class="collapse navbar-collapse col-md-offset-4  col-sm-offset-2  " id="navbarTogglerDemo02">

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

             <li class="nav-item col-md-3 col-xs-2 col-sm-2">
              <a class="nav-link " href="index.php">Início <span class="sr-only">(Página atual)</span></a>
             </li>

             <li class="nav-item col-md-3 col-xs-2 col-sm-2">
              <a class="nav-link " href="sobre.php">Sobre</a>
             </li>

             <li class="nav-item col-md-3 col-xs-2 col-sm-2">
              <a class="nav-link" href="servi2.php">Serviços</a>
             </li>


             <li class="dropdown nav-item col-md-3 col-xs-2 col-sm-2">
              <a href="form.php" class="dropdown-togggle nav-link" data-toggle="dropdown">Cotação <span class="caret"></span></a>
              <ul class="dropdown-menu bg-dark" role="menu">
                <li><a class = "text-muted" href="form.php">Cotação automotiva</a></li>
                <li><a class = "text-muted" href="#">Cotação individual</a></li>
                <li><a class = "text-muted" href="#">Cotoção residencial</a></li>
              </ul>
             </li>

             <li class="nav-item col-md-3 col-xs-2 col-sm-2">
              <a class="nav-link " href="contact.php">Contato</a>
             </li>
            </ul>
          </div>
        </nav>

        <div style="padding-top: 320px" >
          <p class="font-italic font-weight-light col-md-offset-7 col-sm-offset-6 hidden-xs col-lg-offset-8" style="font-size: 25px ">
            " Nossa missão é proteger. "
          </p>
          <button type="button" onclick="cotar()" class="btn btn-primary  col-xs-offset-4 hidden-xs col-md-offset-8 col-sm-offset-7 col-lg-offset-9">Cote agora!</button>

        </div>

        <div style="padding-top: 170px" >
          <button type="button" onclick="cotar()" class="btn btn-primary btn-block   visible-xs">Cote agora!</button>
        </div>

      </div>
    </div>
  </div>

      <script>
        function cotar(){
          window.location.href ="cotacao.php"
        }
      </script>

  </body>
</html>