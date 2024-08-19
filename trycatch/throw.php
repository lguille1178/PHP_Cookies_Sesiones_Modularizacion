<?php

try{
    $pet = readline("Que queres adoptar?");

    if($pet != "michi" && $pet !="conejo")
        throw new Exception("Lo sentimos, no tenemos esta mascota mencionada $pet");

    echo "Felicidades por tu $pet";

}catch(Throwable $th){
    echo $th->getMessage();
}