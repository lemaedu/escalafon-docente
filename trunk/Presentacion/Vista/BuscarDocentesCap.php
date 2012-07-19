<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="Recursos/js/popcalendar.js"></script>
        <link href="Recursos/style-tablas.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=BuscarDocentesCap" class="iform" name="form1">
                    <ul>
                        <li class="iheader">Criterio de B&uacute;squeda</li>
                        <li><input class="iradio" type="radio" name="op" value="1">
                            <label for="" class="ilabel">C&eacute;dula</label>
                            <input class="iradio" type="radio" name="op" value="2" checked>
                            <label for="" class="ilabel">Apellido</label>
                        </li>
                        <li><label for="cedula">*Dato a Buscar</label>
                            <input class="itext" type="text" name="dato" maxlength="20" required="si"/>
                        </li>

                        <li class="iseparator">&nbsp;</li>
                        <li><label>&nbsp;</label>
                            <input type="submit" class="ibutton" name="buscar" value="&nbsp;Buscar&nbsp;"/>
                        </li>
                    </ul>
                </form>

                <?php
                if (isset($_POST['buscar'])) {
                    $datoBuscar = $_POST["dato"];
                    $opSelecionado = $_POST["op"];
                    $business = new BusinessLogic();
                    $datosBuscados = $business->buscarDocente($opSelecionado, strtoupper($datoBuscar));
                    if ($datosBuscados != NULL) {
                        ?>                           
                        <center> <table id="rounded-corner" summary="2010 Major IT Companies' Profit">
                                <thead>
                                    <tr>
                                        <th scope="col" class="rounded-company">C&eacute;dula</th>                                                                                                         
                                        <th scope="col" class="rounded-q1">Nombres</th>
                                        <th scope="col" class="rounded-q1">Apellidos</th>                                                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td colspan="6" class="rounded-foot-left"><em>ESPOCH - <?php echo date("d/m/Y"); ?></em></td>
                                        <td class="rounded-foot-right">&nbsp;</td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    if ($datosBuscados != NULL) {
                                        
                                    }
                                    foreach ($datosBuscados as $lista):
                                        ?>
                                        <tr>
                                            <td><?php echo $lista->get_cedula() ?> </td>
                                            <td><?php echo $lista->get_nombres() ?> </td>
                                            <td><?php echo $lista->get_apellidos() ?> </td>                                
                                            <td><a href="index.php?task=IngresarCapacitacion&cedula=<?php echo $lista->get_cedula() ?>&nombres=<?php echo $lista->get_nombres() ?>&apellidos=<?php echo $lista->get_apellidos() ?>"><input class="iradio" type="radio" name="op" value="2" checked><label for="" class="ilabel">Ok</label></a></td>                                
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </fieldset>
                            <br>
                            <?php
                            echo "<script type=\"text/javascript\">alert(\"Datos encontrados\")</script>";
                        } else {
                            echo "<script type=\"text/javascript\">alert(\"Datos no encontrados\")</script>";
                        }
                    }
                    ?>
                    </div>
                    </div>
                    </body>
                    </html>
