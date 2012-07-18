<html>
    <head>
        <script language='javascript' src="popcalendar.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <TABLE width="80%" border="0" cellspacing="0">
            <tr>
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
                    <FORM action="index.php?task=BuscarDocente" name="form1" method="post">
                        <fieldset><legend>Buscar Docente</legend>
                            <TABLE align="left">
                                <TR>
                                    <TD><input type="radio" name="op" value="1" checked> CEDULA</TD>
                                    <TD><input type="radio" name="op" value="2"> APELLIDOS</TD>
                                </TR>
                                <TR>
                                    <TD>DATO A BUSCAR:</TD>
                                    <TD><INPUT TYPE="text" NAME="dato" SIZE="20" MAXLENGTH="30" required ="si"></TD>
                                </TR>
                            </TABLE>
                        </fieldset>
                        <br>
                        <INPUT TYPE="submit" VALUE="BUSCAR" name="buscar" align="top">
                    </FORM>
                </TD>
            </TR>
        </TABLE>
        <?php
        if (isset($_POST['buscar'])) {
            $datoBuscar = $_POST["dato"];
            $opSelecionado = $_POST["op"];
            $nbusiness = new BusinessLogic();
            $docentesBuscados = $nbusiness->buscarDocente($opSelecionado, $datoBuscar);
//        echo 'Resultado de Op'.$op;
            if ($docentesBuscados != NULL) {
                ?>

                <TABLE width="40%" align="center">
                    <tr>
                        <td>
                            <center>
                                <fieldset><legend>LISTA DE DOCENTES</legend><br>
                                    <table border="1" cellspacing="2" width="100%">
                                        <tr>                                           
                                            <td width="100%">CEDULA</td>
                                            <td width="100%">NOMBRES</td>
                                            <td width="100%">APELLIDOS</td>
                                            <td width="100%">TELEFONO</td>
                                            <td width="100%">CATEGORIA DOC</td>
                                            <td width="100%">FECHA ING</td>
                                            <td width="100%">FOTO</td>
                                        </tr>
                                        <?php
                                        if ($docentesBuscados != NULL) {
                                            
                                        }
                                        foreach ($docentesBuscados as $docente):
                                            ?>
                                            <tr>
                                                <td><?php echo $docente->get_cedula() ?> </td>
                                                <td><?php echo $docente->get_nombres() ?> </td>
                                                <td><?php echo $docente->get_apellidos() ?> </td>
                                                <td><?php echo $docente->get_telefono() ?> </td>
                                                <td><?php echo $docente->get_categoriadocente() ?> </td>
                                                <td><?php echo $docente->get_fechaingreso() ?> </td>
                                                <td><?php echo $docente->get_foto() ?> </td>
                                                <td><a href="index.php?task=ModificarDocente&cedula=<?php echo $docente->get_cedula() ?>&nombres=<?php echo $docente->get_nombres() ?>&apellidos=<?php echo $docente->get_apellidos() ?>&fechaNac=<?php echo $docente->get_fechanacimiento() ?>&sexo=<?php echo $docente->get_sexo() ?>&nacionalidad=<?php echo $docente->get_nacionalidad() ?>&telefono=<?php echo $docente->get_telefono() ?>&categoria=<?php echo $docente->get_categoriadocente() ?>&direccion=<?php echo $docente->get_direccion() ?>&fingreso=<?php echo $docente->get_fechaingreso() ?>&foto=<?php echo $docente->get_foto() ?>"><img src="Recursos/images/b_edit.png"></a></td>
                                                <td><a href="index.php?task=EliminarDocente&cedula=<?php echo $docente->get_cedula() ?>&nombres=<?php echo $docente->get_nombres() ?>&apellidos=<?php echo $docente->get_apellidos() ?>&fechaNac=<?php echo $docente->get_fechanacimiento() ?>&sexo=<?php echo $docente->get_sexo() ?>&nacionalidad=<?php echo $docente->get_nacionalidad() ?>&telefono=<?php echo $docente->get_telefono() ?>&categoria=<?php echo $docente->get_categoriadocente() ?>&direccion=<?php echo $docente->get_direccion() ?>&fingreso=<?php echo $docente->get_fechaingreso() ?>&foto=<?php echo $docente->get_foto() ?>"><img src="Recursos/images/b_drop.png"></a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </fieldset>
                                <br>
                            </center>
                        </td>
                    </tr>
                </TABLE>

                <?php
                echo '<font color="green">Datos encontrados</font>';
            } else {
                echo '<font color="red">Datos no Encontrado</font>';
            }
        }
        ?>
    </body>
</html>
