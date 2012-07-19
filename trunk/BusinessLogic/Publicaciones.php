<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publicaciones
 *
 * @author SysteMarket
 */
class Publicaciones {

    private $codigoPublicacion;
    private $cedula;
    private $area;
    private $tipo_publicacion;
    private $editorial;
    private $numeropublicacion;
    private $puntajeanio;
    private $fechaPublicacion;
    private $descripcion;

    function __construct($codigoPublicacion, $cedula, $area, $tipo_publicacion, $editorial, $numeropublicacion, $puntajeanio, $fechaPublicacion, $descripcion) {
        $this->codigoPublicacion = $codigoPublicacion;
        $this->cedula = $cedula;
        $this->area = $area;
        $this->tipo_publicacion = $tipo_publicacion;
        $this->editorial = $editorial;
        $this->numeropublicacion = $numeropublicacion;
        $this->puntajeanio = $puntajeanio;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->descripcion = $descripcion;
    }

    public function getCodigoPublicacion() {
        return $this->codigoPublicacion;
    }

    public function setCodigoPublicacion($codigoPublicacion) {
        $this->codigoPublicacion = $codigoPublicacion;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getTipo_publicacion() {
        return $this->tipo_publicacion;
    }

    public function setTipo_publicacion($tipo_publicacion) {
        $this->tipo_publicacion = $tipo_publicacion;
    }

    public function getEditorial() {
        return $this->editorial;
    }

    public function setEditorial($editorial) {
        $this->editorial = $editorial;
    }

    public function getNumeropublicacion() {
        return $this->numeropublicacion;
    }

    public function setNumeropublicacion($numeropublicacion) {
        $this->numeropublicacion = $numeropublicacion;
    }

    public function getPuntajeanio() {
        return $this->puntajeanio;
    }

    public function setPuntajeanio($puntajeanio) {
        $this->puntajeanio = $puntajeanio;
    }

    public function getFechaPublicacion() {
        return $this->fechaPublicacion;
    }

    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}

?>
