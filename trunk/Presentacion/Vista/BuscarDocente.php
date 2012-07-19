<? error_reporting(0);?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="Recursos/style-tablas.css" rel="stylesheet" type="text/css" />
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>
        <script type="text/javascript" src="Recursos/js/popcalendar.js"></script>
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <fieldset><legend></legend><br>
                    <form method="post" action="index.php?task=BuscarDocente" class="iform">                    
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
                        </ul></form>                   
                    <?php
                    if (isset($_POST['buscar'])) {
                        $datoBuscar = $_POST["dato"];
                        $opSelecionado = $_POST["op"];
                        $business = new BusinessLogic();
                        $datosBuscados = $business->buscarDocente($opSelecionado, strtoupper($datoBuscar));
//        echo 'Resultado de Op'.$op;
                        if ($datosBuscados != NULL) {
                            ?>                           
                            <center> <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="rounded-company">C&eacute;dula</th>                                                                                                         
                                            <th scope="col" class="rounded-q1">Nombres</th>
                                            <th scope="col" class="rounded-q1">Apellidos</th>                                    
                                            <th scope="col" class="rounded-q1">Tel&eacute;fono</th>
                                            <th scope="col" class="rounded-q1">Categor&iacute;a</th>
                                            <th scope="col" class="rounded-q1">Fecha de Ingreso</th>
                                            <th scope="col" class="rounded-q4">Foto</th>                                    
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
                                                <td><?php echo $lista->get_telefono() ?> </td>
                                                <td><?php echo $lista->get_categoriadocente() ?> </td>
                                                <td><?php echo $lista->get_fechaingreso() ?> </td>
                                                <td><?php echo "<img width=100 height=100 src=\"".$lista->get_foto()."\">" ?> </td>
                                                <td><a href="index.php?task=ModificarDocente&cedula=<?php echo $lista->get_cedula() ?>&nombres=<?php echo $lista->get_nombres() ?>&apellidos=<?php echo $lista->get_apellidos() ?>&fechaNac=<?php echo $lista->get_fechanacimiento() ?>&sexo=<?php echo $lista->get_sexo() ?>&nacionalidad=<?php echo $lista->get_nacionalidad() ?>&telefono=<?php echo $lista->get_telefono() ?>&categoria=<?php echo $lista->get_categoriadocente() ?>&direccion=<?php echo $lista->get_direccion() ?>&fingreso=<?php echo $lista->get_fechaingreso() ?>&foto=<?php echo $lista->get_foto() ?>"><img src="Recursos/images/b_edit.png"></a></td>
                                                <td><a href="index.php?task=EliminarDocente&cedula=<?php echo $lista->get_cedula() ?>&nombres=<?php echo $lista->get_nombres() ?>&apellidos=<?php echo $lista->get_apellidos() ?>&fechaNac=<?php echo $lista->get_fechanacimiento() ?>&sexo=<?php echo $lista->get_sexo() ?>&nacionalidad=<?php echo $lista->get_nacionalidad() ?>&telefono=<?php echo $lista->get_telefono() ?>&categoria=<?php echo $lista->get_categoriadocente() ?>&direccion=<?php echo $lista->get_direccion() ?>&fingreso=<?php echo $lista->get_fechaingreso() ?>&foto=<?php echo $lista->get_foto() ?>"><img src="Recursos/images/b_drop.png"></a></td>
                                            </tr>
                                        <?php endforeach; ?>
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
