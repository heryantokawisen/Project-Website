<?php
require 'index.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_users (fullname, username, email, password) 
            VALUES ('$fullname', '$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login1.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
