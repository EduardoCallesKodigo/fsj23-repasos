<?php

/**
 * Encapsulamiento: Ejercicio 4
 * Diseña una clase "ControlRemoto" para un televisor inteligente. Esta clase debe encapsular los métodos para cambiar de
 * canal, ajustar el volumen y encender o apagar el televisor. Utiliza el encapsulamiento para garantizar que los cambios
 * en el estado del televisor se realicen de manera segura y controlada a través de la clase "ControlRemoto".
 */

 class ControlRemoto {
    private $canal; // Ultimo Canal sintonizado antes de apagar
    private $volumenActual; // Volumen: 0 - 100
    private $estaEncendido; // true: tv encendido | false: tv apagado

    public function __construct($canal)
    {
        //Estados de un TV que se acaba de crear (comprar)
        $this->canal = $canal;
        $this->volumenActual = 0;
        $this->estaEncendido = false;
    }

    public function getVolumen(){
        return $this->volumenActual;
    }

    public function setVolumen($volumen){
        $this->volumenActual = $volumen;
    }

    public function botonEncenderApagar() {
        if($this->estaEncendido) {
            $this->estaEncendido = false;
            return "TV apagado.\n";
        }
        $this->estaEncendido = true;
        return "TV encendido.\n";
    }

    public function subirVolumen($incremento) {
        $volumen = $this->getVolumen();
        $sumaVolumen = $volumen + $incremento;

        if($volumen == 100) return "Volumen maximo\n";
        if ($sumaVolumen > 100) {
            $this->setVolumen(100);
            return "Volumen maximo\n";
        }
        $this->setVolumen($sumaVolumen);
        return "Nivel de volumen:  $sumaVolumen\n";
    }

    public function estadosTV() {
        return "Canal: $this->canal | Volumen: ". $this->getVolumen() ." | Encendido?: $this->estaEncendido\n";
    }
 }

 //Instanciemos:
 //le decimos que el tv esta en canal 3
 $controlSamsung = new ControlRemoto(3);
 echo $controlSamsung->estadosTV();

 //Interactuemos con el control
 echo $controlSamsung->botonEncenderApagar();
 echo $controlSamsung->estadosTV();

//  echo $controlSamsung->subirVolumen(15);
//  echo $controlSamsung->estadosTV();

//  echo $controlSamsung->subirVolumen(50);
//  //echo $controlSamsung->estadosTV();

//  echo $controlSamsung->subirVolumen(50);
//  echo $controlSamsung->estadosTV();

 echo $controlSamsung->botonEncenderApagar();
 echo $controlSamsung->estadosTV();
?>