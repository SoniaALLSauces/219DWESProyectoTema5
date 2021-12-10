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
            Script Cargar Datos en la Tabla Departamentos</h2>
        

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
                    $sqlCargar = <<<EOD
                            USE dbs4868815; 
                            INSERT INTO T02_Departamento(T02_CodDepartamento,T02_DescDepartamento,T02_VolumenDeNegocio,T02_FechaBajaDepartamento) VALUES
                                ('INF', 'Departamento de informatica',1,null),
                                ('VEN', 'Departamento de ventas',2,null),
                                ('CON', 'Departamento de contabilidad',3,null),
                                ('MTO', 'Departamento de mantenimiento',5,null),
                                ('ADM', 'Departamento de administracion',6,null);
                            INSERT INTO T01_Usuario(T01_CodUsuario,T01_Password,T01_DescUsuario) VALUES
                                ('outmane',SHA2('outmanepaso',256),'Outmane'),
                                ('rodrigo',SHA2('rodrigopaso',256),'Rodrigo'),
                                ('isabel',SHA2('isabelpaso',256),'Isabel'),
                                ('david',SHA2('davidpaso',256),'David'),
                                ('albertoF',SHA2('albertoFpaso',256),'AlbertoF'),
                                ('aroa',SHA2('aroapaso',256),'Aroa'),
                                ('johanna',SHA2('johannapaso',256),'Johanna'),
                                ('oscar',SHA2('oscarpaso',256),'Oscar'),
                                ('sonia',SHA2('soniapaso',256),'Sonia'),
                                ('heraclio',SHA2('heracliopaso',256),'Heraclio'),
                                ('amor',SHA2('amorpaso',256),'Amor'),
                                ('antonio',SHA2('antoniopaso',256),'Antonio'),
                                ('albertoB',SHA2('albertoBpaso',256),'AlbertoB');
                            INSERT INTO T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES
                                ('admin',SHA2('adminpaso',256),'Admin','administrador');
                            EOD;
                    
                /* try..catch con PDOException para establecer conexión y controlar errores */
                    try {  //Conexión: establezco la conexión y el código que quiero realizar           
                        $miDB = new PDO (HOST, USER, PASSWORD);  //establezco conexión con objeto PDO 
                        $miDB ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //y siempre lanzo excepción utilizando manejador propio PDOException cuando se produce un error
                        
                        $cargar = $miDB -> prepare($sqlCargar);  //Con consulta preparada, preparo la consulta
                        $cargar ->execute();                    //ejecuto la consulta
                        
                        echo "<h3>TABLA DEPARTAMENTOS tiene REGISTROS</h3>";
                        
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