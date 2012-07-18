<?php

/*
 * Entidad de negocio de tipo Actividad
 */

class Capacitacion {

    private $_institucionCap;
    private $_temaCap;
    private $_puntos;
    private $_descripcion;

    public function get_institucionCap() {
        return $this->_institucionCap;
    }

    public function set_institucionCap($_institucionCap) {
        $this->_institucionCap = $_institucionCap;
    }

    public function get_temaCap() {
        return $this->_temaCap;
    }

    public function set_temaCap($_temaCap) {
        $this->_temaCap = $_temaCap;
    }

    public function get_puntos() {
        return $this->_puntos;
    }

    public function set_puntos($_puntos) {
        $this->_puntos = $_puntos;
    }

    public function get_descripcion() {
        return $this->_descripcion;
    }

    public function set_descripcion($_descripcion) {
        $this->_descripcion = $_descripcion;
    }

    function __construct($_institucionCap, $_temaCap, $_puntos, $_descripcion) {
        $this->_institucionCap = $_institucionCap;
        $this->_temaCap = $_temaCap;
        $this->_puntos = $_puntos;
        $this->_descripcion = $_descripcion;
    }



            
}

?>
