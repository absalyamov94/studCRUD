<?php
require_once 'connection.php';
if(isset($_POST['name']) && isset($_POST['score']))
{
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
    $name = htmlentities($_POST['name']);
    $score = htmlentities($_POST['score']);
    $query ="INSERT INTO students (name, score) VALUES('$name','$score')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span></br>";
        header('Location: http://localhost:8080/index.php');
    }
    
}
?>