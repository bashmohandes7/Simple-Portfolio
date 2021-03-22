<?php

function addNewUser($name , $email, $password){
// Database Connection
$dbConnect = mysqli_connect("localhost", "root", "", "resume");
// insert data
$insertQuery = "INSERT INTO `user`(`name`,`email`,`password`) VALUES('$name', '$email', '$password')";
mysqli_query($dbConnect, $insertQuery);
// Affected Rows
$res = mysqli_affected_rows($dbConnect);
if($res == 1){
    return true;
}else{
    return false;
}
}

function login($email, $password){
    // Database Connection
$dbConnect = mysqli_connect("localhost", "root", "", "resume");
// insert data
$selectQuery = "SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'";
$q = mysqli_query($dbConnect, $selectQuery);
$res = mysqli_fetch_assoc($q);
return $res;
}