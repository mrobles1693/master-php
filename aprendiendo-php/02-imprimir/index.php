<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Imprimir por Pantalla - Master en PHP</title>
    </head>
    <body>       
        <h1>Master en PHP - Mario Robles</h1>        
         <?="Bienvenido al Curso más grande de PHP"?>
        <?php
            // Titular de la Seccion:
            /* Esta es
             * una lista de videojuegos
             */
            echo "<h3>Listado de videojuegos: </h3>";
            echo "<ul>"
                    ."<li>GTA</li>"
                    ."<li>FIFA</li>"
                    ."<li>Mario Bros</li>"
                    ."</ul>";
            //Parrafo explicativo:
            echo '<p>Esta es toda'.' - '.'la lista de juegos</p>';
        ?>
    </body>
</html>