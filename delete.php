<?php
    require_once 'connection.php';
    $id = 0;
     
    if(isset($_GET['id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_GET['id']);
     
    $query ="DELETE FROM students WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
    header('Location: http://localhost:8080/index.php');
}
?>