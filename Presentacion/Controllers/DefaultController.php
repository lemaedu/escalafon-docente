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
            case "LoginUsuario":$this->ShowLoginUsuario();
                break;
            case "Administrador":$this->ShowAdministrador();
                break;
            case "Usuario":$this->ShowUsuario();
                break;
//------- TODAS LAS FUNCIONES PARA DOCENTE-------------------            
            case "IngresarDocente":$this->ShowIngresarDocente();
                break;
            case "BuscarDocente":$this->ShowBuscarDocente();
                break;
            case "ListarDocente":$this->ShowListarDocente();
                break;
            case "ModificarDocente":$this->ShowModificarDocente();
                break;
            case "EliminarDocente":$this->ShowEliminarDocente();
                break;
            case "IngresarCapacitacion":$this->ShowIngresarCapacitacion();
                break;
            case "ListarCapacitacion":$this->ShowListarCapacitacion();
                break;
            case "BuscarDocentes_todo":$this->BuscarDocentes_todo();
                break;
            case "BuscarDocentesCap":$this->BuscarDocentesCap();
                break;
            case "BuscarDocentesPublicacion":$this->BuscarDocentesPublicacion();
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
            case "ListarAscenso":$this->ShowListarAscenso();
                break;
            case "IngresarPublicaciones":$this->ShowIngresarPublicacion();
                break;
            case "ListarPublicacion":$this->ShowListarPublicacion();
                break;
            case "IngresarDignidad":$this->ShowIngresarDignidad();
                break;
            case "ListarDignidad":$this->ShowListarDignidad();
                break;
            case "IngresarUsuario":$this->ShowIngresarUsuario();
                break;
            case "ListarUsuario":$this->ShowListarUsuario();
                break;
            case "Logout":$this->ShowLogout();
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
    public function ShowLoginUsuario() {
        require_once 'Presentacion/Vista/LoginUsuario.php';
    }

    public function ShowLogout() {
        require_once 'Presentacion/Vista/Logout.php';
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
     * LLAMAMOS A LA PAGINA BUSCAR docente
     */

    public function ShowBuscarDocente() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/BuscarDocente.php';
        //require_once 'piedepagina.php';
    }

    public function ShowModificarDocente() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/ModificarDocente.php';
        //require_once 'piedepagina.php';
    }

    public function ShowEliminarDocente() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/EliminarDocente.php';
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

    public function BuscarDocentes_todo() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/BuscarDocentes_todo.php';
        //require_once 'piedepagina.php';
    }

    public function BuscarDocentesCap() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/BuscarDocentesCap.php';
        //require_once 'piedepagina.php';
    }

    public function BuscarDocentesPublicacion() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/BuscarDocentesPublicacion.php';
        //require_once 'piedepagina.php';
    }

    

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

    public function ShowListarPublicacion() {
        $businessLogic = new BusinessLogic();
        $lista = $businessLogic->getListarPublicacion();
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/ListarPublicacion.php';
        //require_once 'piedepagina.php';
    }

    public function ShowListarCapacitacion() {
        $businessLogic = new BusinessLogic();
        $lista = $businessLogic->getListarCapacitacion();
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/ListarCapacitacion.php';
        //require_once 'piedepagina.php';
    }

    public function ShowListarDocente() {
        $businessLogic = new BusinessLogic();
        $lista = $businessLogic->getListarDocente();
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/ListarDocente.php';
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

    public function ShowListarAscenso() {
        //$actividades = $businessLogic->getListaActividades($_GET['cedula']);
        $businessLogic = new BusinessLogic();
        $lista = $businessLogic->getListarAscenso();
        require_once 'encabezado.php';
        require_once ("Presentacion/Vista/ListarAscenso.php");
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
     * LLAMAMOS A LA PAGINA Ingresar Usuario
     */

    public function ShowIngresarUsuario() {
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/IngresarUsuario.php';
        //require_once 'piedepagina.php';
    }

    public function ShowListarUsuario() {
        $businessLogic = new BusinessLogic();
        $lista = $businessLogic->getListarUsuario();
        require_once 'encabezado.php';
        require_once 'Presentacion/Vista/ListarUsuario.php';
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
