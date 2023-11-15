<?php
 
session_start();
require 'dbconnection.php';
 
if(isset($_POST['register'])){
   
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
 
    $sql = "INSERT INTO client (username, firstname, lastname, email, password ) VALUES(:username, :firstname, :lastname, :email, :password)";
    $run =   $db_connection->prepare($sql);
 
    $client = [
        ':username' => $username,
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email,
        ':password' => $password
    ];
 
    $result = $run->execute($client);
 
    if($result){
        echo "U heeft een account aangemaakt!";
        header("Refresh:3; url=login.php");
        exit(0);
    } else{
        echo "Het is niet gelukt!";
        header("Refresh:3; url=register.php");
        exit(1);
    }
 
 
}
?>