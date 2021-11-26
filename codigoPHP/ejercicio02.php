
<!-- funcion HEADER: autenticación usuario -->
<?php
    /* 
     * Author: Sonia Antón Llanes
     * Created on: 26-noviembre-2021
     * Ejercicio 2.Desarrollo de un control de acceso con identificación del usuario basado en la función header()
       y en el uso de una tabla “Usuario” de la base de datos (PDO).
     */

        /* Si el usuario aun no e ha autenticado, pedimos las credenciales*/
            if (!isset($_SERVER['PHP_AUTH_USER'])){
                header('WWW-Authenticate:Basic Realm="Contenido restringido"');
                header('HTTP/1.0 401 Unauthorized');
                exit;
            }
        /* Si ha enviado credenciales comprobamos con la base de datos */
            else{
                require_once '../config/confDBPDO.php';         //LLamo al archivo que contiene los parametros de la conexion
                try {                                           //Conexión: establezco la conexión y el código que quiero realizar
                    $conexion = new PDO (HOST, USER, PASSWORD); // Establezco la CONEXIÓN a la base de datos con los parametros de la conexión  
                    $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //Tratamiento de errores de la clase PDO, con los atributos ATTR_ERRMODE y ERRMODE_EXCEPTION

                    //Busco si existe el usuario y contraseña introducida:
                        $sqlUsuario = <<<EOD
                                SELECT T01_CodUsuario,T01_Password FROM T01_Usuario WHERE 
                                T01_CodUsuario='$_SERVER[PHP_AUTH_USER]' AND 
                                T01_Password=SHA2($_SERVER[PHP_AUTH_USER].$_SERVER[PHP_AUTH_PW],256);
                                EOD;
                        $sqlBuscar = $miDB -> prepare($sqlBuscarDto);  //Con consulta preparada, preparo la consulta que devuelve un objeto PDOStatement
                        $sqlBuscar -> execute();             //ejecuto la consulta

                    //Buscamos en la tabla si algun registro coindice con el usuario-contraseña introducida
                        if ($sqlUsuario->rowCount()==0){   //si no encuentra ningún registro
                            header('WWW-Authenticate:Basic Realm="Contenido restringido"');
                            header('HTTP/1.0 401 Unauthorized');
                            exit;
                        }
                        
                    }  
                    catch (PDOException $error){  //Excepcion: si se producen errores los gestionamos con PDOException
                        echo "<p>Error".$error->getMessage()."</p>";
                        echo "<p>Código del error".$error->getCode()."</p>";
                    }  
                    finally {  //Desconexión: siempre se finaliza la conexión a la base de datos
                        unset($conexion);
                    }

            }
        
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Ejercicio 01</title>
        <meta name="author" content="Sonia Antón Llanes">
        <meta name="description" content="Proyecto DAW2">
        <meta name="keywords" content="">
        <link href="../webroot/css/estiloej.css" rel="stylesheet" type="text/css">
        <link href="../webroot/images/mariposa_vintage.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <style>
            h3{margin-top: 50px;}
        </style>
    </head>
    <body class="container">
        
        <main class="main">
        
            <h2 class="centrado"><a href="../indexProyectoTema5.php" style="border-bottom: 2px solid black">TEMA 5:</a>
                Ejercicio 2.Desarrollo de un control de acceso con identificación del usuario basado en la función header()
                y en el uso de una tabla “Usuario” de la base de datos (PDO).</h2>

            <div>
                <h3>Usuario Autenticado</h3></th>
            
                <?php

                    echo "<p>Hola <span style='color:red;'>".$_SERVER['PHP_AUTH_USER']."</span></p>";
                    echo "<p>Has entrado correctamente con la contraseña <span style='color:red;'>".$_SERVER['PHP_AUTH_PW']."</span></p>";  
                
                ?>
                
            </div>
        </main>
        
        <footer class="footer">
            <nav class="fnav">
                <ul>
                    <li class="ftexto"><a href="../index.php">&copy 2020-21. Sonia Anton LLanes</a></li>
                    <li>
                        
                        <a class="maxMedia" href="doc/curriculum_SALL.pdf" target="_blank"><img src="../webroot/images/CV.png" alt="imagen_CV"></a>
                        <a class="maxMedia" href=""><img src="../webroot/images/linkedin.png" alt="imagen_linkedIn"></a>
                        <a class="maxMedia" href="https://github.com/SoniaALLSauces" target="_blank"><img src="../webroot/images/github.png" alt="imagen_github"></a>
                    </li>
                </ul>
            </nav>
        </footer>   
        
    </body>
</html>
