<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=IngresarUsuario" class="iform">                    
                    <ul>
                        <li class="iheader">Datos del Usuario</li>
                        <li><label for="">*Usuario</label>
                            <input class="itext" type="text" name="usuario" maxlength="50" required="si"/>
                        </li>                                                                                                
                        <li><label for="">*Password</label>
                            <input class="itext" type="text" name="password" maxlength="50" required="si"/>
                        </li>                        
                        <li><label for="">*Rol</label><select class="iselect" name="rol" id="sexo">
                                <option>Secretaria</option>
                                <option>Docente</option>                                
                                <option>Administrador</option>
                            </select>
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

            $usuario = $_POST["usuario"];
            $password = $_POST["password"];
            $rol = $_POST["rol"];            

            $business = new BusinessLogic();
            $op = $business->agregarUsuario($usuario,$password,$rol);
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>
