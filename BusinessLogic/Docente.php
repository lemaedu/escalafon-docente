<?php

class Docente {

//put your code here
    private $_cedula;
    private $_nombres;
    private $_apellidos;
    private $_fechanacimiento;
    private $_sexo;
    private $_nacionalidad;
    private $_telefono;
    private $_categoriadocente;
    private $_direccion;
    private $_fechaingreso;
    private $_foto;

    function __construct($_cedula, $_nombres, $_apellidos, $_fechanacimiento, $_sexo, $_nacionalidad, $_telefono, $_categoriadocente, $_direccion, $_fechaingreso, $_foto) {
        $this->_cedula = $_cedula;
        $this->_nombres = $_nombres;
        $this->_apellidos = $_apellidos;
        $this->_fechanacimiento = $_fechanacimiento;
        $this->_sexo = $_sexo;
        $this->_nacionalidad = $_nacionalidad;
        $this->_telefono = $_telefono;
        $this->_categoriadocente = $_categoriadocente;
        $this->_direccion = $_direccion;
        $this->_fechaingreso = $_fechaingreso;
        $this->_foto = $_foto;
    }

    public function get_cedula() {
        return $this->_cedula;
    }

    public function set_cedula($_cedula) {
        $this->_cedula = $_cedula;
    }

    public function get_nombres() {
        return $this->_nombres;
    }

    public function set_nombres($_nombres) {
        $this->_nombres = $_nombres;
    }

    public function get_apellidos() {
        return $this->_apellidos;
    }

    public function set_apellidos($_apellidos) {
        $this->_apellidos = $_apellidos;
    }

    public function get_fechanacimiento() {
        return $this->_fechanacimiento;
    }

    public function set_fechanacimiento($_fechanacimiento) {
        $this->_fechanacimiento = $_fechanacimiento;
    }

    public function get_sexo() {
        return $this->_sexo;
    }

    public function set_sexo($_sexo) {
        $this->_sexo = $_sexo;
    }

    public function get_nacionalidad() {
        return $this->_nacionalidad;
    }

    public function set_nacionalidad($_nacionalidad) {
        $this->_nacionalidad = $_nacionalidad;
    }

    public function get_telefono() {
        return $this->_telefono;
    }

    public function set_telefono($_telefono) {
        $this->_telefono = $_telefono;
    }

    public function get_categoriadocente() {
        return $this->_categoriadocente;
    }

    public function set_categoriadocente($_categoriadocente) {
        $this->_categoriadocente = $_categoriadocente;
    }

    public function get_direccion() {
        return $this->_direccion;
    }

    public function set_direccion($_direccion) {
        $this->_direccion = $_direccion;
    }

    public function get_fechaingreso() {
        return $this->_fechaingreso;
    }

    public function set_fechaingreso($_fechaingreso) {
        $this->_fechaingreso = $_fechaingreso;
    }

    public function get_foto() {
        return $this->_foto;
    }

    public function set_foto($_foto) {
        $this->_foto = $_foto;
    }

}

?>
