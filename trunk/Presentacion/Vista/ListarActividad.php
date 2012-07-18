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
                <fieldset><legend>LISTADO DE ACTIVIDADES</legend><br>
                    <center> <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                            <thead>
                                <tr>
                                    <th scope="col" class="rounded-company">Nombre</th>                                    
                                    <th scope="col" class="rounded-q4">Descripci&oacute;n</th>                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="1" class="rounded-foot-left"><em>ESPOCH - <?php echo date("d/m/Y"); ?></em></td>
                                    <td class="rounded-foot-right">&nbsp;</td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                if ($actividad != NULL) {
                                    
                                }
                                foreach ($actividad as $actividad):
                                    ?>                                    
                                <td><?php echo $actividad->get_nombre() ?> </td>
                                <td><?php echo $actividad->get_descripcion() ?> </td>                                              
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table></center>
            </div>
        </div>
    </body>
</html>
