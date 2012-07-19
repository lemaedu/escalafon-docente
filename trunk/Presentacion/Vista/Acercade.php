
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
        <? require_once 'encabezadoAcercade.php'; ?>
        <div class="content">
            <div class="content_resize">
                <fieldset><legend><h2>Autores del Sitio</h2></legend><br>
                    <center> <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                            <thead>
                                <tr>
                                    <th scope="col" class="rounded-company">Nombres</th>                                    
                                    <th scope="col" class="rounded-q1">Apellidos</th>                                    
                                    <th scope="col" class="rounded-q4">E-mail</th>                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="rounded-foot-left"><em>ESPOCH - <?php echo date("d/m/Y"); ?></em></td>
                                    <td class="rounded-foot-right">&nbsp;</td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr><td>Jos&eacute; Luis</td>
                                    <td>Gavilanes</td>
                                    <td>joselugb@gmail.com</td>
                                </tr>
                                <tr><td>Luis</td>
                                    <td>Lema</td>
                                    <td>luisedu@gmail.com</td>
                                </tr>
                                <tr><td>Daniel</td>
                                    <td>Cevallos</td>
                                    <td>abrada14@gmail.com</td>
                                </tr>
                                <tr><td>Lisbeth</td>
                                    <td>Guevara</td>
                                    <td>lisbeth@hotmail.com</td>
                                </tr>
                                <tr><td>Richard</td>
                                    <td>Zu&ntilde;iga</td>
                                    <td>rzuniga@espoch.edu.ec</td>
                                </tr>
                            </tbody>
                        </table></center>
            </div>
        </div>
        <div class="footer">
                <div class="footer_resize">
                    <p class="lf">&copy; Copyright Jumper Technology. <a href="http://www.bluewebtemplates.com/">Designed by Blue</a></p>      
                </div>
            </div>
    </body>
</html>
