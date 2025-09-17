<?php
$conn = mysqli_connect("localhost","root","","portal");

if (!$conn){
    die ("connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM student WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)> 0){
    header("location:mark.html");

 }else{
    echo "successfully logged in";
}
mysqli_close($conn);
?>