<?php
include"db/connection.php";
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

        $name = $_GET["name"];
        $age = $_GET["age"];
        $gender = $_GET["gender"];
        $description = $_GET["description"]; 
        $getID = "SELECT personID FROM persons group by personID desc limit 1;";
        $id = getQuery($conn,$getID);
        $i = $id +1;
        $sqlInsert = "INSERT INTO persons(name, age, gender, description) VALUES ('$name','$age','$gender','$description');";
        mysqli_query($conn,$sqlInsert);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/add.css" type="text/css">
        <title>Document</title>
</head>
<body>
        <div id="sort">
        <h1>Person added succesfully</h1>
        <?php
                $getSQL = "select * from persons;";
                $persons = getQuery($conn,$getSQL);
                foreach($persons as $person){
                echo "<li>" . $person["name"] . " " . $person["age"] ." " . $person["gender"] . " " . $person["description"] . "</li>";
                }
        ?>
        <br>
        <button><a href="index.php">return to homepage</a></button>
        <button><a href="addperson.php">add another person</a></button>
        <button><a href="sortpeople.php">sort people</a></button>
        </div>
</body>
</html>
