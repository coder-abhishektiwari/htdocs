<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_db";

//create conection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connnection failed: ". $conn->connect_error);
}

//get post data
$user = $_POST['username'];
$pass = $_POST['password'];
$confirm_pass = $_POST['confirmPassword'];

//check if password match
if($pass !== $confirm_pass){
    echo "Passwords not match!";
    exit();
}

//insert data into database
$sql = "INSERT INTO users (username,password) VALUES ('$user','$pass')";

if($conn->query($sql) == TRUE){
    echo("Sign Up Successful!");
}else{
    echo("Error: " . $conn->error);
}

$conn->close();
?>