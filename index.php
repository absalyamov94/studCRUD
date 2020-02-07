<?php
require_once 'connection.php'; // подключаем скрипт
 
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
// выполняем операции с базой данных
$query ="SELECT * FROM students";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Name</th><th>Score</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
            echo "<td>";
                echo '<a  href="delete.php?id='.$row[0].'">Delete</a>';
            echo "</td>";
            echo "<td>";
                echo '<a  href="update.php?id='.$row[0].'">Update</a>';
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo"<a href='create.html'>Add a new student</a>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
// закрываем подключение
mysqli_close($link);
?>