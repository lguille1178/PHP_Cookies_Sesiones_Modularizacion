<?php
// con require mandamos a llamar el archivo necesario.
//Pero como los dos documentos tienen una clase con el mismo nombre.
// Le agregamos un apellido identificador con NAMESPECE Y damos un apellido para su identificacion.
require("michisadoptados/michi.php"); 
require("michisdisponibles/michi.php");

$mrmichi = new MichisAdpotados\michi("MR michi ", "Blanco", 16); // Idenrificamos a traves de su apellido NameSpece.
$mrmichi2 = new MichisIngresados\michi("MR michi ", "Blanco", 16);

print_r($mrmichi);
var_dump($mrmichi2);

