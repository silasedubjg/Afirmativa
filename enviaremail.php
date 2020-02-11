
<?php

 $host = "afirmativavh07.000webhostapp.com/enviaremail.php";
$port = "587";
$username = "silas.edu.bjg@gmail.com";
$password = "123";
 
require 'PHPMailer/PHPMailerAutoload.php';



/* Valores recebidos do formulário  */
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['number'];
$cpf = $_POST['cpf'];
$estadocivil = $_POST['select'];
$tipoderesidencia = $_POST['As'];
$tipodeportao = $_POST['portao'];
$arquivo = $_FILES['arquivo'];


$body = " 
<br>Contato de Cliente Via Site :
<br>--------------------------------------------<br>
<br><strong>Nome:</strong> $nome
<br><strong>Telefone:</strong> $telefone
<br><strong>Email:</strong> $email
<br><strong>Cpf:</strong> $cpf
<br><strong>Estado Civil:</strong> $estadocivil
<br><strong>Tipo de Residência:</strong> $tipoderesidencia
<br><strong>Tipo de Portão:</strong> $tipodeportao
<br><strong>Cnh:</strong> $arquivo

<br><br>--------------------------------------------
";

$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);

$from_email = $_POST['email'];
$from_name = $_POST['name'];
$content = $body;
$to = 'viniciusengcefet@hotmail.com';

$mail = new PHPMailer();
$mail->IsMail();
$mail->Password = $password;
$mail->SetFrom($from_email, $from_name);
$mail->Subject = "cotação";
$mail->MsgHTML($content);
$mail->AddAddress($to);

if ($mail->Send()) {
   echo 'Enviado com sucesso';
} else {
   echo 'Erro: ';
}
    
?>