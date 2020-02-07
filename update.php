<?php
    require_once 'connection.php';
    $id = 0;
     
    if(isset($_GET['id'])){   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_GET['id']);
    $update = true;
    $result = mysqli_query($link,"SELECT * FROM students WHERE id = '$id'") or die("Ошибка " . mysqli_error($link));
    $n = mysqli_fetch_array($result);
    $name = $n['name'];
    $score = $n['score'];
    }
?>
<form action="update2.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">

<p>Insert the name:<br> 
<input type="text" name="name" value="<?php echo $name; ?>" /></p>
<p>Insert the score:<br> 
<input type="text" name="score" value="<?php echo $score; ?>" /></p>
<input type='submit' value='Submit'>