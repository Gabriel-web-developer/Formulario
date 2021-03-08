<?php
    $destino ="elbebededios06@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\napellido: " . $apellido . "\ncorreo: " . $correo. "\nmensaje " .$mensaje;
    mail($destino,"Pruebadeform",$contenido);
    header("Location:../gracias/index.html");
    
?>