
<!-- funcion HEADER: autenticación usuario -->
<?php
    /* 
     * Author: Sonia Antón Llanes
     * Created on: 26-noviembre-2021
     * Ejercicio 1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().
     */

        if ($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='paso'){
            header('WWW-Authenticate:Basic Realm="Contenido restringido"');
            header('HTTP/1.0 401 Unauthorized');
            echo "Usuario no reconocido";
            exit;
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
                Ejercicio 1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h2>

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
