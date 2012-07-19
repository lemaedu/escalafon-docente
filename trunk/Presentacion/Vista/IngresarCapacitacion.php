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
                <form method="post" action="index.php?task=IngresarCapacitacion" class="iform" name="form1" enctype="multipart/form-data">                    
                    <ul>

                        <li><label for="">*C&eacute;dula</label>
                            <input class="itext" type="text" name="cedula" maxlength="30" required="si" value="<?php echo $_GET['cedula'] ?>"/>
                        </li>

                        <li><label for="">Nombres</label>
                            <input class="itext" type="text" disabled="true" name="nombres" maxlength="30" required="si" value="<?php echo $_GET['nombres'] ?>"/>
                        </li>

                        <li><label for="">Apellidos</label>
                            <input class="itext" type="text" disabled="true" name="apellidos" maxlength="30" required="si" value="<?php echo $_GET['apellidos'] ?>"/>
                        </li>
                        <li class="iheader">Datos Capacitaci&oacute;n</li>



                        <li><label for="">*Instituci&oacute;n Capacitadora</label>
                            <input class="itext" type="text" name="institucionCap" maxlength="30" required="si"/>
                        </li>

                        <li><label for="">*Tema Capacitaci&oacute;n</label>
                            <input class="itext" type="text" name="temaCapacitacion" maxlength="30" required="si"/>
                        </li>

                        <li><label for="">Tipo</label>
                            <input class="itext" type="text" name="tipo" maxlength="30" required="si"/>
                        </li>


                        <li><label for="">N&uacute;mero de Horas</label>
                            <input class="itext" type="text" name="numeroHoras" maxlength="30" required="si"/>
                        </li>

                        <li><label for="">N&uacute;mero de D&iacute;as</label>
                            <input class="itext" type="text" name="numeroDias" maxlength="30" required="si"/>
                        </li>

                        <li><label for="">Puntos</label>
                            <input class="itext" type="text" name="puntos" maxlength="30" required="si"/>
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