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
                <form method="post" action="index.php?task=IngresarDocente" class="iform" name="form1" enctype="multipart/form-data">                    
                    <ul>
                        <li class="iheader">Datos Personales</li>
                        <li><label for="cedula">*C&eacute;dula</label>
                            <input class="itext" type="text" name="cedula" maxlength="10" required="si"/>
                        </li>
                        <li><label for="nombres">*Nombres</label>
                            <input class="itext" type="text" name="nombres" id="nombres" maxlength="30" required="si"/>
                        </li>
                        <li><label for="apellidos">*Apellidos</label>
                            <input class="itext" type="text" name="apellidos" id="apellidos" maxlength="30" required="si"/>
                        </li>
                        <li><label for="fechaNac">*Fecha de Nacimiento</label>
                            <input class="itext" type="text" name="fechaNac" id="fechaNac" onClick="popUpCalendar(this, form1.fechaNac, 'yyyy-mm-dd');" required="si"/>
                        </li>                        
                        <li><label for="sexo">*Sexo</label><select class="iselect" name="sexo" id="sexo">
                                <option>M</option>
                                <option>F</option>
                            </select>
                        </li>
                        <li><label for="direccion">*Direcci&oacute;n</label>
                            <textarea class="itextarea" name="direccion" id="direccion" required="si"></textarea>
                        </li>
                        <li class="iheader">Informaci&oacute;n Adicional</li>
                        <li><label for="fingreso">*Fecha de Ingreso</label>
                            <input class="itext" type="text" name="fingreso" id="fingreso" onClick="popUpCalendar(this, form1.fingreso, 'yyyy-mm-dd');" required="si"/>
                        </li>
                        <li><label for="nacionalidad">*Nacionalidad</label>
                            <input class="itext" type="text" name="nacionalidad" id="nacionalidad" maxlength="30" required="si"/>
                        </li>
                        <li><label for="telefono">*Tel&eacute;fono</label>
                            <input class="itext" type="text" name="telefono" id="telefono" maxlength="9"/>
                        </li>
                        <li><label for="categoria">*Categor&iacute;a</label>
                            <select class="iselect" name="categoria" id="categoria">
                                <option>Principal</option>
                                <option>Auxiliar</option>
                                <option>Agregado</option>
                            </select>
                        </li>
                        <li><label for="foto">Foto Personal</label>
                            <input type="file" class="itext" name="foto" id="foto" />
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
            $cedula = $_POST["cedula"];
            $nombres = $_POST["nombres"];
            $apellidos = $_POST["apellidos"];
            $fechaNac = $_POST["fechaNac"];
            $sexo = $_POST["sexo"];
            $nacionalidad = $_POST["nacionalidad"];
            $telefono = $_POST["telefono"];
            $categoria = $_POST["categoria"];
            $direccion = $_POST["direccion"];
            $fingreso = $_POST["fingreso"];
            $foto = $_FILES["foto"]['name'];
            //copio la foto al servidor
            copy($_FILES['foto']['tmp_name'], "fotodocente/" .$foto);
//            if (copy($_FILES['foto']['tmp_name'], "fotodocente/" .$foto)) {
//                echo "El archivo ha sido cargado correctamente.<br>";
//            } else {
//                echo "Ocurrió algún error al subir el fichero. No pudo guardarse.<br>";
//            }
            $ruta="fotodocente/".$foto;
            //Crea un objeto logica de negocio            
            $business = new BusinessLogic();
            $op = $business->agregarDocente($cedula, strtoupper($nombres), strtoupper($apellidos), $fechaNac, $sexo, strtoupper($nacionalidad), $telefono, $categoria, strtoupper($direccion), $fingreso, $ruta);
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>