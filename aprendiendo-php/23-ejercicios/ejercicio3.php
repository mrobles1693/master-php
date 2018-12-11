<?php
$resultado = false;
if (isset($_POST['x']) && isset($_POST['y'])) {

    $x = (int) $_POST['x'];
    $y = (int) $_POST['y'];
    
    if ($x >= $y) {
        switch ($_POST['operacion']) {
            case 'Sumar':
                $resultado = $x + $y;
                break;
            case 'Restar':
                $resultado = $x - $y;
                break;
            case 'Multiplicar':
                $resultado = $x * $y;
                break;
            case 'Dividir':
                $resultado = $x / $y;
                break;
        }
    }
}
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora PHP</title>
    </head>    
    <body>
        <h1>CALCULADORA PHP</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
            <p>Número 1: <input type="number" name="x"></p>
            <p>Número 2: <input type="number" name="y"></p>
            <input type="submit" value="Sumar" name="operacion" />
            <input type="submit" value="Restar" name="operacion" />
            <input type="submit" value="Multiplicar" name="operacion" />
            <input type="submit" value="Dividir" name="operacion" />
        </form>        
    </body>
</html>

<?php
if ($resultado != false) {
    echo '<hr>';
    echo "El resultado es: $resultado";
}
?>