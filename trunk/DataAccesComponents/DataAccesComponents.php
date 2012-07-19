<?php

include("DataAccesComponents/conectar.php");

//clase de conexion de acceso a datos

class DataAccesComponents {
    /*     * ******************************************************************
     * ************************************************************************     
     * <-----------------BLOQUE DE AGREGACIONES / INSERCIONES---------------->
     * ************************************************************************
     * ************************************************************************
     */
    /* Agregar Docente */

    public function agregarDocente(Docente $docente) {
        try {
            $link = conectarse();
            //le mando los parametros al procedimiento Almacenado 
            $cedula = $docente->get_cedula();
            $nombre = $docente->get_nombres();
            $apellidos = $docente->get_apellidos();
            $fechaNac = $docente->get_fechanacimiento();
            $sexo = $docente->get_sexo();
            $nacionalidad = $docente->get_nacionalidad();
            $telefono = $docente->get_telefono();
            $categoria = $docente->get_categoriadocente();
            $direccion = $docente->get_direccion();
            $fingreso = $docente->get_fechaingreso();
            $foto = $docente->get_foto();
            //Con los datos del Docente agrego a la tabla usuarios
            $Sql = "select sp_ingresarusuario('$cedula','$cedula','2')";
            $result = pg_query($link, $Sql);
            //Datos generales del Docente
            $Sql = "SELECT sp_ingresarDocente('$cedula','$nombre','$apellidos','$fechaNac','$sexo','$nacionalidad',
            '$telefono','$categoria','$direccion','$fingreso','$foto')";

            $result = pg_query($link, $Sql);
            return $result;
            pg_close($link);
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /*
     * Agregar Capacitacion
     */

    public function agregarCapacitacion(Capacitacion $capacitacion) {
        try {

            $cedula = $capacitacion->getCedula();
            $institucionCap = $capacitacion->getInstitucionCap();
            $temaCapacitacion = $capacitacion->getTemaCapacitacion();
            $tipo = $capacitacion->getTipo();
            $numeroHoras = $capacitacion->getNumeroHoras();
            $numeroDias = $capacitacion->getNumeroDias();
            $puntos = $capacitacion->getPuntos();
            $fecha = $capacitacion->getFecha();
            $descripcion = $capacitacion->getDescripcion();
            
            $link = Conectarse();

            $Sql = "select sp_ingresarCapacitacion('$cedula','$institucionCap','$temaCapacitacion','$tipo',
            '$numeroHoras','$numeroDias','$puntos','$fecha','$descripcion')";
            $result = pg_query($link, $Sql);
            
            return $result;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /*
     * Agregar Formacion
     */

    public function agregarFormacion(Capacitacion $capacitacion) {
        try {
            $link = conectarse();
            //le mando los parametros al procedimiento Almacenado             
            $cedula = $capacitacion->getCedula();
            $nstitucionCap = $capacitacion->getInstitucionCap();
            $nivelEducacion = $capacitacion->getNivelEducacion();
            $codigoRefrendacion = $capacitacion->getCodigoRefrendacion();
            $numPaginaRegistro = $capacitacion->getNumPaginaRegistro();
            $puntos = $capacitacion->getPuntos();
            $fechaRegistro = $capacitacion->getFechaRegistro();
            $fechaEntrega = $capacitacion->getFechaEntrega();
            $descripcion = $capacitacion->getDescripcion();
            $Sql = "SELECT sp_ingresarformacion('$cedula','$nstitucionCap',$nivelEducacion','$codigoRefrendacion',
            '$numPaginaRegistro','$puntos','$fechaRegistro','$fechaEntrega','$descripcion')";
            $result = pg_query($link, $Sql);

            return $result;
            pg_close($link);
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /*
     * Agregar Actividad
     */

    public function agregarActividad(Actividad $actividad) {
        try {
            $nombre = $actividad->get_nombre();
            $descripcion = $actividad->get_descripcion();

            $link = Conectarse();

            $Sql = "select sp_ingresarActividad('$nombre','$descripcion')";
            $result = pg_query($link, $Sql);

            return $result;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /*
     * Agregar Ascenso
     */

    public function agregarAscenso(Ascenso $ascenso) {
        try {

            $nivel = $ascenso->get_nivel();
            $estado = $ascenso->get_estado();
            $link = Conectarse();
            $Sql = "select sp_ingresarAscenso('$nivel','$estado')";
            $result = pg_query($link, $Sql);
            return $result;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /*
     * Agregar Dignidad
     */

    public function agregarDignidad(Dignidad $dignidad) {
        try {
            $puntajeanio = $dignidad->get_puntajeanio();
            $puntaje = $dignidad->get_puntaje();
            $descripcion = $dignidad->get_descripcion();
            $link = Conectarse();

            $Sql = "select sp_ingresardignidad('$puntajeanio','$puntaje','$descripcion')";
            $result = pg_query($link, $Sql);
            return $result;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /*
     * Agregar Dignidad
     */

    public function agregarUsuario(Usuario $usuario) {
        try {
            $user = $usuario->get_usuario();
            $password = $usuario->get_password();
            $rol = $usuario->get_rol();
            $link = Conectarse();
            //busco el codigo del rol en la tabla accion
            $rolcod = "select codigoaccion from accion where descripcion = '" . $rol . "'";
            $resultaccion = pg_query($link, $rolcod);
            //almaceno el valor de la columna devuelta
            $rol = pg_fetch_array($resultaccion);
            $rolq = $rol["codigoaccion"];
            //ingreso los datos una vez obtenido el codigo del rol
            $Sql = "select sp_ingresarusuario('$user','$password','$rolq')";
            $result = pg_query($link, $Sql);
            return $result;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    public function agregarPublicacion(Publicaciones $publicaciones) {
        try {
            $area = $publicaciones->getArea();
            $editorial = $publicaciones->getEditorial();
            $descripcion = $publicaciones->getDescripcion();
            $tipo_publicacion = $publicaciones->getTipo_publicacion();
            $numeropublicacion = $publicaciones->getNumeropublicacion();
            $puntajeanio = $publicaciones->getPuntajeanio();
            $link = conectarse();

            $Sql = "SELECT sp_ingresarPublicacion('$area','$tipo_publicacion','$editorial','$numeropublicacion','$puntajeanio','$descripcion')";

            $result = pg_query($link, $Sql);
            return $result;

            pg_close($link);
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    public function listarFormacion() {
        try {
            $link = conectarse();
            $sql = "select * from formacion";
            $result = pg_exec($link, $sql);
            while ($row = pg_fetch_array($result)) {
                $formacion[] = $row;
            }
            return $formacion;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function listarActividad() {
        try {
            $link = conectarse();
            $sql = "select * from actividades";
            $result = pg_exec($link, $sql);
            while ($row = pg_fetch_array($result)) {
                $tupla[] = $row;
            }
            return $tupla;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function listarUsuario() {
        try {
            $link = conectarse();
            $sql = "select * from usuarios";
            $result = pg_exec($link, $sql);
            while ($row = pg_fetch_array($result)) {
                //$sql = "select descripcion from accion where codigoaccion = '".$row["accion"]."'";
                //$result = pg_exec($link, $sql);
                //$row = pg_fetch_array($result);
                //$row2 = $row["descripcion"]; 
                $tupla[] = $row;
            }
            return $tupla;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function listarAscenso() {
        try {
            $link = conectarse();
            $sql = "select * from ascenso";
            $result = pg_exec($link, $sql);
            while ($row = pg_fetch_array($result)) {
                $tupla[] = $row;
            }
            return $tupla;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function listarPublicacion() {
        try {
            $link = conectarse();
            $sql = "select * from publicaciones";
            $result = pg_exec($link, $sql);
            while ($row = pg_fetch_array($result)) {
                $tupla[] = $row;
            }
            return $tupla;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function listarCapacitacion() {
        try {
            $link = conectarse();
            $sql = "select * from capacitacion";
            $result = pg_exec($link, $sql);
            while ($row = pg_fetch_array($result)) {
                $tupla[] = $row;
            }
            return $tupla;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function listarDocente() {
        try {
            $link = conectarse();
            $sql = "select * from docente";
            $result = pg_exec($link, $sql);
            while ($row = pg_fetch_array($result)) {
                $tupla[] = $row;
            }
            return $tupla;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    /*     * ******************************************************************
     * ************************************************************************     
     * <-----------------BLOQUE DE MODIFICAR /  ELIMINAR---------------->
     * ************************************************************************
     * ************************************************************************
     */

    public function modificarDocente(Docente $docente) {
        try {
            $cedula = $docente->get_cedula();
            $nombre = $docente->get_nombres();
            $apellidos = $docente->get_apellidos();
            $fechaNac = $docente->get_fechanacimiento();
            $sexo = $docente->get_sexo();
            $nacionalidad = $docente->get_nacionalidad();
            $telefono = $docente->get_telefono();
            $categoria = $docente->get_categoriadocente();
            $direccion = $docente->get_direccion();
            $fingreso = $docente->get_fechaingreso();
            $foto = $docente->get_foto();

            $link = conectarse();

            $sql = "SELECT sp_modificarDocente('$cedula','$nombre','$apellidos',
                    '$fechaNac','$sexo','$nacionalidad','$telefono',
                    '$categoria','$direccion','$fingreso','$foto')";
            $num = pg_exec($link, $sql);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    /*     * ******************************************************************
     * ************************************************************************     
     * <-----------------BLOQUE DE ELIMINAR ---------------->
     * ************************************************************************
     * ************************************************************************
     */

    public function eliminarDocentes($cedula) {
        try {
            $cedulaEliminar = $cedula;
            $link = Conectarse();
            $sql = "SELECT sp_eliminarDocente('$cedulaEliminar')";
            $num = pg_exec($link, $sql);
            return $num;
            pg_free_result($num);
            pg_close($link);
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    /*     * ******************************************************************
     * ************************************************************************     
     * <-----------------BLOQUE DE BUSCAR / INSERCIONES---------------->
     * ************************************************************************
     * ************************************************************************
     */

    public function buscarDocentes($op, $dato) {

        try {
            $datoBuscar = $dato;
            $opSql = $op;
            $link = Conectarse();

            $sql2 = "SELECT * FROM docente where apellidos like'$datoBuscar%';";
            switch ($op) {
                case 1:$sql = "SELECT * FROM docente where cedula='$datoBuscar';";
                    $result = pg_exec($link, $sql);
                    break;
                case 2:$sql = "SELECT * FROM docente where apellidos like'$datoBuscar%';";
                    $result = pg_exec($link, $sql);
                    break;
            }

            while ($row = pg_fetch_array($result)) {
                $lista[] = $row;
            }

            return $lista;

            pg_free_result($result);
            pg_close($link);
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function buscarUsuario($user, $password) {
        try {
            $link = Conectarse();

            $sql = "select login,clave,accion from usuarios where login = '" . $user . "' and clave = '" . $password . "'";
            $result = pg_exec($link, $sql);

            $row = pg_fetch_array($result);
            return $row;

            pg_free_result($result);
            pg_close($link);
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

}

?>