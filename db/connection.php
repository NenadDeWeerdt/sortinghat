<?php
function createConnection(){
    $hostname = "sortinghat.nenaddeweerdt.be";
    $dbUser = "user";
    $dbPassword = "Password123";
    $dbName = "sortinghat";
    $dbPort = 3306;
    $conn = mysqli_connect($hostname,$dbUser,$dbPassword,$dbName,$dbPort);
    if($conn == false){
        die();
    }
    return $conn;
}
function getQuery($conn,$query){
    return mysqli_query($conn,$query);
};