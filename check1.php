<?php 
$servername = "localhost";
$username = "root";
$password = "";
$name = "diana";

$НазваКартини = $_POST['Name'];
$Датанаписання = $_POST['Start'];
$КодХудожника = $_POST['idart'];
$КодНаправленнявмистецтві = $_POST['Number'];

$conn = new mysqli($servername,$username,$password,$name);
$sql = "INSERT INTO `картини`( `Назва`,`Рік написання`, `КодХудожника`, `Код Направлення в мистецтві`) VALUES('$НазваКартини','$Датанаписання','$КодХудожника','$КодНаправленнявмистецтві')";


if ($conn->query($sql) === TRUE){
    echo "Дані надіслано";
} else {
    echo "Error :".$sql. "<br>" . $conn->error;
}
$conn->close();
    ?>