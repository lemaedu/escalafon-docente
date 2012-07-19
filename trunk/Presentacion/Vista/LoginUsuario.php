<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Acceso al Sistema de Escalafon Docente</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>-->
    <?php 
    session_start();
        echo "$registrado";
        if(!session_is_registered('registrada')){
            session_destroy();
            header('Location:cuerpologin.php');
        }
        session_destroy();
        //require_once 'cuerpologin.php'; ?>    
<!--</body>
</html>-->
