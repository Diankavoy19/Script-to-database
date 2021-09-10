<?php
include("1.php");
$result = mysqli_query($conn,"Select * FROM `виставки`");

?> 
<!DOCTYPE HTML> 
<html>
<head>
<meta lang="uk">
<meta charset="utf-8">
<title>Картинна галерея</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="mainstyles1.css" />
    <script type="text/javascript">
  var total_pics_num = 4; // кількість зображень
  var interval = 5000;    // затримка між зображеннями
  var time_out = 1;       // затримка зміни зображення
  var i = 0;
  var timeout;
  var opacity = 100;
  function fade_to_next() {
    opacity--;
    var k = i + 1;
    var image_now = 'image_' + i;
    if (i == total_pics_num) k = 1;
    var image_next = 'image_' + k;
    document.getElementById(image_now).style.opacity = opacity/100;
    document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';
    document.getElementById(image_next).style.opacity = (100-opacity)/100;
    document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';
    timeout = setTimeout("fade_to_next()",time_out);
    if (opacity==1) {
      opacity = 100;
      clearTimeout(timeout);
    }
  }
  setInterval (
    function() {
      i++;
      if (i > total_pics_num) i=1;
      fade_to_next();
    }, interval
  );
</script>  
</head>
<body>
  <nav id="mainNav">
  <ul>
      <li><a href="#"><i ></i><p class="maintext">Картинна галерея</p></a>
      <ul class="sub-menu">
        <li><a href="http://localhost/ravi/%D1%85%D1%83%D0%B4%D0%BE%D0%B6%D0%BD%D0%B8%D0%BA%D0%B8.php"><i ></i> Художники</a></li>
        <li><a href="http://localhost/ravi/%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%B8.php"><i ></i> Картини</a></li>
        <li><a href="vist.php"><i ></i> Виставки</a></li>
      </ul>
    </li>
  </ul><div class="clr"></div>
</nav> 
    <div class="intro1" >
         <div >
  <img class="Photos" src='img/Main.jpg'  id="image_1" style="position: absolute;" />
  <img class="Photos" src='img/Main1.jpg' id="image_2" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
  <img class="Photos" src='img/Main3.jpg' id="image_3" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
  <img class="Photos" src='img/Main4.jpg' id="image_4" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" />
</div>
</div>
        <div class="intro" >
        <p align="center" color="black" class="Gallery">Виставки</p>
        <hr width="180px"><br>
        <table class="t1">
          <tr>
              <td><img width="100%" height="470px" src="img/%D0%92%D0%B8%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B01.jpeg"></td>
              <td></td>
              <td><img width="100%" height="470px" src="img/%D0%92%D0%B8%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B02.jpg"></td><td></td>
              <td><img width="100%" height="470px" src="img/%D0%92%D0%B8%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B03.jpg"></td>
            </tr>
            <tr>
          <td class="td1">
              <table  border="1">
                  <tr>
                    <td>Код Виставки &nbsp &nbsp</td>
                    <td>Тема Виставки &nbsp &nbsp</td>
                    <td>Дата початку &nbsp  &nbsp</td>
                    <td>Дата закінчення &nbsp &nbsp</td>
                    <td>Номер білету &nbsp &nbsp</td>
                  </tr>
              <?php
              $conn = mysqli_fetch_assoc($result);
               
                ?>
                  <tr>
                    <td><?php echo $conn['Код Виставки']; ?></td>
                    <td><?php echo $conn['Тема Виставки']; ?></td>
                    <td><?php  echo $conn['Дата початку'];?></td>
                    <td><?php echo $conn['Дата закінчення']; ?></td>
                    <td><?php echo $conn['номер білету']; ?></td>
                  </tr></table></td>
                <td width="40px"></td>
                
                  <td class="td2">
                      
                    <table  border="1">
                  <tr>
                    <td>Код Виставки &nbsp &nbsp</td>
                    <td>Тема Виставки &nbsp &nbsp</td>
                    <td>Дата початку &nbsp  &nbsp</td>
                    <td>Дата закінчення &nbsp &nbsp</td>
                    <td>Номер білету &nbsp &nbsp</td>
                  </tr>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
<tr height="43px">
                    <td><?php echo $conn['Код Виставки']; ?></td>
                    <td><?php echo $conn['Тема Виставки']; ?></td>
                    <td><?php  echo $conn['Дата початку'];?></td>
                    <td><?php echo $conn['Дата закінчення']; ?></td>
                    <td><?php echo $conn['номер білету']; ?></td>
                  </tr></table></td>
                <td width="40px"></td>
                  <td class="td3">
                    <table  border="1">
                  <tr >
                    <td>Код Виставки &nbsp &nbsp</td>
                    <td>Тема Виставки &nbsp &nbsp</td>
                    <td>Дата початку &nbsp  &nbsp</td>
                    <td>Дата закінчення &nbsp &nbsp</td>
                    <td>Номер білету &nbsp &nbsp</td>
                  </tr>
                  <?php 
              $conn = mysqli_fetch_assoc($result);
?>
<tr height="43px">
                    <td><?php echo $conn['Код Виставки']; ?></td>
                    <td><?php echo $conn['Тема Виставки']; ?></td>
                    <td><?php  echo $conn['Дата початку'];?></td>
                    <td><?php echo $conn['Дата закінчення']; ?></td>
                    <td><?php echo $conn['номер білету']; ?></td>
                  </tr></table></td>
                  <td></td></tr></table>
                    
            <a href="Create.php" class="button20">Запропонувати виставку</a>
    </div>
    <div class="intro2" >
        <p align="center" color="black" class="Gallery1">Картини</p>
        <hr width="180px" color="black"><br>
        <center>
        <table class="t2">
          <tr>
              <td class="lineal"><img width="100%" border="2" height="200px" src="img/%D0%91%D0%B5%D0%B7%20%D0%BD%D0%B0%D0%B7%D0%B2%D0%B8.jpg"></td>
              <td class="lineal1"><img width="100%" border="2" height="200px" src="img/%D0%93%D0%B4%D0%B5%20%D0%B6%D0%B5%20%D0%BE%D1%85%D0%BE%D1%82%D0%BD%D0%B8%D0%BA.jpg"></td> 
              <td class="lineal2"><img width="100%" height="200px"  border="2" src="img/%D0%A2%D0%B5%D0%BF%D0%BB%D0%B8%D0%B9%20%D1%80%D0%B0%D0%BD%D0%BE%D0%BA.jpg"></td>
              <td  class="lineal"><img width="100%" height="200px" border="2" src="img/Composition.jpg"></td>
              <td  class="lineal3"><img width="100%" height="200px" border="2" src="img/Skovoroda.jpg"></td>
            </tr>
            <?php 
            include("1.php");
             $result = mysqli_query($conn,"Select * FROM `картини`");
              $conn = mysqli_fetch_assoc($result);
?>
            <tr>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
            </tr>
            <tr>
              <td class="lineal"><br><br><img width="100%" border="2" height="200px" src="img/%D0%92%D0%BE%D0%BD%D0%BE.jpg"></td>
              <td class="lineal1"><br><br><img width="100%" border="2" height="200px" src="img/%D0%A0%D0%BE%D0%BA%D1%81%D0%BE%D0%BB%D0%B0%D0%BD%D0%B0.jpg"></td> 
              <td class="lineal2"><br><br><img width="100%" height="200px"  border="2" src="img/%D0%A0%D1%83%D1%81%D0%B0%D0%BB%D0%BA%D0%B8.jpg"></td>
              <td  class="lineal"><br><br><img width="100%" height="200px" border="2" src="img/%D0%A0%D0%B5%D0%B2%D0%B5%20%D1%82%D0%B0%20%D1%81%D1%82%D0%BE%D0%B3%D0%BD%D0%B5%20%D0%94%D0%BD%D1%96%D0%BF%D1%80%20%D1%88%D0%B8%D1%80%D0%BE%D0%BA%D0%B8%D0%B9.jpg"></td>
              <td  class="lineal3"><br><br><img width="100%" height="200px" border="2" src="img//%D0%9C.%D0%91%D0%B0%D0%B1%D0%B0%D0%BA._%D0%94%D0%B2%D1%96_%D0%B4%D1%83%D1%88%D1%96._1989.jpg"></td>
            </tr>
            <tr>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
            </tr>
            <tr>
              <td class="lineal"><br><br><img width="100%" border="2" height="200px" src="img/%D0%9C%D1%83%D0%B7%D0%B8%D0%BA%D0%B0.jpg"></td>
              <td class="lineal1"><br><br><img width="100%" border="2" height="200px" src="img/DRIVE%209%20(2007).png"></td> 
              <td class="lineal2"><br><br><img width="100%" height="200px"  border="2" src="img/The%20Sorrow%20of%20Cleopatra.jpg"></td>
              <td  class="lineal"><br><br><img width="100%" height="200px" border="2" src="img/%D0%9A%D0%B0%D1%80%D0%BF%D0%B0%D1%82%D1%81%D1%8C%D0%BA%D0%B8%D0%B9%20%D0%BC%D0%BE%D1%82%D0%B8%D0%B2.jpg"></td>
              <td  class="lineal3"><br><br><img width="100%" height="200px" border="2" src="img/%C2%AB%D0%93%D0%BE%D1%81%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%BE-%D0%BF%D1%80%D0%B0%D0%B1%D0%B0%D0%B1%D0%B8-%D0%A8%D1%83%D1%80%D0%B8%C2%BB-2010-181.jpg"></td>
            </tr>
            <tr>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td><?php echo $conn['Назва']; ?></td>
            </tr>
            </table>
        <a href="CreatePicture.php" class="button20">Запропонувати картину</a></center></div>
    <div class="intro3" >
        <p align="center" color="black" class="Gallery">Художники</p>
        <hr width="180px"><br>
        <center>
        <table class="t1">
          <tr>
              <td><img width="100%" height="470px" src="img/%D0%9A%D1%80%D0%B8%D0%B2%D0%BE%D0%BB%D0%B0%D0%BF%20%D0%90.%D0%94..jpg"></td>
              <td width="40px"></td>
              <td ><img width="100%" height="470px" src="img/%D0%9A%D1%83%D1%87%D0%B5%D1%80%D1%8F%D0%B2%D0%B8%D0%B9%20%D0%92%D1%96%D0%BA%D1%82%D0%BE%D1%80.jpg"></td>
              <td width="40px"></td>
              <td><img width="100%" height="470px" src="img/%D0%92%D1%96%D0%BA%D1%82%D0%BE%D1%80%20%D0%A1%D0%B8%D0%B4%D0%BE%D1%80%D0%B5%D0%BD%D0%BA%D0%BE.jpg"></td>
            </tr>
            <?php 
            include("1.php");
             $result = mysqli_query($conn,"Select * FROM `художники`");
              $conn = mysqli_fetch_assoc($result);
?>
            <tr>
                <td align="center"><?php echo $conn['Прізвище']; ?>&nbsp &nbsp<?php echo $conn["Ім'я"]; ?></td>
                <td></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td align="center"><?php echo $conn['Прізвище']; ?>&nbsp &nbsp<?php echo $conn["Ім'я"]; ?></td>
                <td></td>
                <?php 
              $conn = mysqli_fetch_assoc($result);
?>
                <td align="center"><?php echo $conn['Прізвище']; ?>&nbsp &nbsp<?php echo $conn["Ім'я"]; ?></td>
            </tr>
            </table>
        <a href="художники.php" class="button20">Більше художників</a></center>
    </div>
    
       
</body>
</html>