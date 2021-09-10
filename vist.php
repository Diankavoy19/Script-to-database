<?php
include("1.php");
$result = mysqli_query($conn,"Select * FROM `виставки`");
if(isset($_GET['del_id'])){
    $sql = 'DELETE FROM `виставки` WHERE `виставки`.`Код Виставки`= "'.$_GET['del_id'].'"';
    $result = mysqli_query($conn,$sql);
    if($result){
        header('Location: http://localhost/ravi/vist.php');
    }
    else{
        echo('Помилка! <br>'.$conn->error);
    }
}
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
  <h1 class="maintext" align="center">Виставки</h1>
  <br>
  <center>
 <table class="a1">
        <tr>
            <td >
              <table class="tab" border="1">
                  <tr>
                    <td class="a">Код Виставки &nbsp &nbsp</td>
                    <td class="a">Тема Виставки &nbsp &nbsp</td>
                    <td class="a">Дата початку &nbsp  &nbsp</td>
                    <td class="a">Дата закінчення &nbsp &nbsp</td>
                    <td class="a">Номер білету &nbsp &nbsp</td>
                      <td></td>
                      <td></td>
                  </tr>
              <?php
              while ($conn = mysqli_fetch_assoc($result))
               {
                ?>
                  <tr>
                    <td><?php echo $conn['Код Виставки']; ?></td>
                    <td><?php echo $conn['Тема Виставки']; ?></td>
                    <td><?php  echo $conn['Дата початку'];?></td>
                    <td><?php echo $conn['Дата закінчення']; ?></td>
                    <td><?php echo $conn['номер білету']; ?></td>
                      <td><a href="Update.php?upd_id=<?php echo $conn['Код Виставки']; ?>">Редагувати</a></td>
                    <td><a href="vist.php?del_id=<?php echo $conn['Код Виставки']; ?>">Видалити</a></td>
                  </tr>
                <?php 
              }
?>
</table>
</td>

        </tr>
      </table>
     <a href="Create.php" class="button20">Запропонувати виставку</a></center></body>
    