<html>
    <head>
        <script language='javascript' src="popcalendar.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <TABLE width="80%" border="0" cellspacing="0">
            <tr>
                <TD>
                    <br>

                </TD>
                <td colspan="2">
                    <p align="right"><a href="index.php?task=Logout"> Cerrar Sesión </a></p>
                </td>
            </tr>
            <tr><td colspan="3">
                    <hr width="100%">
                    <menu> <a href="index.php?task=Principal" >Principal</a>
                    </menu>
                    <hr><br>
                </td>
            </tr>
            <TR>
                <TD width="40%">
                    <BR>
                    <FORM  action="index.php?task=ModificarDocente" name="form" method="post">
                        <fieldset>DOCENTE</legend>
                            <TABLE border="1" align="center">                
                                <TR>
                                    <TD>Cedula:</TD>
                                    <TD><INPUT TYPE="text" NAME="cedula" SIZE="10" MAXLENGTH="10" required ="si" value="<?php echo $_GET['cedula'] ?>"</TD>
                                </TR>
                                <TR>
                                    <TD>Nombres:</TD>
                                    <TD><INPUT TYPE="text" NAME="nombres" SIZE="20" MAXLENGTH="30" required ="si" value="<?php echo $_GET['nombres'] ?>"></TD>
                                </TR>
                                <TR>
                                    <TD>Apellidos:</TD>
                                    <TD><INPUT TYPE="text" NAME="apellidos" SIZE="20" MAXLENGTH="30" required ="si" value="<?php echo $_GET['apellidos'] ?>"></TD>
                                </TR>
                                <TD>Fecha de Nac:</TD>
                                <TD><input required ="si"  name="fechaNac" type="text" id="fechaNac" onClick="popUpCalendar(this, form.fechaNac, 'yyyy-mm-dd'); "size="12" value="<?php echo $_GET['fechaNac'] ?>"></TD>
                                </TR>

                                <TR>
                                    <TD>Sexo:</TD>
                                    <TD>
                                        <select required ="si"  name="sexo" id="sexo" value="<?php echo $_GET['sexo'] ?>">
                                            <option>M</option>
                                            <option>F</option>
                                        </select>
                                </TR>
                                <TR>
                                    <TD>Nacionalidad:</TD>
                                    <TD><INPUT required ="si" TYPE="text" NAME="nacionalidad" SIZE="20" MAXLENGTH="30" value="<?php echo $_GET['nacionalidad'] ?>"></TD>
                                </TR>

                                <TR>
                                    <TD>Telefono:</TD>
                                    <TD><INPUT required ="si" TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30" value="<?php echo $_GET['telefono'] ?>"></TD>
                                </TR>

                                <TR>
                                    <TD>Categoria Doc:</TD>
                                    <TD>						 
                                        <select required ="si" name="categoria" id="sexo" value="<?php echo $_GET['categoria'] ?>">
                                            <option>Principal</option>
                                            <option>Auxiliar</option>
                                            <option>Agregado</option>
                                        </select>
                                    </TD>
                                </TR>

                                <TR>
                                    <TD>Direccion:</TD>
                                    <TD><INPUT required ="si" TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30" value="<?php echo $_GET['direccion'] ?>"></TD>
                                </TR>
                                <TR>
                                    <TD>Fecha de Ingreso:</TD>
                                    <TD><input required ="si" name="fingreso" type="text" id="fingreso" onClick="popUpCalendar(this, form.fingreso, 'yyyy-mm-dd');" size="10" value="<?php echo $_GET['fingreso'] ?>"></TD>
                                </TR> 

                                <TR>
                                    <TD>foto:</TD>
                                    <TD><INPUT TYPE="text" NAME="foto" SIZE="20" MAXLENGTH="30" value="<?php echo $_GET['foto'] ?>"></TD>
                                </TR>				

                            </TABLE>
                        </fieldset>                    
                        <INPUT TYPE="submit" VALUE="Editar" name="edicion">
                        <br>
                    </FORM>
                </TD>
            </TR>
        </TABLE>
        <?php
        if (isset($_POST['edicion'])) {
            $cedula = $_POST["cedula"];
            $nombre = $_POST["nombres"];
            $apellidos = $_POST["apellidos"];
            $fechaNac = $_POST["fechaNac"];
            $sexo = $_POST["sexo"];
            $nacionalidad = $_POST["nacionalidad"];
            $telefono = $_POST["telefono"];
            $categoria = $_POST["categoria"];
            $direccion = $_POST["direccion"];
            $fingreso = $_POST["fingreso"];
            $foto = $_POST["foto"];

            $business1 = new BusinessLogic();
            $op = $business1->modificarDocente($cedula, $nombre, $apellidos, $fechaNac, $sexo, $nacionalidad, $telefono, $categoria, $direccion, $fingreso, $foto);
//        echo 'Resultado de Op'.$op;
            if ($op != 0) {
                echo '<font color="green">Modificado Correctamente</font>';
            } else {
                echo '<font color="red">Intente mas tarde</font>';
            }
        }
        ?>
    </body>
</html>
