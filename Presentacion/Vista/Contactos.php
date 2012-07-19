
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?  require_once 'encabezadoContactos.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" class="iform" name="form1">                    
                    <ul>
                        <li class="iheader">Por favor llene todos los campos</li>
                        <li><label for="">*Nombre</label>
                            <input class="itext" type="text" name="nombre" maxlength="30" required="si"/>
                        </li>                                
                        <li><label for="">*Tel&eacute;fono</label>
                            <input class="itext" type="text" name="telefono" maxlength="13" required="si"/>
                        </li>   
                        <li><label for="">*E-mail</label>
                            <input class="itext" type="text" name="mail" maxlength="30" required="si"/>
                        </li>                                
                        <li><label for="descripcion">*Mensaje</label>
                            <textarea class="itextarea" name="mensaje" required="si"></textarea>
                        </li>                        
                        <li class="iseparator">&nbsp;</li>
                        <li><label>&nbsp;</label>
                            <input type="submit" class="ibutton" name="ingreso" value="Enviar"/>
                            <input type="reset" class="ibutton" value="Borrar Todo" />
                        </li>
                    </ul></form>
            </div>
        </div>
        <div class="footer">
                <div class="footer_resize">
                    <p class="lf">&copy; Copyright Jumper Technology. <a href="http://www.bluewebtemplates.com/">Designed by Blue</a></p>      
                </div>
            </div>
        <?php
        if (isset($_POST['ingreso'])) {              
            //$mensaje = $_POST['mensaje'];
            $mensaje = "Mensaje del formulario de contacto de escalafon.espoch.edu.com";
            $mensaje.= "\nNombre: " . $_POST['nombre'];
            $mensaje.= "\nEmail: " . $_POST['email'];
            $mensaje.= "\nTelefono: " . $_POST['telefono'];
            $mensaje.= "\nMensaje: \n" . $_POST['mensaje'];
            $destino = "joselugb@gmail.com";
            $remitente = $_POST['email'];
            $asunto = "Mensaje enviado por: " . $_POST['nombre'];
            mail($destino, $asunto, $mensaje, "FROM:".$remitente);

            //if ($op != 0) {
                //echo " <script type=\"text/javascript\">alert(\"Enviado correctamente\")</script>";
            //} else {
            //    echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            //}
        }
        ?>
    </body>
</html>
