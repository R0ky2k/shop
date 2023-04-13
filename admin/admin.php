<?php session_start();?>
<?php require_once "../func/connect.php"; ?>
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);



$login = $_POST["login"];
$password = $_POST["password"];

$sql = $pdo->prepare("SELECT id FROM users WHERE login=:login AND password=:password");
$sql->execute(array("login"=> $login, "password" => $password));
$array = $sql->fetch(PDO::FETCH_ASSOC);
if($array["id"] > 0){
    $_SESSION["login"] = $array["login"];
    $_SESSION["login"] = $login;
    header('Location:../index.html');
} else {
    header('Location:../login.html');
}