<?php
session_start();
include "db_connect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);

if(empty($email)) {
    header ("Location: login.php?error=email is required");
    exit();
}
else if(empty($password)) {
    header ("Location: login.php?error=password is required");
    exit();
}

$sql = "SELECT * FROM user_registration WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);
$result = $conn->query($sql);
if (($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['email'] === $email && $row['password'] === $password) {
        echo "Logged In!";
        $_SESSION['email'] = $row['email'];
        $_SESSIOn['password'] = $row['password'];
        // $_SESSION['name'] = $row['name'];
        // $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: login.php?error=Incorrect email or password");
        exit();
    }
}
else{
    header("Location: login.php");
    exit();
}