<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Ejercicio cargaInicialDAW219DBDepartamentos1&1</title>
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
            Script Borrar la Tabla Departamentos</h2>
        

        <div>
            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 03-diciembre-2021
             * Ejercicio Script Crear Base de Datos, Usuario y Tabla Departamentos
             */
                
                /* LLamo al archivo que contiene los parametros de la conexion */
                    require_once '../config/confDBPDO.php';
                    
                /* Query para usar la base de datos asignada, y crear la tabla Departamentos */
                    $sqlBorrar = <<<EOD
                            USE dbs4868815; 
                            DROP table IF EXISTS T02_Departamento;
                            DROP table IF EXISTS T01_Usuario;
                            EOD;
                    
                /* try..catch con PDOException para establecer conexión y controlar errores */
                    try {  //Conexión: establezco la conexión y el código que quiero realizar           
                        $miDB = new PDO (HOST, USER, PASSWORD);  //establezco conexión con objeto PDO 
                        $miDB ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //y siempre lanzo excepción utilizando manejador propio PDOException cuando se produce un error
                        
                        $borrar = $miDB -> prepare($sqlBorrar);  //Con consulta preparada, preparo la consulta
                        $borrar ->execute();                    //ejecuto la consulta
                        
                        echo "<h3>TABLA T02_Departamento y T01_Usuario se han eliminado</h3>";
                        
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