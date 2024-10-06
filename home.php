<?php 
session_start();
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
    <head>

    </head>
    <body>
        <div class="main-container">
        <div class="eerste-container">
        <h3>Home</h3>
        </div>

        <h1>
        <?php 
        echo "Welcome " . $_SESSION['usernm'];
        ?>
        </h1>
        </div>
    </body>
</html>