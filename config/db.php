<?php

#CONNECT TO DATABSE
// takes 4 params, localhost, user, password and db name

$conn = mysqli_connect('localhost', 'root', '*******', 'phpblog');
// $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_USER);


//check the connection
if(mysqli_connect_errno()){
    //Connection Failed
    echo 'Failed to connect to MySQL: '.mysqli_connect_errno();
}



?>
