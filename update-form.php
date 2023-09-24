<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $conn = mysqli_connect('localhost','root','','school');
        $select = "SELECT * FROM student WHERE id = $id";
        $result = mysqli_query($conn,$select);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                // print_r($row);
                echo "
                <form action='./update.php' method='POST' class='border p-4 rounded col-lg-5 m-auto'>
                <div class='display-2 text-center'>
                    Update record
                </div>
                <input name='id' type='hidden' value='{$row['id']}'>
                <label for=''>Name</label>
                <input class='form-control' type='text' name='name' value='{$row['name']}'>
                <label for=''>Age</label>
                <input class='form-control' type='number' name='age' value='{$row['age']}'>
                <label for=''>Class</label>
                <input class='form-control' type='text' name='class' value='{$row['class']}'>
                <button class='w-100 btn btn-dark my-3'>
                    Update Data
                </button>
            </form>
                ";
            }
        }
    ?>


    
</body>
</html>