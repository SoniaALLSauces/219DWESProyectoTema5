<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Ejercicio creaDAW219DBDepartamentos1&1</title>
        <meta name="author" content="Sonia Antón Llanes">
        <meta name="description" content="Proyecto DAW2">
        <meta name="keywords" content="">
        <link href="../webroot/css/estiloej.css" rel="stylesheet" type="text/css">
        <link href="../webroot/images/mariposa_vintage.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <style>
            h3{margin: 50px 20px;}
        </style>
    </head>
    <body>
        
        <h2 class="centrado"><a href="../indexProyectoTema4.php" style="border-bottom: 2px solid black">TEMA 4:</a>
            Script Crear Base de Datos, Usuario y Tabla Departamentos</h2>
        

        <div>
            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 03-diciembre-2021
             * Ejercicio Script Uso la Base de Datos y Usuario asignado en 1&1, y crear la Tabla Departamentos
             */
                
                /* LLamo al archivo que contiene los parametros de la conexion */
                    require_once '../config/confDBPDO.php';
                    
                /* Query para usar la base de datos asignada, y crear la tabla Departamentos */
                    $sqlCrear = <<<EOD
                            USE dbs4868815; 
                            CREATE table if not exists T02_Departamento(  
                                T02_CodDepartamento varchar(3) primary key not null,
                                T02_DescDepartamento varchar(255),
                                T02_FechaCreacionDepartamento timestamp default current_timestamp,
                                T02_VolumenDeNegocio float,
                                T02_FechaBajaDepartamento date) engine=innodb;
                            CREATE table if not exists T01_Usuario(  
                                T01_CodUsuario varchar(8) primary key not null,
                                T01_Password varchar(8),
                                T01_DescUsuario varchar(255),
                                T01_NumConexiones int default 0,
                                T01_FechaHoraUltimaConexion timestamp,
                                T01_Perfil enum('usuario','administrador') default 'usuario',
                                T01_ImagenUsuario mediumblob) engine=innodb;
                            EOD;
                    
                /* try..catch con PDOException para establecer conexión y controlar errores */
                    try {  //Conexión: establezco la conexión y el código que quiero realizar           
                        $miDB = new PDO (HOST, USER, PASSWORD);  //establezco conexión con objeto PDO 
                        $miDB ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //y siempre lanzo excepción utilizando manejador propio PDOException cuando se produce un error
                        
                        $crear = $miDB -> prepare($sqlCrear);  //Con consulta preparada, preparo la consulta
                        $crear ->execute();                    //ejecuto la consulta
                        
                        echo "<h3>TABLA DEPARTAMENTOS ha sido creada</h3>";
                        
                    }  
                    catch (PDOException $excepcion){
                        $error = $excepcion->getCode();        //guardamos en la variable error el error que salte
                        $mensaje = $excepcion->getMessage();  //guardamos en la variable mensaje el mensaje que genera el error que saltó
                        echo "<p>Error".$error."</p>";
                        echo "<p style='color: red'>Código del error".$mensaje."</p>";
                    }
                    finally {
                        unset($miDB);
                    }

            ?>
        </div>
        
        
        
    </body>
</html>