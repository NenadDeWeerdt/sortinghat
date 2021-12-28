<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/add.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php
    $hostname = "sortinghat.nenaddeweerdt.be";
    $dbUser = "user";
    $dbPassword = "Password123";
    $dbName = "sortinghat";
    $dbPort = 3306;
    $conn = mysqli_connect($hostname,$dbUser,$dbPassword,$dbName,$dbPort);
    if($conn == false){
        echo "error";
        die();
    }
    ?>
    <div id="form">
        <form action="add.php" method="GET">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" required><br>
        <br>
        <label for="age">Age</label><br>
        <input type="number" name="age" id="age" required><br>
        <br>
        <label for="gender">Gender</label><br>
        <input type="text" name="gender" id="gender" required><br>
        <br>
        <label for="description">Description</label><br>
        <input type="text" name="description" id="description" required height="20px"><br>
        <br>
        <input type="submit" value="add person">
        </form>
    </div>
</body>
</html>