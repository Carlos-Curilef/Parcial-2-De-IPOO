<?php

class Basquetbol extends Partido{

    // Atributos propios de la clase
    private $cantInfracciones;
    private $coefPenalizacion;
    // Método constructor

    public function __construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2, $cantInfracciones){
        parent::__construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2);
        $this->cantInfracciones = $cantInfracciones;
        $this->coefPenalizacion = 0.75;
    }

    // Getters
    public function getCantIfracciones(){
        return $this->cantInfracciones;
    }
    public function getCoefPenalizacion(){
        return $this->coefPenalizacion;
    }

    // Setters
    public function setCantIfracciones($cantInfracciones){
        $this->cantInfracciones = $cantInfracciones;
    }
    public function setCoefPenalizacion($coefPenalizacion){
        $this->coefPenalizacion = $coefPenalizacion;
    }

    public function __toString(){
        $cartel = parent::__toString();
        $cartel .= "Cantidad de infracciones: " . $this->getCantIfracciones() . "\n";
        $cartel .= "Coeficiente de penalización: " . $this->getCoefPenalizacion() . "\n";
    }

    public function coeficientePartido(){
        $coefiencteBasePartido = parent::coeficientePartido();
        $coeficienteBasquetbol = $coefiencteBasePartido - ($this->getCoefPenalizacion()*$this->getCantIfracciones());

        return $coeficienteBasquetbol;
    }


}