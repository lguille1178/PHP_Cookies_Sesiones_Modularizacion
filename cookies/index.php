<?php

setcookie( /// DEFINIMOS UNA COOKIE QUE QUERRAMOS USAR
    name: "header_color", //asignamos nombre y propiedad a la cookie.
    value: "#12373d",
    expires_or_options: 3,
);
//$_COOKIE[] buscamos la cookie que ya definimos anteriormente
$color = $_COOKIE["header_color"] ?? "#121f3d"; // ESTA OPCION ES COMO UN IF, SI ES CORRATA PASA LO DE LA IZQUIERDA.
//SI NO ES CORRECTA PASA LO DE LA DERECHA DEL ??

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Platzi</title>
</head>
<body>

    <header
        style="
            background: <?= $color ?>
        "
    >
    
        <img src="logo.webp" alt="Platzi">
    </header>
    
</body>
</html>