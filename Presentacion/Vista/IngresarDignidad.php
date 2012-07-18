
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=IngresarDignidad" class="iform">                    
                    <ul>
                        <li class="iheader">Datos de Dignidades</li>
                        <li><label for="">*Duraci&oacute;n en meses</label>
                            <input class="itext" type="text" name="duracionanio" maxlength="20" required="si"/>
                        </li>                                                                                                
                        <li><label for="">*Puntaje</label>
                            <input class="itext" type="text" name="puntaje" maxlength="50" required="si"/>
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

            $duracionanio = $_POST["duracionanio"];
            $puntaje = $_POST["puntaje"];
            $descripcion = $_POST["descripcion"];            

            $business = new BusinessLogic();
            $op = $business->agregarDignidad(strtoupper($duracionanio), $puntaje, strtoupper($descripcion));
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>
