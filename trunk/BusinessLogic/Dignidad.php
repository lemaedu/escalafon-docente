<?php
/*
 * Entidad de negocio de tipo Dignidad
 */
class Dignidad{
  

    private $_puntajeanio;
    private $_puntaje;
    private $_descripcion;
   
    public function get_puntajeanio() {
        return $this->_puntajeanio;
    }

    public function set_puntajeanio($_puntajeanio) {
        $this->_puntajeanio = $_puntajeanio;
    }

    public function get_puntaje() {
        return $this->_puntaje;
    }

    public function set_puntaje($_puntaje) {
        $this->_puntaje = $_puntaje;
    }

    public function get_descripcion() {
        return $this->_descripcion;
    }

    public function set_descripcion($_descripcion) {
        $this->_descripcion = $_descripcion;
    }

    
    function __construct($_puntajeanio, $_puntaje,$_descripcion) {
        $this->_puntajeanio = $_puntajeanio;
        $this->_puntaje = $_puntaje;
        $this->_descripcion = $_descripcion;
    }

      

}
?>