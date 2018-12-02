<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="GET" action="recibir.php">
            <p>
                <label for="txt_nombre">Nombre</label>
                <input type="text" name="txt_nombre"/>
            </p>
            <p>
                <label for="txt_apellido">Apellido</label>
                <input type="text" name="txt_apellido"/>
            </p>
            <input type="submit" value="ENVIAR DATOS" name="envio_datos" />
        </form>
    </body>
</html>