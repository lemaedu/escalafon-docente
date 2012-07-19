<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="Recursos/js/popcalendar.js"></script>
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />        
        <title></title>
    </head>
    <body>       
        <script type="text/javascript">                     
        </script>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=agregarCargoDocente" class="iform" name="form1" enctype="multipart/form-data">                    
                    <ul>
                        <li class="iheader">Agregar Cargos a Docentes</li>
                        <li><label for="">*Docente</label>
                            <select required = "si" name = "cedulaDocente" id = "sexo">
                                <?php
                                require_once("DataAccesComponents/conectar.php");
                                $link = conectarse();
                                $sql = "Select cedula, nombres || ' ' || apellidos as Nombres From docente;";
                                $resConsulta = pg_exec($link, $sql);
                                if (!$resConsulta) {
                                    die("Error in SQL query:" . pg_last_error());
                                }
                                while ($row = pg_fetch_array($resConsulta)) {
                                    echo "<option value=". $row[0].">$row[1]</option>";
                                }
                                ?>      
                            </select>
                        </li>

                        <li><label for="">*Dignidad</label>
                            <select required = "si" name = "codigoCargo" id = "cargo">
                                <?php
                                $sql1 = "Select codigoCargo, descripcion From dignidades;";
                                $resConsulta1 = pg_exec($link, $sql1);
                                while ($row = pg_fetch_array($resConsulta1)) {
                                    echo "<option value=" . $row[0] . ">$row[1]</option>";
                                }
                                ?> 
                            </select>
                        </li>                  
                        <li><label for="fecha">*Fecha de Registro del T&iacute;tulo</label>
                            <input class="itext" type="text" name="fecha" onClick="popUpCalendar(this, form1.fecha, 'yyyy-mm-dd');" required="si"/>
                        </li> 

                        <li><label for="descripcion">*Descripci&oacute;n</label>
                            <textarea class="itextarea" name="descripcion" id="direccion" required="si"></textarea>
                        </li>
                        <li><label>&nbsp;</label>
                            <input type="submit" class="ibutton" name="ingreso" id="enviar" value="Ingresar Datos"/>
                            <input type="reset" class="ibutton" value="Borrar Todo" />
                        </li>
                    </ul></form>
            </div>
        </div>
        <?php
        if (isset($_POST['ingreso'])) {

            $cedula = $_POST["cedula"];
            $institucionCap = $_POST["institucionCap"];
            $temaCapacitacion = $_POST["temaCapacitacion"];
            $tipo = $_POST["tipo"];
            $numeroHoras = $_POST["numeroHoras"];
            $numeroDias = $_POST["numeroDias"];
            $puntos = $_POST["puntos"];
            $fecha = $_POST["fecha"];
            $descripcion = $_POST["descripcion"];

            $business = new BusinessLogic();
            $op = $business->agregarCapacitacion($cedula, strtoupper($institucionCap), strtoupper($temaCapacitacion), $tipo, $numeroHoras, $numeroDias, $puntos, $fecha, $descripcion);
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>