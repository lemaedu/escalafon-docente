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
                <fieldset><legend>LISTADO DE DOCENTES</legend><br>
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
                                if ($lista != NULL) {
                                    
                                }
                                foreach ($lista as $lista):
                                    ?>                                    
                                <td><?php echo $lista->get_cedula() ?> </td>
                                <td><?php echo $lista->get_nombres() ?> </td>                                                                              
                                <td><?php echo $lista->get_apellidos() ?> </td>
                                <td><?php echo $lista->get_telefono() ?> </td>
                                <td><?php echo $lista->get_categoriadocente() ?> </td>
                                <td><?php echo $lista->get_fechaingreso() ?> </td>
                                <td><?php echo "<img width=100 height=100 src=\"".$lista->get_foto()."\">" ?> </td>                               
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table></center>
            </div>
        </div>
    </body>
</html>
