<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>
Show Data</title>
</head>
<body>
        <div class="container text-center">
        <div class="display-2">
                    Student Record
                </div>
        <h4>
            <a href="./getData.php">
                Add Record
            </a>
        </h4>

            <table class="table table-striped border text-capitalize">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Class</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

            <tbody>

            <?php
                // establish the connection
                $conn = mysqli_connect('localhost','root','','school') or die('Connection failed');
                // write the query
                $select = 'SELECT * FROM student';
                // execute the query
                $result = mysqli_query($conn,$select);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                            <td> {$row['id']} </td>
                            <td> {$row['name']} </td>
                            <td> {$row['age']} </td>
                            <td> {$row['class']} </td>
                            
                            <td>
                                <a href='./update-form.php?id={$row['id']}' class='btn btn-info'>
                                    Update
                                </a>
                            </td>

                            <td>
                                <a href='./delete.php?id={$row['id']}' class='btn btn-danger'>
                                Delete
                                </a>
                            </td>
                        </tr>";
                    }
                }

            ?>
            </tbody>

            </table>

            



            
        </div>
</body>
</html>