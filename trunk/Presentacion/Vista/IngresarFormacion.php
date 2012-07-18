<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="Recursos/js/popcalendar.js"></script>
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=IngresarFormacion" class="iform" name="form1">                    
                    <ul>
                        <li class="iheader">Datos Formaci&oacute;n</li>
                        <!--                        <li><label for="nivelEducacion">*Nivel de Educaci&oacute;n</label>
                                                    <input class="itext" type="text" name="nivelEducacion" maxlength="30" required="si"/>
                                                </li>-->
                        <li><label for="sexo">*Nivel de Educaci&oacute;n</label><select class="iselect" name="nivelEducacion" id="sexo">
                                <option>Diplomado</option>
                                <option>Especialista</option>
                                <option>Maestr&iacute;a</option>
                                <option>Doctor Ph. D</option>
                            </select>
                        </li>
                        <li><label for="">*C&oacute;digo Refrendaci&oacute;n</label>
                            <input class="itext" type="text" name="codigoRefrendacion" maxlength="30" required="si"/>
                        </li>
                        <li><label for="">*N&uacute;mero P&aacute;gina Registro</label>
                            <input class="itext" type="text" name="numPaginaRegistro" maxlength="30" required="si"/>
                        </li>
                        <li><label for="puntos">*Puntos</label>
                            <input class="itext" type="text" name="puntos" maxlength="30" required="si"/>
                        </li>
                        <li><label for="fechaIngreso">*Fecha de Ingreso</label>
                            <input class="itext" type="text" name="fechaIngreso" onClick="popUpCalendar(this, form1.fechaIngreso, 'yyyy-mm-dd');" required="si"/>
                        </li>                                                
                        <li><label for="descripcion">*Descripci&oacute;n</label>
                            <textarea class="itextarea" name="descripcion" required="si"></textarea>
                        </li>                        
                        <li class="iseparator">&nbsp;</li>
                        <li><label>&nbsp;</label>
                            <input type="submit" class="ibutton" name="ingreso" value="Ingresar Datos"/>
                            <input type="reset" class="ibutton" value="Borrar Todo" />
                        </li>
                    </ul></form>
            </div>
        </div>
        <?php
        if (isset($_POST['ingreso'])) {
            $nivelEducacion = $_POST["nivelEducacion"];
            $codigoRefrendacion = $_POST["codigoRefrendacion"];
            $numPaginaRegistro = $_POST["numPaginaRegistro"];
            $puntos = $_POST["puntos"];
            $fechaIngreso = $_POST["fechaIngreso"];
            $descripcion = $_POST["descripcion"];

            $business = new BusinessLogic();
            $op = $business->agregarFormacion($nivelEducacion, strtoupper($codigoRefrendacion), $numPaginaRegistro, $puntos, $fechaIngreso, strtoupper($descripcion));

            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>
