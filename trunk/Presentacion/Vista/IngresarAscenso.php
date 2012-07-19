<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="Recursos/js/popcalendar.js"></script>
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

                        <li><label for="">*C&eacute;dula</label>
                            <input class="itext" type="text" name="cedula" maxlength="30" required="si" value="<?php echo $_GET['cedula'] ?>"/>
                        </li>

                        <li><label for="">Nombres</label>
                            <input class="itext" type="text" disabled="true" name="nombres" maxlength="30" required="si" value="<?php echo $_GET['nombres'] ?>"/>
                        </li>

                        <li><label for="">Apellidos</label>
                            <input class="itext" type="text" disabled="true" name="apellidos" maxlength="30" required="si" value="<?php echo $_GET['apellidos'] ?>"/>
                        </li>

                        <li class="iheader">Datos de Ascensos</li>

                        <li><label for="">*Nivel</label>
                            <input class="itext" type="text" name="nivel" maxlength="30" required="si"/>
                        </li>                                                                                                
                        <li><label for="">*Estado</label>
                            <input class="itext" type="text" name="estado" maxlength="30" required="si"/>
                        </li>     

                        <li><label for="">*Documentos V&aacute;lidos</label>
                            <input class="itext" type="text" name="documentosValidos" maxlength="30" required="si"/>
                        </li> 

                        <li><label for="fechaAscenso">*Fecha de Ascenso</label>
                            <input class="itext" type="text" name="fechaAscenso" onClick="popUpCalendar(this, form1.fechaAscenso, 'yyyy-mm-dd');" required="si"/>
                        </li> 
                        
                        <li><label for="">*Puntaje Total</label>
                            <input class="itext" type="text" name="puntajeTotal" maxlength="30" required="si"/>
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


            $cedula = $_POST['cedula'];
            $nivel = $_POST['nivel'];
            $estado = $_POST['estado'];
            $documentosValidos = $_POST['documentosValidos'];
            $fechaAscenso = $_POST['fechaAscenso'];
            $puntajeTotal = $_POST['puntajeTotal'];
            //Crea un objeto
            $business = new BusinessLogic();
            $op = $business->agregarAscenso($cedula,$nivel, $estado,$documentosValidos,$fechaAscenso,$fechaAscenso,$puntajeTotal);
            if ($op != 0) {
                echo " <script type=\"text/javascript\">alert(\"Ingresado correctamente\")</script>";
            } else {
                echo "echo <script type=\"text/javascript\">alert(\"Intentalo nuevamente\")</script>";
            }
        }
        ?>
    </body>
</html>
