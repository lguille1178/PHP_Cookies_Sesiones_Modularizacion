<?php
// OTRA FROMA
require("michisadoptados/michi.php"); 
require("michisdisponibles/michi.php");

//EN ESTA FORMA LO QUE HACEMOS ES RENOMBRAR A LOS ARCHIVOS CON SUS NAMESPECE.

use MichisAdpotados\michi as michi; // renombrarmos las clases con sus ditintos namespece.
use MichisIngresados\michi AS MichiIn;

// Luego los utilizamos con la forma en la que los hemos renombrado.
// usamos una forma por cada una renombracion.
$mrmichi = new michi("MR michi ", "Blanco", 16); 
$mrmichi2 = new MichiIn("MR michi ", "Blanco", 16);

print_r($mrmichi);
var_dump($mrmichi2);
