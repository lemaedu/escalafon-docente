<?php

//LLAMADA A LAS LIBRERIAS DE LOGICA DE NEGOCIOS
require_once ("BusinessLogic/BusinessLogic.php");

/**
 * Clase de Presentacion
 */
class DefaultController {

//    ATRIBUTO QUE SE UTILIZA PARA REALIZA LAS NAVEGACIONES
    private $_task;

//    CONSTRUCTOR CON PARAMETROS
    public function __construct($task) {
        $this->_task = $task;
//        echo ($this->_task);
    }

    /**
     * Metod usado para la navegacion
     */
    public function renderize() {
        switch ($this->_task) {
            case "Actividades":$this->ShowActividades();
                break;
            case "UpdateActividades":$this->ShowUpdateActividades();
                break;            
            case "EditarActividades":$this->ShowEditarActividades();
                break;
            case "LoginUsuario":$this->ShowLoginFormulario();
                break;
            case "Administrador":$this->ShowAdministrador();
                break;
            case "Usuario":$this->ShowUsuario();
                break;
            case "IngresarDocente":$this->ShowIngresarDocente();
                break;
            case "ModificarDocente":$this->ShowModificarDocente();
                break;
            case "IngresarCapacitacion":$this->ShowIngresarCapacitacion();
                break;
            case "IngresarFormacion":$this->ShowIngresarFormacion();
                break;
            case "ListarFormacion":$this->ShowListarFormacion();
                break;
            case "IngresarActividad":$this->ShowIngresarActividad();
                break;
            case "ListarActividad":$this->ShowListarActividad();
                break;
            case "IngresarAscenso":$this->ShowIngresarAscenso();
                break;
            case "IngresarPublicacion":$this->ShowIngresarPublicacion();
                break;
            case "IngresarDignidad":$this->ShowIngresarDignidad();
                break;
            case "ListarDignidad":$this->ShowListarDignidad();
                break;
            default:$this->default1();
                break;
        }
    }

    /**
     * Metodo par apresentar la pagina principal
     */
    /*
     * FUNCION PARA MOSTRAR LA PAGINA DE ADMINISTRACION
     */
    public function ShowActividades() {
        require_once 'cabecera.php';
        require_once ("Presentacion/Vista/Ingresar Actividad.php");
    }

    public function ShowUpdateActividades() {
        $nombre = $_POST['nombre'];
        $codigo = $_POST['codigo'];
        $business = new BusinessLogic();
        $num = $business->editarActividad($codigo, $nombre);
        if ($num != 0) {
            require_once 'cabecera.php';
            require_once ("Presentacion/Vista/Update Oferta.php");
        }
    }

    public function ShowListarActividad() {        
        //$actividades = $businessLogic->getListaActividades($_GET['cedula']);
        $businessLogic = new BusinessLogic();
        $actividad = $businessLogic->getListarActividad();
        require_once 'encabezado.php';        
        require_once ("Presentacion/Vista/ListarActividad.php");
    }

    public function ShowEditarActividades() {
        $businessLogic = new BusinessLogic();
//     $actividades=$businessLogic->editarActividad($_GET['codigo'],$_GET['nombre']);
        require_once 'cabecera.php';
        require_once ("Presentacion/Vista/EditarActividad.php");
    }

//    public function ShowManager()
//    {
//        if (isset($_SESSION['usuario_valido'])) {
//
//        require_once ("Presentacion/Vista/Administracion.php");
//        } else
//            require_once ("Presentacion/Vista/Default.php");
//
//    }   
    /*
     * LLAMAMOS A LA PAGINA LOGIN
     */
    public function ShowLoginFormulario() {
        require_once 'Presentacion/Vista/LoginUsuario.php';
    }

//    FUNCION PARA MOSTRAR LA PAGINA POE DEFECTO
    public function default1() {
        //presentar la vista de informacion
        require_once 'encabezado.php';
        //require_once 'index.html';
        require_once ("Presentacion/Vista/Default.php");
        require_once 'cuerpopaginadefault.php';
        require_once 'piedepagina.php';
    }

    /*
     * LLAMAMOS A LA PAGINA USUARIO
     */

    public function ShowUsuario() {
        require_once 'Presentacion/Vista/Usuario.php';
    }

    /*
     * LLAMAMOS A LA PAGINA LOGIN
     */

    public function ShowAdministrador() {
        require_once 'Presentacion/Vista/Administrador.php';
    }

    /*
     * LLAMAMOS A LA PAGINA Ingresar docente
     */

    public function ShowIngresarDocente() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/IngresarDocente.php';
        //require_once 'piedepagina.php';
    }

    /*
     * LLAMAMOS A LA PAGINA Modificar docente
     */

    public function ShowModificarDocente() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/ModificarDocente.php';
        //require_once 'piedepagina.php';
    }

    /*
     * LLAMAMOS A LA PAGINA Ingresar Capacitacion
     */

    public function ShowIngresarCapacitacion() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/IngresarCapacitacion.php';
        //require_once 'piedepagina.php';
    }

    /*
     * Llamamos a las paginas de la seccion Formaciones
     */

    public function ShowIngresarFormacion() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/IngresarFormacion.php';
        //require_once 'piedepagina.php';
    }

    public function ShowListarFormacion() {
        $businessLogic = new BusinessLogic();
        $formacion = $businessLogic->getListarFormacion();
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/ListarFormacion.php';
        //require_once 'piedepagina.php';
    }

    /*
     * LLAMAMOS A LA PAGINA Ingresar Actividad
     */

    public function ShowIngresarActividad() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/IngresarActividad.php';
        //require_once 'piedepagina.php';
    }

    /*
     * LLAMAMOS A LA PAGINA Ingresar Ascenso
     */

    public function ShowIngresarAscenso() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/IngresarAscenso.php';
        //require_once 'piedepagina.php';
    }

    /*
     * LLAMAMOS A LA PAGINA Ingresar Ascenso
     */

    public function ShowIngresarPublicacion() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/IngresarPublicacion.php';
        //require_once 'piedepagina.php';
    }
    /*
     * LLAMAMOS A LA PAGINA Ingresar Dignidad
     */

    public function ShowIngresarDignidad() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/IngresarDignidad.php';
        //require_once 'piedepagina.php';
    }
    public function ShowListarDignidad() {        
        //$actividades = $businessLogic->getListaActividades($_GET['cedula']);
        $businessLogic = new BusinessLogic();
        $lista = $businessLogic->getListarDignidad();
        require_once 'encabezado.php';        
        require_once ("Presentacion/Vista/ListarDignidad.php");
    }

}

?>
