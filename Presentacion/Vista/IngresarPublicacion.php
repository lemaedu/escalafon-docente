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
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=IngresarPublicacion" class="iform">                    
                    <ul>
                        <li class="iheader">Datos para Publicaciones</li>
                        <li><label for="">*&Aacute;rea</label>
                            <input class="itext" type="text" name="area" maxlength="50" required="si"/>
                        </li>                                                                                                
                        <li><label for="">*Editorial</label>
                            <input class="itext" type="text" name="editorial" maxlength="50" required="si"/>
                        </li>                        
                        <li><label for="">*Descripci&oacute;n</label>
                            <textarea class="itextarea" name="descripcion" id="direccion" required="si"></textarea>
                        </li>
                        <li><label for="">*Tipo de Publicaci&oacute;n</label>
                            <input class="itext" type="text" name="tipo_publicacion" maxlength="50" required="si"/>
                        </li>                        
                        <li><label for="">*N&uacute;mero de Publicaci&oacute;n</label>
                            <input class="itext" type="text" name="numeropublicacion" maxlength="4" required="si"/>
                        </li>                        
                        <li><label for="">*Puntaje</label>
                            <input class="itext" type="text" name="puntajeanio" maxlength="4" required="si"/>
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

            $area = $_POST["area"];
            $editorial = $_POST["editorial"];
            $descripcion = $_POST["descripcion"];
            $tipo_publicacion = $_POST["tipo_publicacion"];
            $numeropublicacion = $_POST["numeropublicacion"];
            $puntajeanio = $_POST["puntajeanio"];

            $business = new BusinessLogic();
            $op = $business->agregarPublicaciones(strtoupper($area), strtoupper($editorial), strtoupper($descripcion), strtoupper($tipo_publicacion), $numeropublicacion, $puntajeanio);
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>
