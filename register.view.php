<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="login-container">
        <h2>Sign up</h2>
        <form action="register.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <button type="submit">Register</button>
            <a href="logIn.view.php" style="margin-top: 10px;">Log In!</a>
            <p id="exists"></p>
        </form>
    </div>

</body>
</html>