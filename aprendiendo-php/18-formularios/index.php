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
            <p><input type="text" name="edad" maxlength="1" pattern="[0-9]+"/></p>
            
            <label for="sexo">Sexo: </label>
            <p><input type="text" name="sexo" disabled="disabled"/></p>
            
            <input type="submit" value="Enviar"/>
        </form>
        
    </body>
</html>