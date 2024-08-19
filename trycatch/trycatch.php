<?php   
try {
    $resultado = 20/0;
    echo $resultado;

} catch (Throwable $th) {
    echo $th->getMessage();
    echo "\n \nUps algo salio mal con tu divicion";
}