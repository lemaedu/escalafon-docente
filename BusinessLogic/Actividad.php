<?php

/*
 * Entidad de negocio de tipo Actividad
 */

class Actividad {

    private $_codigo;
    private $_cedula;
    private $_horas;
    private $_nombre;
    private $_descripcion;

    function __construct($_codigo, $_cedula, $_horas, $_nombre, $_descripcion) {
        $this->_codigo = $_codigo;
        $this->_cedula = $_cedula;
        $this->_horas = $_horas;
        $this->_nombre = $_nombre;
        $this->_descripcion = $_descripcion;
    }

    public function get_codigo() {
        return $this->_codigo;
    }

    public function set_codigo($_codigo) {
        $this->_codigo = $_codigo;
    }

    public function get_cedula() {
        return $this->_cedula;
    }

    public function set_cedula($_cedula) {
        $this->_cedula = $_cedula;
    }

    public function get_horas() {
        return $this->_horas;
    }

    public function set_horas($_horas) {
        $this->_horas = $_horas;
    }

    public function get_nombre() {
        return $this->_nombre;
    }

    public function set_nombre($_nombre) {
        $this->_nombre = $_nombre;
    }

    public function get_descripcion() {
        return $this->_descripcion;
    }

    public function set_descripcion($_descripcion) {
        $this->_descripcion = $_descripcion;
    }

}

?>