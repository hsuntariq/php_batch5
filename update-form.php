<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update Data</title>
</head>
<body>
        <?php
            // connect to the database
            $conn = mysqli_connect('localhost','root','','school') or die('connection failed');
            $id = $_GET['id'];
            $select = "SELECT * FROM student WHERE id = $id";
            // ecxcute the query
            $result = mysqli_query($conn,$select);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                   echo "<form action='' class='p-3 border shadow col-lg-5 m-auto rounded'>
                            <div class='display-3 text-center'>
                                Update Data
                            </div>
                            <label for=''>Name</label>
                            <input class='form-control' type='text' name='name' value={$row['name']}>
                            <label for=''>Age</label>
                            <input class='form-control' type='text' name='age' value={$row['age']}>
                            <label for=''>Class</label>
                            <input class='form-control' type='text' name='class' value={$row['class']}>
                            <button class='btn btn-primary my-3 w-100'>
                                Update Record
                            </button>
                    </form>";
                }
            }
        ?>  
</body>
</html>