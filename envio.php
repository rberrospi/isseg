<?php
   $nombre = $apellidos = $email = $telefono = $id_provincia = $id_curso = $para = $headers = $msjCorreo = NULL;


  if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $id_provincia = $_POST['id_provincia'];
    $id_curso = $_POST['id_curso'];
    $subject = 'Mensaje desde la Web' . "\r\n";
    $para = 'berrospi@disolu.com';

    echo $nombre . " " . $apellidos . " " . $telefono . " " . $id_provincia . " " . $id_curso; 

    $headers = 'From' . " " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";
    $msjCorreo = "Nombre: " . $nombre;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Email: " . $email;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Asunto: " . $subject;
    $msjCorreo .= "\r\n";

  if (mail($para, $subject, $msjCorreo, $headers)) {
    echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
          </script>";
  } else {
    echo "<script language='javascript'>
            alert('fallado');
        </script>";
  }
}
?>