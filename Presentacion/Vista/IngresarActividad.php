
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
                <form method="post" action="index.php?task=IngresarActividad" class="iform" name="form1">                    
                    <ul>
                        <li class="iheader">Datos de Actividades</li>
                        <li><label for="">*Nombre</label>
                            <input class="itext" type="text" name="nombre" maxlength="30" required="si"/>
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
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            //Crea un objeto empresa            
            $business = new BusinessLogic();
            $op = $business->agregarActividad($nombre, $descripcion);

            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
            ?>
    </body>
</html>
