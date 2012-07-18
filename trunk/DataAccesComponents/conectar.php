<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
    <!--   fUNCION CONECTARSE A LA BASE DE DATOS Y SELECCION DE LA BASE DE DATOS     -->
        <?php
			

        function Conectarse()
        {
            $user = 'postgres';
            $passwd = '12345';
            $db = 'db_escalafon';
            $port = 5432;
            $host = 'localhost';
            $strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
            $cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
            try
            {
                if (!(pg_connect($strCnx)))
                {
                    
                    exit();
                }
                    return $cnx;
            }
            catch (Exception $ex){
                echo "no se pudo conectar Error".pg_last_error();
            }
        }
//FUNCION DESCONECATR DE LA BASE DE DATOS
        function desconectar()
        {
            $link = pg_close($strCnx);
        }
        ?>
    </body>
</html>