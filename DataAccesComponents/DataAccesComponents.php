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
            $institucionCap = $capacitacion->get_institucionCap();
            $temacapacitacion = $capacitacion->get_temaCap();
            $puntos = $capacitacion->get_puntos();
            $descripcion = $capacitacion->get_descripcion();
            $link = Conectarse();

            $Sql = "select sp_ingresarcapacitacion('$institucionCap','$temacapacitacion','$puntos','$descripcion')";
            $result = pg_query($link, $Sql);
            return $result;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /*
     * Agregar Formacion
     */

    public function agregarFormacion(Formacion $formacion) {
        try {
            $link = conectarse();
            //le mando los parametros al procedimiento Almacenado 

            $nivelEducacion = $formacion->getNivelEducacion();
            $codigoRefrendacion = $formacion->getCodigoRefrendacion();
            $numPaginaRegistro = $formacion->getNumPaginaRegistro();
            $puntos = $formacion->getPuntos();
            $fechaIngreso = $formacion->getFechaIngreso();
            $descripcion = $formacion->getDescripcion();

            $Sql = "SELECT sp_ingresarFormacion('$nivelEducacion','$codigoRefrendacion','$numPaginaRegistro','$puntos','$fechaIngreso','$descripcion')";

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

}

?>