<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    </head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <!-- LOGO -->
            <div id="logo">
                <a href="index.php">
                    Blog de Videojuegos
                </a>
            </div>


            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 1</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 2</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 3</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 4</a>
                    </li>
                    <li>
                        <a href="index.php">Sobre mi</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>

        <div id="contenedor">
            <!-- BARRA LATERAL -->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">

                        <label for="password">Contraseña: </label>
                        <input type="password" name="password">

                        <input type="submit" value="ENTRAR">
                    </form>
                </div>

                <div id="register" class="bloque">
                    <h3>Registrate</h3>
                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre">

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos">

                        <label for="email">Email</label>
                        <input type="email" name="email">

                        <label for="password">Contraseña: </label>
                        <input type="password" name="password">

                        <input type="submit" value="REGISTRAR">
                    </form>
                </div>
            </aside>

            <!--CAJA PRINCIPAL-->



            <div id="principal">
                <h1>Ultimas Entradas</h1>
                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            DESCRIPCION DE MI ENTRADA.

                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </a>
                </article>

                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            DESCRIPCION DE MI ENTRADA.

                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </a>
                </article>

                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            DESCRIPCION DE MI ENTRADA.

                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </a>
                </article>

                <article class="entrada">
                    <a href="">
                        <h2>Titulo de mi entrada</h2>
                        <p>
                            DESCRIPCION DE MI ENTRADA.

                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </a>
                </article>

                <div id="ver-todas">
                    <a href="">Ver todas las entradas</a>
                </div>

            </div>

            <div class="clearfix"></div>
        </div>

        <!--FOOTER-->
        <footer id="pie">
            <p>Desarrollado por Mario Robles &copy; 2018</p>
        </footer>

    </body>
</html>