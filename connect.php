<?php
$connection = mysqli_connect('localhost', 'root', '');//The mysqli_connect() function opens a new connection to the MySQL server
if (!$connection){ // Check connection
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test_database'); //The mysqli_select_db() function changes database to "test_database"
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>