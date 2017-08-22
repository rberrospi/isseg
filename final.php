<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$id_provincia = $_POST['id_provincia'];
$id_curso = $_POST['id_curso'];
$subject = 'Mensaje desde la Web ISSEGUR 2.0';

if(!$nombre == '' && !$apellidos == '' && !$email == '' && !$telefono == '' && !$id_curso == ''){
$correo_admin = "berrospi@disolu.com";
$correo_web = "berrospi@disolu.com";
$titulo = 'Mensaje de Contacto: '.$nombre;
$mensaje = '<table width="230" border="0" cellpadding="0" cellspacing="0"><tr><td><div id="campo">Nombre: <strong>'.$nombre.'</strong></div></td></tr><tr><td><div id="campo">Apellido: <strong>'.$apellidos.'</strong></div></td></tr><tr><td><div id="campo">Telefono: <b>'.$telefono.'</b></div></td></tr><tr><td><div id="campo">Correo: <b>'.$email.'</b></div></td></tr><tr><td><div id="campox">Curso: <b>'.$id_curso.'</b></div></td></tr></table>';
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'To: Informes <'.$correo_admin.'>' . "\r\n";
$cabeceras .= 'From: PaginaWEB <'.$correo_web.'>' . "\r\n";
$cabeceras .= 'Cc: luiguirbr@gmail.com' . "\r\n";
mail($correo_admin, $titulo, $mensaje, $cabeceras);
header("Location: index.php?m=1");
}else{
header("Location: index.php?m=2");
exit();	
}
?>