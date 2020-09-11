<?php

    $destinoPrimaria="liceoelcarmelo40@yahoo.es";
    $destinoBachillerato="liceocarmelo@yahoo.com";
    $destinoBachillerato2="lcarog30@hotmail.com";
    $nombre=$_POST["nombre"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $select=$_POST["select"];
    $mensaje=$_POST["mensaje"];
    $contenido="Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\nCorreo: " . $correo . "\nSelección: " . $select . "\nMensaje: " . $mensaje;
    

   if($select=="Director de preescolar y primaria"){
        mail($destinoPrimaria,"Contacto",$contenido);
    }elseif($select=="Director de bachillerato por ciclos"){
        mail($destinoBachillerato,"Contacto",$contenido);
        mail($destinoBachillerato2,"Contacto",$contenido); 
    }

    header("Location: ../contactenos.html");

?>