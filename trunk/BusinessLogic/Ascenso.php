<?php
/*
 * Entidad de negocio de tipo Actividad
 */
class Ascenso{
  

    private $_nivel;
    private $_estado;
   
    public function get_nivel() {
        return $this->_nivel;
    }

    public function set_nivel($_nivel) {
        $this->_nivel = $_nivel;
    }

    public function get_estado() {
        return $this->_estado;
    }

    public function set_estado($_estado) {
        $this->_estado = $_estado;
    }

    function __construct($_nivel, $_estado) {
        $this->_nivel = $_nivel;
        $this->_estado = $_estado;
    }

      

}
?>