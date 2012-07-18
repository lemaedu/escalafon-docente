<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        //<?php
        require_once ("Presentacion/Controllers/DefaultController.php");
//pregunta para saber que esta seteado        
        //$task = new DefaultController($_GET["task"]);
        $task = isset($_GET['task'])? $_GET['task']:NULL;
        $controller = new DefaultController($_GET['task']);
        $controller->renderize();      
        ?>
<!--<a href="Presentacion/Views/Default.php">Default</a>-->
    </body>
</html>
