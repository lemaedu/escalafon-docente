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
            
            //	function isEmailValid(email){
            //		var e = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            //		return e.test(email);
            //	}                        
        </script>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=IngresarFormacion" class="iform" name="form1" enctype="multipart/form-data">                    
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
                        <li class="iheader">Datos de Capacitaci&oacute;n</li>

                        <li><label for="">*C&oacute;digo Refrendaci&oacute;n</label>
                            <input class="itext" type="text" name="codigoRefrendacion" maxlength="30" required="si"/>
                        </li>


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
                        <li><label for="fechaIngreso">*Fecha de Registro del T&iacute;tulo</label>
                            <input class="itext" type="text" name="fechaRegistro" onClick="popUpCalendar(this, form1.fechaIngreso, 'yyyy-mm-dd');" required="si"/>
                        </li> 

                        <li><label for="fechaIngreso">*Fecha de Entrega de Doc</label>
                            <input class="itext" type="text" name="fechaEntrega" onClick="popUpCalendar(this, form1.fechaIngreso, 'yyyy-mm-dd');" required="si"/>
                        </li> 

                        <li><label for="direccion">*Descripci&oacute;n</label>
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
            $nivelEducacion = $_POST["nivelEducacion"];
            $codigoRefrendacion = $_POST["codigoRefrendacion"];
            $numPaginaRegistro = $_POST["numPaginaRegistro"];
            $puntos = $_POST["puntos"];
            $fechaIngreso = $_POST["fechaRegistro"];
            $fechaEntrega = $_POST["fechaEntrega"];
            $descripcion = $_POST["descripcion"];
            //copio la foto al servidor

            copy($_FILES['foto']['tmp_name'], "fotodocente/" . $foto);
            $business = new BusinessLogic();
            $op = $business->agregarFormacion($cedula, strtoupper($nivelEducacion), strtoupper($codigoRefrendacion), $numPaginaRegistro, $puntos, $fechaIngreso, $fechaEntrega, $descripcion);
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>