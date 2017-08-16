<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$id_provincia = $_POST['id_provincia'];
$id_curso_imf = $_POST['id_curso_imf'];

if(!$nombre == '' && !$apellidos == '' && !$email == '' && !$telefono == '' ){
    $correo_admin = "berrospi@disolu.com";
    $correo_web = "berrospi@disolu.com";
    $titulo = 'Solicitud de: '.$nombre;
    $mensaje = '
    <table width="230px" border"0" cellspacing="0">
        <tr>
            <td>
                <di>NOMBRE: '.$nombre.'</div>
            </td>
        </tr>    
        <tr>
            <td>
                <di>APELLIDOS: '.$apellidos.'</div>
            </td>
        </tr>  
        <tr>
            <td>
                <di>TELEFONO: '.$telefono.'</div>
            </td>
        </tr>  
        <tr>
            <td>
                <di>PROVINCIA: '.$id_provincia.'</div>
            </td>
        </tr>  
        <tr>
            <td>
                <di>CURSO: '.$id_curso_imf.'</div>
            </td>
        </tr> 
    </table>';
    $cabeceras = 'MIME-Version 1.0' . "\r\n";
    $cabeceras = 'Content-type: text/html; charset=utf-8' . "\r\n";
    $cabeceras = 'To: ISSEGUR <'.$correo_admin.'>' . "\r\n";
    $cabeceras = 'From: Pagina WEB <'.$correo_web.'>' . "\r\n";
    mail($correo_admin, $nombre, $apellidos, $telefono);
    header("Location: index.php?m=1");
    }else{
        header("Location: index.php?_2");
    exit();
    }
    ?>
