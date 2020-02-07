<?php
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 
mysqli_query($link, "UPDATE students SET name='".$_POST['name']."', score='".$_POST['score']."' WHERE id=".$_POST['id']."");
header('Location: http://localhost:8080/index.php');
?>