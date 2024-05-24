<?php

class Futbol extends Partido{
    // Atributos Propios

    private $coefBaseMenores;
    private $coefBaseJueveniles;
    private $coefBaseMayores;
    // Método constructor

    public function __construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2){
        parent::__construct($idpartido, $fecha, $objEquipo1, $cantGolesE1, $objEquipo2, $cantGolesE2);
        $this->coefBaseMenores = 0.13;
        $this->coefBaseJueveniles = 0.19;
        $this->coefBaseMayores = 0.27;
    }

    // getters

    public function getCoefBaseMenores(){
        return $this->coefBaseMenores;
    }
    public function getCoefBaseJuveniles(){
        return $this->coefBaseJueveniles;
    }
    public function getCoefBaseMayores(){
        return $this->coefBaseMayores;
    }

    // Setters
    public function setCoefBaseMenores($coefBaseMenores){
        $this->coefBaseMenores = $coefBaseMenores;
    }
    public function setCoefBaseJueveniles($coefBaseJueveniles){
        $this->coefBaseJueveniles = $coefBaseJueveniles;
    }
    public function setCoefBaseMayores($coefBaseMayores){
        $this->coefBaseMayores = $coefBaseMayores;
    }

    public function __toString(){
        $cartel = parent::__toString();
        $cartel .= "Coeficiente base de menores" . $this->getCoefBaseMenores() . "\n";
        $cartel .= "Coeficiente base de mayores: " . $this->getCoefBaseMayores() . "\n";
        $cartel .= "Coeficiente base de juveniles" . $this->getCoefBaseJuveniles() . "\n";

        return $cartel;
    }


        public function coeficientePartido(){
            $categoriaE1 = $this->getObjEquipo1()->getObjCategoria();
            $categoriaE2 = $this->getObjEquipo2()->getObjCategoria();

            if($categoriaE1 == $categoriaE2){
                
            }
        }


    
}