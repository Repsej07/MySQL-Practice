<?php
require_once("connect.php");
session_start();
$_SESSION['usernm'] = $_POST['username'];
$usernm = $_POST['username'];
try{
    $db = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
    $sql = "SELECT * FROM user WHERE usernm = :username2";
    $result = $db->prepare($sql);
    $result->bindParam(':username2', $usernm);
    $result->execute();
    $user = $result->fetch();
    $user ? $start = true : $start = false;
     if($start == true){
        header("Location: home.php");
    } else {
         require_once("logIn.view.php");
        echo '<script>myfunction2();</script>';
 }
} catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}