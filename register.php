<?php
require_once("connect.php");
$usernm = $_POST['username'];
try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
    $sql = "SELECT * FROM user WHERE usernm = :username2";
    $result = $db->prepare($sql);
    $result->bindParam(':username2', $usernm);
    $result->execute();
    $user = $result->fetch();
    $user ? $start = true : $start = false;
    if ($start == false) {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
        $sql = "INSERT INTO user(usernm) VALUES(:username1)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username1', $usernm);
        $stmt->execute();
        header("Location: logIn.view.php");
    } else {
        require_once("register.view.php");
        echo '<script>myfunction();</script>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
