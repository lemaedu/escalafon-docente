<?php
/*
 * Entidad de negocio de tipo Actividad
 */
class Actividad{

    private $_nombre;
    private $_descripcion;
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

    function __construct($_nombre, $_descripcion) {
        $this->_nombre = $_nombre;
        $this->_descripcion = $_descripcion;
    }

    

    
}
?>