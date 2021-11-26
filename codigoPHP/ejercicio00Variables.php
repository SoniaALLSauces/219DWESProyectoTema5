<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Ejercicio 00</title>
        <meta name="author" content="Sonia Antón Llanes">
        <meta name="description" content="Proyecto DAW2">
        <meta name="keywords" content="">
        <link href="../webroot/css/estiloej.css" rel="stylesheet" type="text/css">
        <link href="../webroot/images/mariposa_vintage.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <h2 class="h2"><a href="ejercicio00.php" style="border-bottom: 2px solid black; text-decoration: none;">Ejercicio 00:</a>
             Mostrar el contenido de las Variables Superglobales y phpinfo().</h2>
        <h3>VARIABLES: $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_REQUEST, $_ENV</h3>

        <div>
            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 25-noviembre-2021
             * Ejercicio 0. Variables Superglobales: _SERVER
             */


                //$_GET
                    echo "<tr>";
                        echo "<th><h4>Contenido variable \$_GET </h4></th>";
                    echo "</tr>";
                    echo "<tr> <td>";
                        print_r($_GET);
                    echo "</td> </tr>";

                //$_POST
                    echo "<tr>";
                        echo "<th><h4>Contenido variable \$_POST </h4></th>";
                    echo "</tr>";
                    echo "<tr> <td>";
                        print_r($_POST);
                    echo "</td> </tr>";

                //$_FILES
                    echo "<tr>";
                        echo "<th><h4>Contenido variable \$_FILES </h4></th>";
                    echo "</tr>";
                    echo "<tr> <td>";
                        print_r($_FILES);
                    echo "</td> </tr>";

                //$_COOKIE
                    echo "<tr>";
                        echo "<th><h4>Contenido variable \$_COOKIE </h4></th>";
                    echo "</tr>";
                    echo "<tr> <td>";
                        print_r($_COOKIE);
                    echo "</td> </tr>";

                //$_SESSION
                    echo "<tr>";
                        echo "<th><h4>Contenido variable \$_SESSION </h4></th>";
                    echo "</tr>";
                    echo "<tr> <td>";
                        print_r($_SESSION);
                    echo "</td> </tr>";
                    echo "<tr><td><br></td></tr>";

                //$_REQUEST
                    echo "<tr>";
                        echo "<th><h4>Contenido variable \$_REQUEST </h4></th>";
                    echo "</tr>";
                    echo "<tr> <td>";
                        print_r($_REQUEST);
                    echo "</td> </tr>";

                //$_ENV
                    echo "<tr>";
                        echo "<th><h4>Contenido variable \$_ENV </h4></th>";
                    echo "</tr>";
                    echo "<tr> <td>";
                        print_r($_ENV);
                    echo "</td> </tr>";

                echo "<table>";
            ?>

        </div>
    </body>
</html>
