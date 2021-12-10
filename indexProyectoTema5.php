<!DOCTYPE html>

<!-- Author: Sonia Antón Llanes -->
<!-- Created on: 24-noviembre-2021 -->
<!-- Index Ejercicios del Tema 5 DWES -->

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - index Tema 5</title>
        <meta name="author" content="Sonia Antón Llanes">
        <meta name="description" content="Proyecto DAW2">
        <meta name="keywords" content="">
        <link href="webroot/css/newcss.css" rel="stylesheet" type="text/css">
        <link href="webroot/images/mariposa_vintage.png" rel="icon" type="image/png">	
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
        <style>
            .sql0{width: 4%;
                  background: white;}
            .sql{width: 32%;
                 background: white;}
            .sql>*{border: 1px solid #BF2411;
                   border-radius: 10px;
                   padding: 5px;}
        </style>
    </head>
    <body class="container">
	<header class="header">
            <h1 class="h1"><a href="../index.html" style="color: white">Desarrollo de Aplicaciones Web</a></h1>
	</header>
	<main class="main">
            <section>
                <h2><a href="../proyectoDWES/indexProyectoDWES.php">DWES</a> - Tema 5. Desarrollo de Aplicaciones Web utilizando Código Embebido</h2>
                <h3>Prácticas con Autentificación y Contro de Acceso</h3>
                <table>
                    <tr class="tr">
                        <td class="ejercicio" colspan="4"><a href="mostrarCodigo/muestraCreaDepartamentos.php">Scripts Crear / CargaInicial / Borrar Departamentos y Usuarios</a></td>
                    </tr>
                    <tr class="tr">
                        <th class="ejercicio sql0"></td>
                        <th class="ejercicio sql"><a href="scriptDB/creaDAW219DBDepartamentos1&1.php">CREAR TABLAS <span>Tabla</span></a></td>
                        <th class="ejercicio sql"><a href="scriptDB/cargaInicialDAW219DBDepartamentos1&1.php">CARGA INICIAL <span>Tabla</span></a></td>
                        <th class="ejercicio sql"><a href="scriptDB/borraDAW219DBDepartamentos1&1.php">BORRAR TABLAS <span>Tabla</span></a></td>
                    </tr>
                    <tr class="tr">
                        <td class="ejercicio" colspan="4"><a href="mostrarCodigo/muestraConfigDBPDO.php">Fichero de Configuración</a></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th></th>
                        <th>Ejecutar</th>
                        <th>Mostrar</th>
                    </tr>
                    <tr class="tr"> 
                        <td class="ejercicio"><h3>Ejercicio 00. VARIABLES SUPERGLOBALES y PHPINFO()</h3>
                            <h5>Mostrar el contenido de las variables superglobales y phpinfo().</h5></td>
                        <td class="tdimg"><a href="codigoPHP/ejercicio00.php"><img src="webroot/images/ejecutar.png" alt="ejecutar"></a></td>
                        <td class="tdimg"><a href="mostrarCodigo/muestraEjercicio00.php"><img src="webroot/images/mostrar.png" alt="mostrar"></a></td>
                    </tr>
                    <tr class="tr"> 
                        <td class="ejercicio"><h3>Ejercicio 01. CONTROL DE ACCESO CON LA FUNCION HEADER()</h3>
                            <h5>Desarrollo de un control de acceso con identificación del usuario (admin/paso) basado en la función header()</h5></td>
                        <td class="tdimg"><a href="codigoPHP/ejercicio01.php"><img src="webroot/images/ejecutar.png" alt="ejecutar"></a></td>
                        <td class="tdimg"><a href="mostrarCodigo/muestraEjercicio01.php"><img src="webroot/images/mostrar.png" alt="mostrar"></a></td>
                    </tr>
                    <tr class="tr"> 
                        <td class="ejercicio"><h3>Ejercicio 02. CONTROL DE ACCESO CON LA FUNCION HEADER() USANDO UNA TABLA "Usuario"</h3>
                            <h5>Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).</h5></td>
                        <td class="tdimg"><a href="codigoPHP/ejercicio02.php"><img src="webroot/images/ejecutar.png" alt="ejecutar"></a></td>
                        <td class="tdimg"><a href="mostrarCodigo/muestraEjercicio02.php"><img src="webroot/images/mostrar.png" alt="mostrar"></a></td>
                    </tr>
                    <tr class="tr"> 
                        <td class="ejercicio"><h3>Ejercicio 03. PROYECTO LOGINLOGOUT</h3>
                            <h5></h5></td>
                        <td class="tdimg"><a href="../219DWESProyectoLoginLogoutTema5/indexProyectoLoginLogoutTema5.php"><img src="webroot/images/ejecutar.png" alt="ejecutar"></a></td>
                        <td class="tdimg"><a href=""><img src="webroot/images/mostrar.png" alt="mostrar"></a></td>
                    </tr>
                    
                    
                    
                    <tr>
                        <td class="trfin">.</td>
                        <td>.</td>
                        <td>.</td>
                    </tr>
                </table>
            </section>
        </main>
        <footer class="footer">
            <nav class="fnav">
                <ul>
                    <li class="ftexto"><a href="../index.html">&copy 2020-21. Sonia Anton LLanes</a></li>
                    <li>
                        
                        <a class="maxMedia" href="doc/curriculum_SALL.pdf" target="_blank"><img src="webroot/images/CV.png" alt="imagen_CV"></a>
                        <a class="maxMedia" href=""><img src="webroot/images/linkedin.png" alt="imagen_linkedIn"></a>
                        <a class="maxMedia" href="https://github.com/SoniaALLSauces/219DWESProyectoTema5.git" target="_blank"><img src="webroot/images/github.png" alt="imagen_github"></a>
                    </li>
                </ul>
            </nav>
        </footer>       
    </body>
</html>