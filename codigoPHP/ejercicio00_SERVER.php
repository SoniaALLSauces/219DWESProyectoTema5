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
        <h3>$_SERVER</h3>

        <div>
            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 25-noviembre-2021
             * Ejercicio 0. Variables Superglobales: _SERVER
             */


                /* Mostramos $_SERVER */  
            ?>
                <table class="tableVariable">
                    <tr>
                        <td><h4>recorremos con el foreach</h4></td>
                    </tr>
                </table>
                <table class="tableVariable">
            <?php
                    foreach ($_SERVER as $elemento => $valor) {
                        echo "<tr>";
                        print_r("<td class=\"td\">$elemento</td> <td class=\"td\">$valor</td>");
                        echo "</tr>";
                    }
            ?>
                </table>
                
                <table class="tableVariable">
                    <tr>
                        <td><h4>mostramos con print_r (con preformato)</h4></td>
                    </tr>
                </table>
                <table class="tableVariable">
                    <tr>
                        <td><pre>
                            <?php print_r($_SERVER); ?>
                        </pre></td>
                    </tr>
                </table>

        </div>
    </body>
</html>
