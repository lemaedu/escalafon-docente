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

    private $area;
    private $editorial;
    private $descripcion;
    private $tipo_publicacion;
    private $numeropublicacion;
    private $puntajeanio;

    function __construct($area, $editorial, $descripcion, $tipo_publicacion, $numeropublicacion, $puntajeanio) {

        $this->area = $area;
        $this->editorial = $editorial;
        $this->descripcion = $descripcion;
        $this->tipo_publicacion = $tipo_publicacion;
        $this->numeropublicacion = $numeropublicacion;
        $this->puntajeanio = $puntajeanio;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getEditorial() {
        return $this->editorial;
    }

    public function setEditorial($editorial) {
        $this->editorial = $editorial;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getTipo_publicacion() {
        return $this->tipo_publicacion;
    }

    public function setTipo_publicacion($tipo_publicacion) {
        $this->tipo_publicacion = $tipo_publicacion;
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

}

?>
