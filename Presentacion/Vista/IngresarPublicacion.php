<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="Recursos/js/popcalendar.js"></script>
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=IngresarPublicaciones" class="iform" name="form1">                    
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

                        <li class="iheader">Datos para Publicaciones</li>

                        <li><label for="">*&Aacute;rea</label>
                            <input class="itext" type="text" name="area" maxlength="50" required="si"/>
                        </li>  
                        <li><label for="">*Tipo de Publicaci&oacute;n</label>
                            <input class="itext" type="text" name="tipo_publicacion" maxlength="50" required="si"/>
                        </li>  
                        <li><label for="">*Editorial</label>
                            <input class="itext" type="text" name="editorial" maxlength="50" required="si"/>
                        </li>                        

                        <li><label for="">*N&uacute;mero de Publicaci&oacute;n</label>
                            <input class="itext" type="text" name="numeropublicacion" maxlength="4" required="si"/>
                        </li>                        
                        <li><label for="">*Puntaje</label>
                            <input class="itext" type="text" name="puntajeanio" maxlength="4" required="si"/>
                        </li>   
                        <li><label for="fechaPublicacion">*Fecha de Registro del T&iacute;tulo</label>
                            <input class="itext" type="text" name="fechaPublicacion" onClick="popUpCalendar(this, form1.fechaPublicacion, 'yyyy-mm-dd');" required="si"/>
                        </li> 
                        <li><label for="">*Descripci&oacute;n</label>
                            <textarea class="itextarea" name="descripcion" id="direccion" required="si"></textarea>
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
            $cedula = $_POST["cedula"];
            $area = $_POST["area"];
            $tipo_publicacion = $_POST["tipo_publicacion"];
            $editorial = $_POST["editorial"];
            $numeropublicacion = $_POST["numeropublicacion"];
            $puntajeanio = $_POST["puntajeanio"];
            $fechaPublicacion = $_POST["fechaPublicacion"];
            $descripcion = $_POST["descripcion"];

            $business = new BusinessLogic();
            $op = $business->agregarPublicaciones($cedula, strtoupper($area), strtoupper($tipo_publicacion), strtoupper($editorial), $numeropublicacion, $puntajeanio, $fechaPublicacion, strtoupper($descripcion));
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>
