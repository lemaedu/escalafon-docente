<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=IngresarCapacitacion" class="iform">                    
                    <ul>
                        <li class="iheader">Datos de la Capacitaci&oacute;n</li>
                        <li><label for="institucionCap">*Instituci&oacute;n Capacitaci&oacute;n</label>
                            <input class="itext" type="text" name="institucionCap" maxlength="30" required="si"/>
                        </li>
                        <li><label for="temaCap">*Tema Capacitaci&oacute;n</label>
                            <input class="itext" type="text" name="temaCap" maxlength="100" required="si"/>
                        </li>
                        <li><label for="puntos">*Puntos</label>
                            <input class="itext" type="text" name="puntos" maxlength="3" required="si"/>
                        </li>                        
                        <li><label for="descripcion">*Descripci&oacute;n</label>
                            <textarea class="itextarea" name="descripcion" required="si"></textarea>
                        </li>                        
                        <li class="iseparator">&nbsp;</li>
                        <li><label>&nbsp;</label>
                            <input type="submit" class="ibutton" name="ingreso" id="enviar" value="Ingresar Datos"/>
                            <input type="reset" class="ibutton" value="Borrar Todo" />
                        </li>
                    </ul></form>
            </div>
        </div>
        <?php
        if (isset($_POST['ingreso'])) {
            $institucionCap=$_POST['institucionCap'];
            $temaCap=$_POST['temaCap'];
            $puntos=$_POST['puntos'];
            $descripcion=$_POST['descripcion'];
            //Crea un objeto            
            $business = new BusinessLogic();
            $op = $business->agregarCapacitacion(strtoupper($institucionCap), strtoupper($temaCap), $puntos, strtoupper($descripcion));

            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>
