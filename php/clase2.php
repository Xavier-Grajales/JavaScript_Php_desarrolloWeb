<?php
//las variables deben ir con $
class Vehiculo{
    public $numero_de_llantas;//Todo lo que dice publico podemos acceder desde cualquier lugar
    private $kilometraje;//privado no se puede acceder desde cualquier lugar

    public function getKilometraje(){
        
    }

    private function InicializarKilometraje(){
        //Aqui hago uso de la variable de mi clase
        $this->kilometraje=0;
    }
    protected function setKilometraje($km){
    //se accede desde una clase especifica

}

$auto= new Vehiculo();

$auto->numero_de_llantas=4;

echo "numero de llantas: ".$auto->numero_de_llantas;
echo  "<br/>";
echo  "El kilometraje es: ".$auto->getKilometraje()."y soy feliz";

?>