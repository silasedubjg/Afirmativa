<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Afirmativa Corretora de Seguros</title>
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!-- novos -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,400i,700,900|Montserrat:100,200,300,400,400i,500,600,700,800,900" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Custom Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
</head>



<body>

  <div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <section style="background-color: blue">
            <nav class="navbar navbar-expand-md navbar-dark  bg-dark navbar-fixed-top" >
              <!-- Navbar-brand serve pra por titulo(geralmente nome de empresa)-->
              <a class="navbar-brand col-xs-offset-3  col-lg-offset-1 col-sm-offset-0 col-md-offset-0"  href="#">Afirmativa</a>
              <!--Navbar-toggler serve para minizar a tela e ajustar-->
              <button class="navbar-toggler col-xs-offset-2 col-md-offset-0" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div  class="collapse navbar-collapse col-sm-offset-2 col-md-offset-4  " id="navbarTogglerDemo02">
                <div class="row">
                  <div class="col-xs-12">
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
                        <a class="nav-link " href="contato.php">Contato</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </section>
          <section class="contactus-one" id="contactus"><!-- Section id-->
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.805297197265!2d-42.575533585643534!3d-19.507010830331115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa55515144da2bd%3A0xa43199a47765!2sAfirmativa%20Adm.%20e%20Corretora%20de%20Seguros!5e0!3m2!1spt-BR!2sbr!4v1579717411888!5m2!1spt-BR!2sbr" width="100%" height="580" ></iframe>
                  </div>
                </div>
                <div class=" col-md-5 col-sm-5 col-sm-offset-1 col-xs-offset-1">
                  <div class="contact-block">
                    <div class="dart-headingstyle-one dart-mb-20">  <!--Style 1-->
                      <h2 class="dart-heading">Entre em contato</h2>
                    </div>

                    <div class="contact-form"><!-- contact form -->
                      <form class="row" action="e-mail.php" id="contact" name="contact" method="post" >
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Nome" required >
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Email" required >
                        </div>
                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" name="InputWeb" id="InputWeb" placeholder="Telefone" >
                        </div>
                        <div class="form-group col-md-12">
                          <textarea class="form-control" name="InputMessage" id="InputMessage" rows="4" placeholder="Mensagem" required  ></textarea>
                        </div>
                        <div class="col-md-12">
                          <button name="submit" type="submit" class="btn btn-primary normal-btn dart-btn-xs"> ENVIAR MENSAGEM</button>
                        </div>
                      </form>
                    </div>

                    <hr>

                    <div class=" row contact-info">
                      <div class="col-md-12 col-sm-12">
                        <p class="addre"><i class="fa fa-map-marker"></i>R. Jequitibá, 762 - Horto, Ipatinga - MG, 35160-306</p>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <p class="phone-call"><i class="fa fa-phone"></i> <a href="tel:+553138281500">(31) 3828-1500</a></p>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <p class="mail-id"><i class="fa fa-envelope"></i>contact@yourcompany.com</p>
                      </div>

                      <div class="col-md-12 col-sm-12" style="margin-top: 60px" >
                         
                        <ul class="redesSociais">
                          <li><a href="https://www.facebook.com/afirmativaseguro/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href="https://www.instagram.com/afirmativaseguros/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>

                    </div>

                    

                  </div>
                </div>                
              </div>            
            </div>
          </section> 
        </div>
      </div>

    </div>
  </div>  
</body>