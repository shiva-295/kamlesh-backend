<?php

include "../includes/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $sql = "INSERT INTO user1(username,email,password,phone)   VALUES (:username,:email,:password,:phone)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":phone", $phone);
    $stmt->execute();
}
