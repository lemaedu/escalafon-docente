<?php
/*
 * Entidad de negocio de tipo Actividad
 */
class Usuario{

    private $_usuario;
    private $_password;
    private $_rol;
    
    public function get_usuario() {
        return $this->_usuario;
    }

    public function set_usuario($_usuario) {
        $this->_usuario = $_usuario;
    }

    public function get_password() {
        return $this->_password;
    }

    public function set_password($_password) {
        $this->_password = $_password;
    }

    public function get_rol() {
        return $this->_rol;
    }

    public function set_rol($_rol) {
        $this->_rol = $_rol;
    }

    
    function __construct($_usuario, $_password,$_rol) {
        $this->_usuario = $_usuario;
        $this->_password = $_password;
        $this->_rol = $_rol;
    }

    

    
}
?>