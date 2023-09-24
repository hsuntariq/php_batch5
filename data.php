<?php
// establish the connection
$conn = mysqli_connect('localhost', 'root', '', 'school');
// get the values from the form
$name = $_POST['name'];
$age = $_POST['age'];
$class = $_POST['class'];

if ($age > 18) {
    // insert into database
    $insert = "INSERT INTO student (name, age, class) VALUES ('$name', $age, '$class')";
    // execute the query
    mysqli_query($conn, $insert);
    // redirect
    header('Location: http://localhost/php_batch5/index.php');
} else {
    echo "<script>
            alert('You are not eligible');
        </script>";
}
?>
