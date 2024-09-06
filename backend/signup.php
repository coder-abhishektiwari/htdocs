<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_db";

//connecting to server
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection error: ". $conn->connect_error);
}

//fetching details from form
$user = $_POST['username'];
$pass = $_POST['password'];
$confirm_pass = $_POST['confirmPassword'];

//check password matching
if($pass !== $confirm_pass){
    echo "<script>
            alert('Password and confirm password do not match.');
            window.location.href = '../frontend/pages/signup.html';
          </script>";

    exit();
}

//insert data into database
$sql = "INSERT INTO users (username,password) VALUES ('$user','$pass')";

if($conn->query($sql) == TRUE){
    echo "<script>
            alert('User account succesfully created.');
            window.location.href = '../frontend/pages/signin.html';
          </script>";

}else{
    echo("Error found: ". $conn->connect_error);
}

$conn->close();
?>