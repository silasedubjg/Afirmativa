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
  <!--  <link rel="stylesheet" href="css/form.css"> -->
  
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="js/form.js"></script>
</head>
<body>
  <div class="wrapper">
<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <nav class="navbar navbar-expand-md navbar-dark  bg-dark navbar-fixed-top">
            <!-- Navbar-brand serve pra por titulo(geralmente nome de empresa)-->
            <a class="navbar-brand col-xs-offset-3 col-lg-offset-1  col-sm-offset-0 col-md-offset-0"  href="#">Afirmativa</a>
            <!--Navbar-toggler serve para minizar a tela e ajustar-->
            <button class="navbar-toggler col-xs-offset-2 col-md-offset-0" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">

              <span class="navbar-toggler-icon"></span>
            </button>

            <div  class="collapse navbar-collapse col-sm-offset-2 col-md-offset-4   " id="navbarTogglerDemo02">
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

    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
    <section class="">

        <!-- Aqui abaixo vem o formulario-->
        <div class="container">    
          <div id="signupbox" style=" margin-top:50px "  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div  class="panel-title">Cotação de automóvel
                </div>
                <!--<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/accounts/login/">Sign In</a></div>-->
              </div>  
                <div class="panel-body" >
                  <form method="post" action="index.php">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                    <form  class="form-horizontal" method="post" >
                      <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />

                      <!--Nome completo abaixo-->
                      <div id="div_id_name" class="form-group required"> 
                        <label for="id_name" class="control-label col-md-4  requiredField"> Nome completo<span class="asteriskField">*</span> </label> 
                        <div class="controls col-md-8 "> 
                          <input class="input-md textinput textInput form-control" id="id_name" name="name" placeholder="Ex: Vinicius Henrique de Moraes" style="margin-bottom: 10px" type="text" />
                        </div>
                      </div>
                      <!-- Acima acaba o nome completo -->

                      <!-- Aqui abaixo comeca o cpf-->
                      <div id="div_id_cpf" class="form-group required">
                        <label for="id_cpf" class="control-label col-md-4  requiredField"> CPF<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                          <input class="input-md  textinput textInput form-control" id="id_cpf" maxlength="30" name="cpf" placeholder="Ex:12797145683" style="margin-bottom: 10px" type="text" />
                        </div>
                      </div>
                      <!-- Acima acaba o cpf-->

                      <!--Abaixo comeca telefone-->
                      <div id="div_id_number" class="form-group required">
                        <label for="id_number" class="control-label col-md-4  requiredField"> Telefone/Whatsapp<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                          <input class="input-md textinput textInput form-control" id="id_number" name="number" placeholder="Ex:(31)99689-9808" style="margin-bottom: 10px" type="text" />
                        </div> 
                      </div> 
                      <!-- Acima acaba telefone -->

                      <!-- Abaixo comeca email-->
                      <div id="div_id_email" class="form-group required">
                        <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                          <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Ex: viniciusengcefet@hotmail.com" style="margin-bottom: 10px" type="email" />
                        </div>     
                      </div>
                      <!-- Acima acaba email-->

                      <!-- Abaixo comeca o radio do estado civil-->
                      <div id="div_id_select" class="form-group required">
                        <label for="id_select"  class="control-label col-md-4  requiredField"> Estado civil<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "  style="margin-bottom: 10px">
                          <label class="radio-inline"><input type="radio" checked="checked" name="select" id="id_select_1" value="S"  style="margin-bottom: 10px">Solteiro</label>
                          <br>
                          <label class="radio-inline"> <input type="radio" name="select" id="id_select_2" value="P"  style="margin-bottom: 10px">Casado</label>
                          <br>
                          <label class="radio-inline"> <input type="radio" name="select" id="id_select_3" value="P"  style="margin-bottom: 10px">Viúvo</label>
                          <br>
                          <label class="radio-inline"> <input type="radio" name="select" id="id_select_4" value="P"  style="margin-bottom: 20px">Divorciado</label>
                        </div>
                        <!--Aqui acima acaba o radio estado civil e comeca o proximo item abaixo-->
                      </div> 

                      <!--Aqui comeca o radio tipo de residencia-->
                      <div id="div_id_As" class="form-group required">
                        <label for="id_As"  class="control-label col-md-4  requiredField">Tipo de residência<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "  style="margin-bottom: 10px">
                          <label class="radio-inline"> <input type="radio" name="As" id="id_As_1" value="I"  style="margin-bottom: 10px">Casa</label>
                          <br>
                          <label class="radio-inline"> <input type="radio" name="As" id="id_As_2" value="CI"  style="margin-bottom: 10px">Apartamento </label>
                          <br>
                          <label class="radio-inline"> <input type="radio" name="As" id="id_As_2" value="CI"  style="margin-bottom: 10px">Condomínio fechado</label>
                          <br>
                          <label class="radio-inline"> <input type="radio" name="As" id="id_As_2" value="CI"  style="margin-bottom: 10px">Outros</label>
                        </div>
                      </div>
                      <!--Acima termina o radio tipo residencia e abaixo comeca outro item-->

                      <!--Abaixo comeca tipo de portao-->              
                      <div id="div_id_portao" class="form-group required">
                        <label for="id_portao"  class="control-label col-md-4  requiredField"> Tipo de portão<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "  style="margin-bottom: 10px">
                         <label class="radio-inline"> <input type="radio" name="portao" id="id_portao_1" value="M"  style="margin-bottom: 10px">Automático</label>
                         <label class="radio-inline"> <input type="radio" name="portao" id="id_portao_2" value="F"  style="margin-bottom: 10px">Manual </label>
                       </div>
                      </div>
                      <!--Acima acaba portao-->

                      <!--Abaixo comeca o CEP-->
                      <div id="div_id_location" class="form-group required">
                        <label for="id_location" class="control-label col-md-4  requiredField"> CEP <span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                          <input class="input-md textinput textInput form-control" id="id_location" name="location" placeholder="EX:35180" style="margin-bottom: 10px" type="text" />
                        </div> 
                      </div>
                      <!--Acima acaba o CEP -->

                      <!--Abaixo comeca o upload CNH-->
                      <div id="div_id_upload" class="form-group required">
                        <label for="id_upload" class="control-label col-md-4  requiredField"> CNH do condutor<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                          <input type="file" />
                        </div> 
                      </div>
                      <br>
                      <!-- Acima acaba upload CNH-->

                      <!--Abaixo comeca o upload DUT-->
                      <div class="form-group">
                        <div id="div_id_dut" class="form-group required">
                          <p>
                          </p>

                          <label for="id_dut" class="control-label col-md-4  requiredField"> DUT do veículo<span class="asteriskField">*</span> </label>
                          <div class="controls col-md-8 ">
                            <br>
                            <input type="file" />

                          </div> 
                        </div>
                      </div>
                        <!--Acima acaba o upload DUT-->

                        <input type=hidden name="recipient" value="viniciusengcefet@hotmail.com">
                        <input type=hidden name="subject" value="Teste">
                        <input type=hidden name="redirect" value="http://localhost/Afirmativa/form.php">
                        <div class="form-group"> 
                          <div class="aab controls col-md-4 ">
                          </div>
                          <div class="controls col-md-8 ">
                            <br>
                            <input  style="width: 300px" type="submit" onclick ="chamar()" name="Enviar" value="Enviar" class="btn btn-primary btn btn-info" id="submit-id-enviar" />
                          </div>
                        </div> 
                    </form>
                  </form>
                </div>
              </div>
            </div> 
          </div>            
    </section>
     <script>

      function chamar(){
        window.location.href = "mail.php";
      }
  </script>
</body>
</html>