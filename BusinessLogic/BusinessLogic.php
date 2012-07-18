<?php

require_once ("DataAccesComponents/DataAccesComponents.php");
//Incluimos librerias segun sea necesario del BussinessLogic
require_once ("BusinessLogic/Docente.php");
require_once ("BusinessLogic/Capacitacion.php");
require_once ("BusinessLogic/Formacion.php");
require_once ("BusinessLogic/Actividad.php");
require_once ("BusinessLogic/Ascenso.php");
require_once ("BusinessLogic/Publicaciones.php");
require_once ("BusinessLogic/Dignidad.php");

//require_once ("BusinessLogic/FormacionDocente.php");
//require_once ("BusinessLogic/PublicacionesDocente.php");


class BusinessLogic {
    /*     * ***********************************************************************
     * ************************************************************************     
     * <-----------------BLOQUE DE AGREGACIONES / INSERCIONES---------------->
     * ************************************************************************
     * ************************************************************************
     */
    /* Agregar Docente */

    public function agregarDocente($cedula, $nombre, $apellidos, $fechaNac, $sexo, $nacionalidad, $telefono, $categoria, $direccion, $fingreso, $foto) {
        try {
            $docente = new Docente($cedula, $nombre, $apellidos, $fechaNac,
                            $sexo, $nacionalidad, $telefono, $categoria, $direccion, $fingreso, $foto);

            $dat = new DataAccesComponents();
            $num = $dat->agregarDocente($docente);

            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /* Agregar Capacitacion */

    public function agregarCapacitacion($institucionCap, $temaCap, $puntos, $descripcion) {
        try {
            $capacitacion = new Capacitacion($institucionCap, $temaCap, $puntos, $descripcion);

            $data = new DataAccesComponents();
            $num = $data->agregarCapacitacion($capacitacion);

            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /* Agregar Actividad */

    public function agregarActividad($nombre, $descripcion) {
        try {
            $actividad = new Actividad($nombre, $descripcion);
            $data = new DataAccesComponents();

            $num = $data->agregarActividad($actividad);

            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /* Agregar Publicaciones */

    public function agregarPublicaciones($area, $editorial, $descripcion, $tipo_publicacion, $numeropublicacion, $puntajeanio) {
        try {
            $publicaciones = new Publicaciones($area, $editorial, $descripcion, $tipo_publicacion, $numeropublicacion, $puntajeanio);
            $data = new DataAccesComponents();
            $num = $data->AgregarPublicacion($publicaciones);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /* Agregar Ascensos */

    public function agregarAscenso($nivel, $estado) {
        try {
            $ascenso = new Ascenso($nivel, $estado);
            $data = new DataAccesComponents();
            $num = $data->agregarAscenso($ascenso);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    /**
     * Lista de Actividades
     * @param  $cedulas
     * @return array  activiades
     */
    public function getListarActividad() {
        try {
            $dataAccess = new DataAccesComponents();
            $data = $dataAccess->listarActividad();
            if ($data != NULL) {
                foreach ($data as $col) {
                    $datos[] = new Actividad($col[1], $col[2]);
                }
            }
            return $datos;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function editarActividad($codigo, $nombre) {
        try {
            $actividad = new Actividad($codigo, $nombre);
            $data = new DataAccesComponents();
            $num = $data->editarActividad($actividad);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    public function getListaAscenso($cedula) {
        try {
            $dataAcces = new DataAccesComponents();
            $actividadesData = $dataAcces->getListaActividades($cedula);
            if ($actividadesData != null) {
                foreach ($actividadesData as $row) {
                    $actividades[] = new Actividad($row['0'], $row['1']);
                }
            }
            return $actividades;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function modificarDocente($cedula, $nombre, $apellidos, $fechaNac, $sexo, $nacionalidad, $telefono, $categoria, $direccion, $fingreso, $foto) {
        try {
            $docente = new Docente($cedula, $nombre, $apellidos, $fechaNac,
                            $sexo, $nacionalidad, $telefono, $categoria,
                            $direccion, $fingreso, $foto);
            $dat = new DataAccesComponents();
            $num = $dat->actualizarDocentes($docente);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron Actualizar los datos Error" . $ex->getMessage();
        }
    }

    public function eliminarDocente($cedula) {
        try {
            $dataAccess = new DataAccesComponents();
            $docenteEliminar = $dataAccess->eliminarDocentes($cedula);
            return $docenteEliminar;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getListaDocentes() {
        try {
            $dataAcces = new DataAccesComponents();
            $docentesData = $dataAcces->listarDocentes();
            if ($docentesData != NULL) {
                foreach ($docentesData as $col) {
                    $docentes[] = new Docente($col[0], $col[1], $col[2], $col[3], $col[4], $col[5],
                                    $col[6], $col[7], $col[8], $col[9], $col[10], $col[11]);
                }
            }
            return $docentes;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function agregarFormacion($nivelEducacion, $codigoRefrendacion, $numPaginaRegistro, $puntos, $fechaIngreso, $descripcion) {
        try {
            $formacion = new Formacion($nivelEducacion, $codigoRefrendacion, $numPaginaRegistro, $puntos, $fechaIngreso, $descripcion);

            $dat = new DataAccesComponents();
            $num = $dat->agregarFormacion($formacion);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    public function agregarDignidad($duracionanio, $puntaje, $descripcion) {
        try {
            $dignidad = new Dignidad($duracionanio, $puntaje, $descripcion);

            $dat = new DataAccesComponents();
            $num = $dat->agregarDignidad($dignidad);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    public function getListarFormacion() {
        try {
            $dataAcces = new DataAccesComponents();
            $dataFormacion = $dataAcces->listarFormacion();
            if ($dataFormacion != NULL) {
                foreach ($dataFormacion as $col) {
                    $datos[] = new Formacion($col[1], $col[2], $col[3], $col[4], $col[5], $col[6]);
                }
            }
            return $datos;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function getListarDignidad() {
        try {
            $dataAcces = new DataAccesComponents();
            $data = $dataAcces->listarDignidad();
            if ($data != NULL) {
                foreach ($data as $col) {
                    $datos[] = new Dignidad($col[1], $col[2], $col[3]);
                }
            }
            return $datos;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function getListarAscenso() {
        try {
            $dataAcces = new DataAccesComponents();
            $data = $dataAcces->listarAscenso();
            if ($data != NULL) {
                foreach ($data as $col) {
                    $datos[] = new Ascenso($col[1], $col[2]);
                }
            }
            return $datos;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function editarFormacion($nivelEducacion, $codigoRefrendacion, $numPaginaRegistro, $puntos, $fechaIngreso, $descripcion) {
        try {
            $formacion = new Formacion($nivelEducacion, $codigoRefrendacion, $numPaginaRegistro, $puntos, $fechaIngreso, $descripcion);
            $dat = new DataAccesComponents();
            $num = $dat->actualizarDocentes($formacion);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron Actualizar los datos Error" . $ex->getMessage();
        }
    }

    public function agregarFormacionDocente($cedulaDocente, $codigoFormacion, $fechaRegistro, $descripcion) {
        try {

            $formacionDocente = new FormacionDocente($cedulaDocente, $codigoFormacion, $fechaRegistro, $descripcion);

            $data = new DataAccesComponents();
            $num = $data->AgregarFormacionDocente($formacionDocente);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    public function getListarFormacionDocente() {
        try {
            $dataAcces = new DataAccesComponents();
            $dataFormacionDocente = $dataAcces->listarFormacionDocente();
            if ($dataFormacionDocente != NULL) {
                foreach ($dataFormacionDocente as $col) {
                    $datos[] = new FormacionDocente($col[0], $col[1], $col[2], $col[3], $col[4]);
                }
            }
            return $datos;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function getListarPublicacion() {     
        try {
            $dataAccess = new DataAccesComponents();
            $data = $dataAccess->listarPublicacion();
            if ($data != NULL) {
                foreach ($data as $col) {
                    $datos[] = new Publicaciones($col[1], $col[2],$col[3],$col[4],$col[5],$col[6]);
                }
            }
            return $datos;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }
 public function getListarCapacitacion() {     
        try {
            $dataAccess = new DataAccesComponents();
            $data = $dataAccess->listarCapacitacion();
            if ($data != NULL) {
                foreach ($data as $col) {
                    $datos[] = new Capacitacion($col[1], $col[2],$col[3],$col[4]);
                }
            }
            return $datos;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }
    public function agregarPublicacionesDocente($cedulaDocente, $codigoPublicacion, $fecha, $descripcion) {
        try {
            $publicacionesDocente = new PublicacionesDocente($cedulaDocente, $codigoPublicacion, $fecha, $descripcion);
            $data = new DataAccesComponents();
            $num = $data->AgregarPublicacionesDocente($publicacionesDocente);
            return $num;
        } catch (Exception $ex) {
            echo "No se pudo pudieron ingresar los datos Error" . $ex->getMessage();
        }
    }

    public function getListarPublicacionesDocente() {
        try {
            $dataAcces = new DataAccesComponents();
            $data = $dataAcces->listarPublicacionesDocente();
            if ($data != NULL) {
                foreach ($data as $col) {
                    $datos[] = new PublicacionesDocente($col[0], $col[1], $col[2], $col[3]);
                }
            }
            return $datos;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

    public function getListaCapacitaciones($cedula) {
        try {
            $dataAcces = new DataAccesComponents();
            $actividadesData = $dataAcces->getListaCapacitacion($cedula);
            if ($actividadesData != null) {
                foreach ($actividadesData as $row) {
                    $actividades[] = new Actividad($row['0'], $row['1']);
                }
            }
            return $actividades;
        } catch (Exception $ex) {
            echo "No se pudo pudieron obtener los datos Error" . $ex->getMessage();
        }
    }

}

?>
