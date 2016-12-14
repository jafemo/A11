<?php

include "a11.php";
$tiradas = new jugadorDado();
for ($i=1; $i <= 12; $i++) {
  echo "Tirada " . $i . "<br>";
  echo $tiradas->randompos() . "<br>";
}



 ?>
