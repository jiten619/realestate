<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection Failed");
    }
//     echo "<div class='alert alert-success' role='alert'>
//     Database Connection Successful <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//   </div>";
    
?>