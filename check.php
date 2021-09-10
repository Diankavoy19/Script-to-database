<?php 
$servername = "localhost";
$username = "root";
$password = "";
$name = "diana";

$КодВиставки = $_POST['id'];
$ТемаВиставки = $_POST['Thema'];
$Датапочатку = $_POST['Start'];
$Датазакінчення = $_POST['End'];
$номербілету = $_POST['Number'];

$conn = new mysqli($servername,$username,$password,$name);
$sql = "INSERT INTO `виставки`( `Код Виставки`,`Тема Виставки`,`Дата початку`, `Дата закінчення`, `номер білету`) VALUES('$КодВиставки','$ТемаВиставки','$Датапочатку','$Датазакінчення','$номербілету')";


if ($conn->query($sql) === TRUE){
    echo "Дані надіслано";
} else {
    echo "Error :".$sql. "<br>" . $conn->error;
}
$conn->close();
    ?>