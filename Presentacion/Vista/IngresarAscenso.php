<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <script type="text/javascript" src="Recursos/js/jquery.js"></script>                
        <link href="Recursos/faary.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php require_once 'cuerpoAdministrador.php'; ?>
        <div class="content">
            <div class="content_resize">
                <form method="post" action="index.php?task=IngresarAscenso" class="iform" name="form1">                    
                    <ul>
                        <li class="iheader">Datos de Ascensos</li>
                        <li><label for="">*Nivel</label>
                            <input class="itext" type="text" name="nivel" maxlength="30" required="si"/>
                        </li>                                                                                                
                        <li><label for="">*Estado</label>
                            <input class="itext" type="text" name="estado" maxlength="30" required="si"/>
                        </li>                        
                        <li class="iseparator">&nbsp;</li>
                        <li><label>&nbsp;</label>
                            <input type="submit" class="ibutton" name="ingreso" value="Ingresar Datos"/>
                            <input type="reset" class="ibutton" value="Borrar Todo" />
                        </li>
                    </ul></form>
            </div>
        </div>
        <?php
        if (isset($_POST['ingreso'])) {
            $nivel = $_POST['nivel'];
            $estado = $_POST['estado'];
            //Crea un objeto
            $business = new BusinessLogic();
            $op = $business->agregarAscenso($nivel, $estado);
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }}
            ?>
    </body>
</html>
