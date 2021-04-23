<?php
    $destinatario = 'LJZNERI23@gmai.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];

    $header = "Correo de United Networks";
    $mensajeCompleto = $mensaje . "\nAtt:" . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo Enviado Exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='formulario.html'\",1000)</script>";
?>