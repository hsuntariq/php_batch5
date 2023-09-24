<?php
    // establish connection to the database
    $conn = mysqli_connect('localhost','root','','school');
    $id = $_GET['id'];
    // write the query
    $delete = "DELETE FROM student WHERE id = $id";
    // execute the
    mysqli_query($conn,$delete);
    header("Location: http://localhost/php_batch5/index.php")
?>