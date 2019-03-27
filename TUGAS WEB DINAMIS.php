<?php
$cars = array
  (
  array("Volvo",22,18),
  array("Mercedez Benz",15,13),
  array("Hino RK",5,2),
  array("SCANIA",17,15)
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Nomor $row</b></p>";
  echo "<ul>";
  for ($i = 0; $i < 3; $i++) {
    echo "<li>".$cars[$row][$i]."</li>";
  }
  echo "</ul>";
}
?>