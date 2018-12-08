<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title> Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre" >Nombre: </label>
            <p><input type="text" name="nombre" autofocus="autofocus"/></p>

            <label for="apellido">Apellido: </label>
            <p><input type="text" name="apellido" pattern="[a-zA-Z]+"/></p>

            <label for="edad">Edad: </label>
            <p><input type="text" name="edad" maxlength="3" pattern="[0-9]+"/></p>

            <label for="boton">Tocame: </label>
            <p><input type="button" value="tocame" name="boton" /></p>

            <label for="edad">Sexo: </label>
            <p>
                Hombre: <input type="checkbox" name="sexo" value="hombre"/>
                Mujer: <input type="checkbox" name="sexo" value="mujer"/>
            </p>

            <label for="color">Color: </label>
            <p><input type="color" name="color"/></p>

            <label for="fecha">Fecha: </label>
            <p><input type="date" name="fecha"/></p>

            <label for="correo">Correo: </label>
            <p><input type="email" name="correo"/></p>

            <label for="archivo">Archivo: </label>
            <p><input type="file" name="archivo"/></p>

            <label for="numero">Numero: </label>
            <p><input type="number" name="numero"/></p>

            <label for="contraseña">Contraseña: </label>
            <p><input type="password" name="contraseña"/></p>

            <label for="Pais">Pais: </label>
            <p>
                Perú: <input type="radio" name="radio" value="Peru"/>
                Argentina: <input type="radio" name="radio" value="Argentina"/>
                Chile: <input type="radio" name="radio" value="Chile"/>
                Brasil: <input type="radio" name="radio" value="Brasil"/>
            </p>

            <label for="web">Web: </label>
            <p><input type="url" name="web"/></p>

            <label for="descripcion">Descripcion: </label>
            <p><textarea name="descripcion"></textarea></p>

            <label for="peliculas">Peliculas: </label>
            <p>
                <select name="peliculas">
                    <option value="Spiderman">Spiderman</option>
                    <option value="Batman">Batman</option>
                    <option value="Thor">Thor</option>
                </select>
            </p>


            <input type="submit" value="Enviar"/>
        </form>

    </body>
</html>