<?php


  for($i = 1; $i<=10; $i++){

  echo "<h2>TABLA DE MULTIPLICAR DE $i</h2>";

  echo '<table>';

  for ($j=1;$j<=12;$j++){
  echo '<tr>'
  . "<td>$i</td>"
  . "<td> x </td>"
  . "<td>$j</td>"
  . "<td> = </td>"
  . '<td>'.($i*$j).'</td>'
  . '</tr>';
  }
  echo '</table>';
  echo "<hr>";

  }
 

/*
echo "<table border='1'>";
echo '<tr>';

for ($i = 1; $i <= 10; $i++) {

    echo "<td>TABLA DEL $i";

    echo "<table border='1'>";

    for ($j = 1; $j <= 12; $j++) {
        echo '<tr>';
        echo "<td>$i x $j = " . ($i * $j) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo "</td>";
}
echo '</tr>';
echo '</table>';*/
?>