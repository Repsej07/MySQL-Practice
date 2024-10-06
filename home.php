<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
        <h1>Welcome to the home page</h1>
        <h1>
        <?php 
        echo "Welcome " . $_SESSION['usernm'];
        ?>
        </h1>
    </body>
</html>