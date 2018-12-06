<?php
$tabla = array(
    "ACCION" => array("GTA", "Call Of Duty", "PUGB", "COD BO"),
    "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTES" => array("Fifa 19", "Pes 19", "Moto G 19", "Baseball 18", "Basket 18")
);

$categorias = array_keys($tabla);

$mayor = 0;
foreach ($tabla as $value) {
    if(count($value)>$mayor){
        $mayor = count($value);
    }
}

?>


<table border = "1">
    <tr>
        <?php
            foreach ($categorias as $categoria) {
            echo "<th>$categoria</th>";
            }
        ?>
    </tr>
    <?php
    $i = 0;
    do {
        echo "<tr>";
            foreach ($categorias as $categoria) {
                if(!empty($tabla[$categoria][$i])){
                    echo "<th>".$tabla[$categoria][$i]."</th>";
                }else{
                    echo "<th></th>";
                }
            }
        echo "</tr>";
        $i++;
    }while($i < $mayor); 
    ?>
</table>