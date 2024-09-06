<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_db";

//connecting to server
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}

//fetching details from form
$user = $_POST['username'];
$pass = $_POST['password'];

//fetching details from server
$sql = "SELECT id, username, password FROM users WHERE username='$user'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $rows = $result->fetch_assoc();

    $fetched_user = $rows['username'];
    $fetched_pass = $rows['password'];

    if ($pass===$fetched_pass){
        $_SESSION['userid'] = $rows['id'];
        $_SESSION['username'] = $user;
        header("Location: ../index.php");
    }else{
        echo("Oh no Incorrect Password!");
    }
}else{
    echo("Oh no user not found. Please check and enter correct username.");
}


$conn->close();

?>