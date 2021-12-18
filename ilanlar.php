<?php 

include ("baglan.php");
include ("header.php");



$sql = 'SELECT * FROM ilan ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlanlar</title>
</head>
<body>
<div class="container">   
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kan Grubu</th>
      <th scope="col">Şehir</th>
      <th scope="col">Cinsiyet</th>
      <th scope="col">Hastane</th>
      <th scope="col">Mail</th>
      <th scope="col">Başvuru</th>
    </tr>
  </thead>
<?php
foreach ($db->query($sql) as $row) {
?>
    <tr>
    <td><?php  print $row[0];  ?> </td>
    <td><?php  print $row[1];    ?>  </td>
    <td><?php  print $row[2];  ?></td>
    <td><?php  print $row[3];  ?></td>
    <td><?php  print $row[4];  ?></td>
    <td><?php  print $row[5];  ?></td>
    <td><a href="mailto://<?=$row[5]?>" class="btn btn-info">Başvur</a></td>
  </tr>
  <?php 
        
    }
?>

</table>
</div>
</body>
</html>