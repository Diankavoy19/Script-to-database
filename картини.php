<!DOCTYPE HTML>
<html>
<head>
    <meta lang="uk">
    <meta charset="utf-8">
<title>Картинна галерея</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="mainstyles1.css" /></head>
<body class="nextbody">
    <br> <br>
  <h1 class="maintext" align="center">Картини</h1>
  <br><br><br>
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
    <a href="CreatePicture.php" class="button20">Запропонувати картину</a></center></body>
    