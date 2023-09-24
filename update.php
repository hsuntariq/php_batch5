<?php
    $conn = mysqli_connect('localhost','root','','school');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];
    // echo $id,$name,$age,$class;
    $update = "UPDATE student SET name='{$name}', age=$age, class='{$class}' WHERE id = $id";
    // doing go's work
    mysqli_query($conn,$update);
    header("Location: http://localhost/php_batch5/index.php");
?>