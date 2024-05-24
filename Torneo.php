<?php

class Torneo{
    // Atributos
    private $colPartidos;
    private $importePremio;

    public function __construct($importePremio){
        $this->importePremio = $importePremio;
        $this->colPartidos = [];
    }

    // Getters
    public function getColPartidos(){
        return $this->colPartidos;
    }
    public function getImportePremio(){
        return $this->importePremio;
    }

    // Setters
    public function setColPartidos($colPartidos){
        $this->colPartidos = $colPartidos;
    }
    public function setImportePremio($importePremio){
        $this->importePremio = $importePremio;
    }

    // Método toString
    private function mostrarArray($partidos){
        if(count($partidos) > 0){
            foreach($partidos as $partido){
                $cartel = "";
                $cartel .= $partido;
            }
        } else{
            $partido = "NO SE HA ENCONTRADO NINGÚN PARTIDO";
        }
        return $partido;
    }
    public function __toString(){
        $cartel = "Importe del premio: \n\n " . $this->getImportePremio() . "\n";
        $cartel .= "Colección de partidos: \n\n" . mostrarArray(getColPartidos()) . "\n";
    }
    public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido){
        $partido = null;
        if($OBJEquipo1->getObjCategoria() == $OBJEquipo2->getObjCategoria()){
            if($OBJEquipo1->getCantJugadores() == $OBJEquipo2->getCantJugadores()()){
                if($tipoPartido == "futbol"){
                    $cantGolesE1 = $OBJEquipo1-> getCantGolesE1();
                    $cantGolesE2 = $OBJEquipo2-> getCantGolesE2();
                    // COMPLETAR
                    $partido = new Futbol($idpartido, $fecha,$OBJEquipo1,$cantGolesE1,$OBJEquipo2,$cantGolesE2);
                } elseif($tipoPartido == "basquetbol"){
                    $cantGolesE1 = $OBJEquipo1-> getCantGolesE1();
                    $cantGolesE2 = $OBJEquipo2-> getCantGolesE2();
                    // COMPLETAR
                    $partido = new Basquetbol($idpartido, $fecha,$OBJEquipo1,$cantGolesE1,$OBJEquipo2,$cantGolesE2);
                }

                $coleccionPartidos = $this->getColPartidos();
                array_push($coleccionPartidos, $partido);
            }
        }
        return $partido;
    }
}