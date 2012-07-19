<?php

/*
 * Entidad de negocio de tipo Actividad
 */

class Capacitacion {

    private $codigoCapacitacion;
    private $cedula;
    private $institucionCap;
    private $temaCapacitacion;
    private $tipo;
    private $numeroHoras;
    private $numeroDias;
    private $puntos;
    private $fecha;
    private $descripcion;

    function __construct($codigoCapacitacion, $cedula, $institucionCap, $temaCapacitacion, $tipo, $numeroHoras, $numeroDias, $puntos, $fecha, $descripcion) {
        $this->codigoCapacitacion = $codigoCapacitacion;
        $this->cedula = $cedula;
        $this->institucionCap = $institucionCap;
        $this->temaCapacitacion = $temaCapacitacion;
        $this->tipo = $tipo;
        $this->numeroHoras = $numeroHoras;
        $this->numeroDias = $numeroDias;
        $this->puntos = $puntos;
        $this->fecha = $fecha;
        $this->descripcion = $descripcion;
    }

    public function getCodigoCapacitacion() {
        return $this->codigoCapacitacion;
    }

    public function setCodigoCapacitacion($codigoCapacitacion) {
        $this->codigoCapacitacion = $codigoCapacitacion;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getInstitucionCap() {
        return $this->institucionCap;
    }

    public function setInstitucionCap($institucionCap) {
        $this->institucionCap = $institucionCap;
    }

    public function getTemaCapacitacion() {
        return $this->temaCapacitacion;
    }

    public function setTemaCapacitacion($temaCapacitacion) {
        $this->temaCapacitacion = $temaCapacitacion;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getNumeroHoras() {
        return $this->numeroHoras;
    }

    public function setNumeroHoras($numeroHoras) {
        $this->numeroHoras = $numeroHoras;
    }

    public function getNumeroDias() {
        return $this->numeroDias;
    }

    public function setNumeroDias($numeroDias) {
        $this->numeroDias = $numeroDias;
    }

    public function getPuntos() {
        return $this->puntos;
    }

    public function setPuntos($puntos) {
        $this->puntos = $puntos;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}

?>
