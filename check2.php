<?php 
$servername = "localhost";
$username = "root";
$password = "";
$name = "diana";

$Прізвище = $_POST['SurName'];
$Імя = $_POST['Name'];
$Побатькові = $_POST['Father'];
$МісцеНародження = $_POST['City'];
$Діяльність = $_POST['Activity'];

$conn = new mysqli($servername,$username,$password,$name);
$sql = "INSERT INTO `художники`( `Прізвище`, `Ім'я`, `По-батькові`, `Місце Народження`, `Діяльність`) VALUES('$Прізвище','$Імя','$Побатькові','$МісцеНародження','$Діяльність')";


if ($conn->query($sql) === TRUE){
    echo "Дані надіслано";
} else {
    echo "Error :".$sql. "<br>" . $conn->error;
}
$conn->close();
    ?>