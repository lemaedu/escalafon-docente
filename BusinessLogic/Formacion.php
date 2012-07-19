<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formacion
 *
 * @author SysteMarket
 */
class Formacion {


    private $codigoFormacion;
    private $cedula;
    private $nivelEducacion;
    private $codigoRefrendacion;
    private $numPaginaRegistro;
    private $puntos;
    private $fechaRegistro;
    private $fechaEntrega;
    private $descripcion;

    function __construct($codigoFormacion, $cedula, $nivelEducacion, $codigoRefrendacion, $numPaginaRegistro, $puntos, $fechaRegistro, $fechaEntrega, $descripcion) {
        $this->codigoFormacion = $codigoFormacion;
        $this->cedula = $cedula;
        $this->nivelEducacion = $nivelEducacion;
        $this->codigoRefrendacion = $codigoRefrendacion;
        $this->numPaginaRegistro = $numPaginaRegistro;
        $this->puntos = $puntos;
        $this->fechaRegistro = $fechaRegistro;
        $this->fechaEntrega = $fechaEntrega;
        $this->descripcion = $descripcion;
    }

    public function getCodigoFormacion() {
        return $this->codigoFormacion;
    }

    public function setCodigoFormacion($codigoFormacion) {
        $this->codigoFormacion = $codigoFormacion;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getNivelEducacion() {
        return $this->nivelEducacion;
    }

    public function setNivelEducacion($nivelEducacion) {
        $this->nivelEducacion = $nivelEducacion;
    }

    public function getCodigoRefrendacion() {
        return $this->codigoRefrendacion;
    }

    public function setCodigoRefrendacion($codigoRefrendacion) {
        $this->codigoRefrendacion = $codigoRefrendacion;
    }

    public function getNumPaginaRegistro() {
        return $this->numPaginaRegistro;
    }

    public function setNumPaginaRegistro($numPaginaRegistro) {
        $this->numPaginaRegistro = $numPaginaRegistro;
    }

    public function getPuntos() {
        return $this->puntos;
    }

    public function setPuntos($puntos) {
        $this->puntos = $puntos;
    }

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getFechaEntrega() {
        return $this->fechaEntrega;
    }

    public function setFechaEntrega($fechaEntrega) {
        $this->fechaEntrega = $fechaEntrega;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}

?>
