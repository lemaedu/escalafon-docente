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
                <form method="post" action="index.php?task=IngresarActividad" class="iform" name="form1" enctype="multipart/form-data">                    
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
                        <li class="iheader">Datos de Actividad</li>

                        <li><label for="">*Horas</label>
                            <input class="itext" type="text" name="horas" maxlength="30" required="si"/>
                        </li>
                        <li><label for="">*Nombre</label>
                            <input class="itext" type="text" name="nombre" maxlength="30" required="si"/>
                        </li>

                        <li><label for="">*Descripcion</label>
                            <input class="itext" type="text" name="descripcion" maxlength="30" required="si"/>
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
            $horas = $_POST["horas"];
            $nombreactividad = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];
                    
            //Crea un objeto logica de negocio            
            $business = new BusinessLogic();
            $op = $business->agregarActividad($cedula, $horas, $nombreactividad,$descripcion );
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>