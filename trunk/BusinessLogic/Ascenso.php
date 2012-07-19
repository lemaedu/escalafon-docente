<?php

/*
 * Entidad de negocio de tipo Actividad
 */

class Ascenso {

    private $cedula;
    private $nivel;
    private$estado;
    private $documentosValidos;
    private$fechaAscenso;    
    private $puntajeTotal;
    function __construct($cedula, $nivel, $estado, $documentosValidos, $fechaAscenso, $fechaAscenso, $puntajeTotal) {
        $this->cedula = $cedula;
        $this->nivel = $nivel;
        $this->estado = $estado;
        $this->documentosValidos = $documentosValidos;
        $this->fechaAscenso = $fechaAscenso;
        $this->fechaAscenso = $fechaAscenso;
        $this->puntajeTotal = $puntajeTotal;
    }
    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getDocumentosValidos() {
        return $this->documentosValidos;
    }

    public function setDocumentosValidos($documentosValidos) {
        $this->documentosValidos = $documentosValidos;
    }

    public function getFechaAscenso() {
        return $this->fechaAscenso;
    }

    public function setFechaAscenso($fechaAscenso) {
        $this->fechaAscenso = $fechaAscenso;
    }

    public function getFechaAscenso_1() {
        return $this->fechaAscenso;
    }

    public function setFechaAscenso_1($fechaAscenso) {
        $this->fechaAscenso = $fechaAscenso;
    }

    public function getPuntajeTotal() {
        return $this->puntajeTotal;
    }

    public function setPuntajeTotal($puntajeTotal) {
        $this->puntajeTotal = $puntajeTotal;
    }



}

?>