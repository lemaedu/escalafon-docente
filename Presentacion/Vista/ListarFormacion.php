<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="Recursos/style-tablas.css" rel="stylesheet" type="text/css" />
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>

        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <fieldset><legend>LISTADO DE FORMACIONES</legend><br>
                    <center> <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                            <thead>
                                <tr>
                                    <th scope="col" class="rounded-company">Nivel Educaci&oacute;n</th>
                                    <th scope="col" class="rounded-q1">Codigo Refredaci&oacute;n</th>
                                    <th scope="col" class="rounded-q2">P&aacute;gina de Registro</th>
                                    <th scope="col" class="rounded-q2">Puntos</th>
                                    <th scope="col" class="rounded-q2">Fecha de Ingreso</th>
                                    <th scope="col" class="rounded-q4">Descripci&oacute;n</th>                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="5" class="rounded-foot-left"><em>ESPOCH - <?php echo date("d/m/Y", time() - 86400); ?></em></td>
                                    <td class="rounded-foot-right">&nbsp;</td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                if ($formacion != NULL) {
                                    
                                }
                                foreach ($formacion as $formacion):
                                    ?>                                    
                                <td><?php echo $formacion->getNivelEducacion() ?> </td>
                                <td><?php echo $formacion->getCodigoRefrendacion() ?> </td>              
                                <td><?php echo $formacion->getNumPaginaRegistro() ?> </td>
                                <td><?php echo $formacion->getPuntos() ?> </td>
                                <td><?php echo $formacion->getFechaIngreso() ?> </td>
                                <td><?php echo $formacion->getDescripcion() ?> </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table></center>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
