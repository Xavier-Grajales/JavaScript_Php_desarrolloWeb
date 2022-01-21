<?php

function saludar(){
    return "Hola mundo";
}

function saludando($nombre){
    return "Hola".$nombre;
}

//Llamar a la función
echo saludar();//echo renderiza para enseñar en el navegador
echo "<br/>";
echo saludando("Xavier");

?>


