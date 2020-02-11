 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">




<?php
if (isset($_FILES) && (bool) $_FILES) {

    $allowedExtensions = array("pdf", "doc", "docx", "gif", "jpeg", "jpg", "png");

    $files = array();
    foreach ($_FILES as $name => $file) {
        $file_name = $file['name'];
        $temp_name = $file['tmp_name'];
        $file_type = $file['type'];
        $path_parts = pathinfo($file_name);
        $ext = $path_parts['extension'];
        if (!in_array($ext, $allowedExtensions)) {
            die("O arquivo $file_name possui a extensão: $ext que não é aceita");
        }
        array_push($files, $file);
    }

    // aqui vai o endereço de destino [to] endereço de origem [from] assunto [subject] e as variáveis
    $to = "viniciusengcefet@hotmail.com";
    $from = "silas.edu.bjg@gmail.com";
    $subject = "galinha que te comeu";
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['number'];
    $cpf = $_POST['cpf'];
    $estadocivil = $_POST['select'];
    $tipocasa = $_POST['As'];
    $tipoportao = $_POST['portao'];
    $cep = $_POST['location'];
    
    
    
    $message =  " 
Contato de Cliente Via Site :
-------------------------------------------
Nome: $nome
Telefone: $telefone
Email: $email
CPF: $cpf
Estado Civil: $estadocivil
Tipo de Residencia: $tipocasa
Tipo de Portao: $tipoportao
CEP: $cep

--------------------------------------------
";
    $headers = "From: $from";

    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $message .= "--{$mime_boundary}\n";

    for ($x = 0; $x < count($files); $x++) {
        $file = fopen($files[$x]['tmp_name'], "rb");
        $data = fread($file, filesize($files[$x]['tmp_name']));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $name = $files[$x]['name'];
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
        $mensage.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
    }
    // função de enviar

    $ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        echo "<p><green>E-mail enviado para: $to!</p>";
    } else {
        echo "<p><red>E-mail não pode ser enviado!</p>";
    }
}
?>
