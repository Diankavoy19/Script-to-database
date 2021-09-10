<?php
include("1.php");
$result = mysqli_query($conn,"Select * FROM `направлення в мистецтві`");
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
  <h1 class="maintext" align="center">Направлення в мистецтві</h1>
  <br>
  <center>
 <table class="a1">
        <tr>
            <td class="a">
              <table class="tab" border="1">
                  <tr>
                    <td>Код Направлення в мистецтві &nbsp &nbsp</td>
                    <td>Назва Направлення &nbsp &nbsp</td>
                  </tr>
              <?php
              while ($conn = mysqli_fetch_assoc($result))
               {
                ?>
                  <tr>
                    <td><?php echo $conn['Код Направлення в мистецтві']; ?></td>
                    <td><?php echo $conn['Назва Направлення']; ?></td>
                  </tr>
                <?php 
              }
?>
</table>
</td>
        </tr>
      </table>
     <p class="p1">Увага! Щоб додати ще одне з направлень в мистецтві, зверніться за телефоном +380666595300</p></center></body>
    