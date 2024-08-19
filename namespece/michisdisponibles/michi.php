<?php
namespace MichisIngresados; // Indentificador como apellido Namespece.
class michi{
    protected $name;
    protected $date_adopted;
    protected $adopted_by;

    function __construct($name,$date_adopted,$adopted_by){
        $this->name = $name;
        $this->date_adopted = $date_adopted;
        $this->adopted_by = $adopted_by;
    }
}