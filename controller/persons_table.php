<?php
require_once (dirname(__DIR__).'\model\person_class.php');
echo "<table class='table table-hover'>";
echo"<thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Ime</th>
      <th scope='col'>Datum rodjenja</th>
      <th scope='col'>Iz</th>
      <th scope='col'>Detaljno</th>
    </tr>
  </thead>";
  $i=1;
foreach($table_person as $red){
  echo"<thead>";
    echo"<tr>";
      echo "<td scope='col'>$i</td>";
      echo "<td scope='col'>".$red['ime']."</td>";
      echo "<td scope='col'>".$red['datum_rodjenja']."</td>";
      echo "<td scope='col'>".$red['mesto_rodjenja']."</td>";
      echo"<td scope='col'><a href='../controller/person_details.php?id=".$red['id_osobe']."'>Detaljno</a></td>";
    echo"</tr>";
  echo "</thead>";
    $i++;
}

echo "</table>";
?>