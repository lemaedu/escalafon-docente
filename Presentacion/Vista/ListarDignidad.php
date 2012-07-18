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
                <fieldset><legend>LISTADO DE DIGNIDADES</legend><br>
                    <center> <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                            <thead>
                                <tr>
                                    <th scope="col" class="rounded-company">Descripci&oacute;n</th>                                    
                                    <th scope="col" class="rounded-q1">Puntaje(pts)</th>                                    
                                    <th scope="col" class="rounded-q4">Duraci&oacute;n(meses)</th>                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="rounded-foot-left"><em>ESPOCH - <?php echo date("d/m/Y"); ?></em></td>
                                    <td class="rounded-foot-right">&nbsp;</td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                if ($lista != NULL) {
                                    
                                }
                                foreach ($lista as $lista):
                                    ?>                                    
                                <td><?php echo $lista->get_descripcion() ?> </td>
                                <td><?php echo $lista->get_puntaje() ?> </td>                                              
                                <td><?php echo $lista->get_puntajeanio() ?> </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table></center>
            </div>
        </div>
    </body>
</html>
