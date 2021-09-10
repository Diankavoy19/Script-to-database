<?php
include("1.php");
$result = mysqli_query($conn,"Select * FROM `художники`");
 ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta lang="uk">
    <meta charset="utf-8">
<title>Картинна галерея</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style16.css" /></head>
<body>
  <h1 class="maintext" align="center">Художники</h1>
  <br>
  <center>
 <table class="a1">
        <tr>
            <td >
              <table class="tab" border="1">
                  <tr>
                    <td class="a">Код Художника &nbsp &nbsp</td>
                    <td class="a">Прізвище &nbsp &nbsp</td>
                    <td class="a">Ім'я &nbsp  &nbsp</td>
                    <td class="a">По-батькові &nbsp  &nbsp</td>
                    <td class="a">Місце Народження &nbsp &nbsp</td>
                    <td class="a">Діяльність &nbsp &nbsp</td>
                  </tr>
              <?php
              while ($conn = mysqli_fetch_assoc($result))
               {
                ?>
                  <tr>
                    <td><?php echo $conn['кодХудожника']; ?></td>
                    <td><?php echo $conn['Прізвище']; ?></td>
                    <td><?php echo $conn["Ім'я"]; ?></td>
                    <td><?php  echo $conn['По-батькові'];?></td>
                    <td><?php echo $conn['Місце Народження']; ?></td>
                    <td><?php echo $conn['Діяльність']; ?></td>
                  </tr>
                <?php 
              }
?>
</table>
</td>
        </tr>
      </table>
     </center></body>
    