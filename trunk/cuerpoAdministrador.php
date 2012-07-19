<!DOCTYPE html>
<html>
    <head>        
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        
        <link href="Recursos/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="Recursos/js/cufon-yui.js"></script>
        <script type="text/javascript" src="Recursos/js/arial.js"></script>
        <script type="text/javascript" src="Recursos/js/cuf_run.js"></script>
        <link rel="stylesheet" type="text/css" href="Recursos/chrometheme/chromestyle2.css" />
        <script type="text/javascript" src="Recursos/chromejs/chrome.js">
            /***********************************************
             * Chrome CSS Drop Down Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
             * This notice MUST stay intact for legal use
             * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
             ***********************************************/    
        </script>
    </head>
    <body>
        <div class="content">
            <div class="content_resize">
                <div class="chromestyle" id="chromemenu">
                    <ul>
                        <li><a href="#" rel="dropmenu1">Actividades</a></li>
                        <li><a href="#" rel="dropmenu2">Docentes</a></li>
                        <li><a href="#" rel="dropmenu3">Dignidades</a></li>
                        <li><a href="#" rel="dropmenu4">Ascensos</a></li>
                        <li><a href="#" rel="dropmenu5">Publicaciones</a></li>
                        <li><a href="#" rel="dropmenu6">Capacitaciones</a></li>
                        <li><a href="#" rel="dropmenu7">Formaciones</a></li>                        
                        <li><a href="#" rel="dropmenu8">Usuario</a></li>  
                        <li><a href="index.php?task=Logout">Logout</a></li>
                    </ul>
                </div>

                <!--1st drop down menu -->                                                   
                <div id="dropmenu1" class="dropmenudiv">
                    <a href="index.php?task=IngresarActividad">Ingresar</a>
                    <a href="index.php?task=">Modificar</a>
                    <a href="index.php?task=">Eliminar</a>                            
                    <a href="index.php?task=ListarActividad">Listar</a>
                </div>

                <!--2nd drop down menu -->                                                
                <div id="dropmenu2" class="dropmenudiv" style="width: 150px;">
                    <a href="index.php?task=IngresarDocente">Ingresar</a>
                    <a href="index.php?task=BuscarDocente">Buscar</a>
                    <a href="#">Eliminar</a>
                    <a href="index.php?task=ListarDocente">Listar</a>
                </div>

                <!--3rd drop down menu -->                                                   
                <div id="dropmenu3" class="dropmenudiv" style="width: 150px;">
                    <a href="index.php?task=IngresarDignidad">Ingresar</a>
                    <a href="#">Modificar</a>
                    <a href="#">Eliminar</a>
                    <a href="index.php?task=ListarDignidad">Listar</a>
                </div>

                <!--4rd drop down menu -->                                                   
                <div id="dropmenu4" class="dropmenudiv" style="width: 150px;">
                    <a href="index.php?task=BuscarDocentesAscenso">Ingresar</a>
                    <a href="#">Modificar</a>
                    <a href="#">Eliminar</a>
                    <a href="index.php?task=ListarAscenso">Listar</a>
                </div>
                <!--5rd drop down menu -->                                                   
                <div id="dropmenu5" class="dropmenudiv" style="width: 150px;">
                    <a href="index.php?task=IngresarPublicacion">Ingresar</a>
                    <a href="#">Modificar</a>
                    <a href="#">Eliminar</a>
                    <a href="index.php?task=ListarPublicacion">Listar</a>
                </div>
                <!--6rd drop down menu -->                                                   
                <div id="dropmenu6" class="dropmenudiv" style="width: 150px;">
                    <a href="index.php?task=IngresarCapacitacion">Ingresar</a>
                    <a href="#">Modificar</a>
                    <a href="#">Eliminar</a>
                    <a href="index.php?task=ListarCapacitacion">Listar</a>
                </div>
                <!--7rd drop down menu -->                                                   
                <div id="dropmenu7" class="dropmenudiv" style="width: 150px;">
                    <a href="index.php?task=BuscarDocentes_todo">Ingresar</a>
<!--                    <a href="#">Modificar</a>
                    <a href="#">Eliminar</a>-->
<!--                    <a href="index.php?task=ListarFormacion">Listar</a>-->
                </div>
                <!--8rd drop down menu -->                                                   
                <div id="dropmenu8" class="dropmenudiv" style="width: 150px;">
                    <a href="index.php?task=IngresarUsuario">Ingresar</a>
<!--                    <a href="#">Modificar</a>
                    <a href="#">Eliminar</a>-->
                    <a href="index.php?task=ListarUsuario">Listar</a>
                </div>
                <script type="text/javascript">

                    cssdropdown.startchrome("chromemenu")

                </script>
                <div class="clr"></div>
            </div>
        </div>
    </body>
</html>
