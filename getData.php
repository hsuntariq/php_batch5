<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Student Data</title>
</head>
<body>
    <div class="container border border-warning mx-auto col-lg-6 mt-5 rounded p-4">
        <form action="./data.php" method="POST">
            <label for="">Name</label>
            <input type="text" class="form-control" name='name'>
             
            <label for="">Age</label>
            <input type="number" class="form-control" name='age'>
            
            <label for="">Class</label>
            <input type="text" class="form-control" name='class'>
            <button class="btn btn-dark my-3 w-100">
                Add Data
            </button>
            
        </form>

    </div>
</body>
</html>