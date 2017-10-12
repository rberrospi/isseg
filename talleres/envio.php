<?php
echo ini_get('display_errors');
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$id_distrito = $_POST['id_distrito'];
$id_curso = $_POST['id_curso'];
$comentarios = $_POST['comentarios'];
$empresa = $_POST['empresa'];

//if(!$nombre == '' && !$apellidos == '' && !$email == '' && !$telefono == '' && !$id_distrito == '' && !$id_curso == '' && !$comentarios == ''){

require('phpmailer/_lib/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
var_dump($mail); exit;
$mail->SMTPAuth = true;
$mail->Host = 'smtp.office365.com';
$mail->Username = 'rberrospi@institutodeseguridad.edu.pe';
$mail->Password = 'ISSEGUR2017**'; 


$mail->From = 'cursos@institutodeseguridad.edu.pe'; 
$mail->FromName = 'Registro Web - Instituto de Seguridad';
$mail->AddAddress('rberrospi@institutodeseguridad.edu.pe'); 
$mail->IsHTML(true);
$mail->Subject = 'Inscripcion de curso Virtual de' .$nombre; 
$body = '<table width="230" border="0" cellpadding="0" cellspacing="0"> <tr> <td><div id="campo">Nombre: <strong>'.$nombre.'</strong></div></td></tr><tr> <td><div id="campo">Apellidos: <strong>'.$apellidos.'</strong></div></td></tr><tr> <td><div id="campo">Telefono: <strong>'.$telefono.'</strong></div></td></tr><tr> <td><div id="campo">Email: <b>'.$email.'</b></div></td></tr><tr> <td><div id="campo">Distrito: <b>'.$id_distrito.'</b></div></td></tr><tr> <td><div id="campo">Curso: <b>'.$id_curso.'</b></div></td></tr><tr> <td><div id="campo">Comentario: <b>'.$comentarios.'</b></div></td></tr><tr> <td><div id="campo">Empresa: <b>'.$empresa.'</b></div></td></tr></table>';
$body .= 'Enviado por el sistema de registro <strong>1.0 ISSEGUR</strong>';
$mail->Body = $body;
$exito = $mail->Send();


//header("Location: primeros-auxilios.php?m=1");
//}else{
//header("Location: primeros-auxilios.php?m=2");
//exit();
//}
?>