<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/sort.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php 
    include "db/connection.php";
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
        $id = 32;
        $getPersons = "select * from persons where personID = $id;";
        $id++;
        $persons = getQuery($conn,$getPersons);
        foreach($persons as $person){
        echo "<h1>" . $person["name"] . "</h1>";
        echo "<a>" . $person["age"] . " years old" . "</a>" . "<br>";
        echo "<a>" . "gender: " . $person["gender"] . "</a>" . "<br>";
        echo "<a>" . "description: " . $person["description"] . "</a>" . "<br>";
        ?>
        <div id="houses">
            <button id="gryffindor">Gryffindor</button>
            <button id="slytherin">Slytherin</button><br>
            <button id="ravenclaw">Ravenclaw</button>
            <button id="hufflepuff">Hufflepuff</button>
        </div>
        <?php
        }
    ?>
</body>
</html>