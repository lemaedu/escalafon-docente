<? //session_start();
require_once ("DataAccesComponents/DataAccesComponents.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="Recursos/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="Recursos/js/cufon-yui.js"></script>
        <script type="text/javascript" src="Recursos/js/arial.js"></script>
        <script type="text/javascript" src="Recursos/js/cuf_run.js"></script>
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="main">
            <div class="menu_nav">
                <div class="menu_nav_resize">
                    <ul>
                        <li><a href="index.php?task=Default">Inicio</a></li> 
                        <li><a href="index.php?task=Acercade">Acerca de</a></li>                        
                        <li><a href="index.php?task=Contactos">Contactos</a></li>
                        <li class="active"><a href="index.php?task=LoginUsuario">Login</a></li>                        
                    </ul>
                </div>
                <div class="clr"></div>
            </div>            
            <div class="header">
                <div class="header_resize">
                    <div class="logo">
                        <h1><a href="index.php?task=Default">Escalaf&oacute;n Docente | ESPOCH</a></h1>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="content_resize">
                    <div class="mainbar">                        
                        <div class="article">          
                            <form method="post" action="cuerpologin.php" class="iform" name="form1">                    
                                <ul>
                                    <li class="iheader">Acceso al Sistema</li>
                                    <li><label for="">*Usuario</label>
                                        <input class="itext" type="text" name="usuario" maxlength="20" required="si"/>
                                    </li>
                                    <li><label for="">*Contrase&ntilde;a</label>
                                        <input class="itext" type="password" name="password" maxlength="20" required="si"/>
                                    </li>
                                    <li class="iseparator">&nbsp;</li>
                                    <li><label>&nbsp;</label>
                                        <input type="submit" class="ibutton" name="ingreso" value="Acceder"/>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>      
                    <div class="clr"></div>
                </div>
            </div>
            <div class="footer">
                <div class="footer_resize">
                    <p class="lf">&copy; Copyright Jumper Technology. <a href="http://www.bluewebtemplates.com/">Designed by Blue</a></p>      
                </div>
            </div>
        </div>
        <?php
        session_start();
        if (isset($_POST['ingreso'])) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            //Crea un objeto            
            $dataccess = new DataAccesComponents();
            $rows = $dataccess->buscarUsuario($usuario, $password);

            if ($rows["clave"] == $password) {
                echo " <script type=\"text/javascript\">alert(\"Ingreso Satisfactorio\")</script>";
                //$_SESSION["s_username"] = $rows['login']; 
                session_register("registrada");
                switch ($rows["accion"]) {
                    case 1:header("Location:index.php?task=Secretaria");
                        break;
                    case 2:header("Location:index.php?task=Usuario");
                        break;
                    case 3:header("Location:index.php?task=Administrador");
                        break;
                }                
            } else {
                echo "<script type=\"text/javascript\">alert(\"Credenciales Incorrectas\")</script>";
            }
        }
        ?>
    </body>
</html>
