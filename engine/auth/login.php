<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h2 class="judul-form">Login</h2>
    <form action="auth.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required class="input-form"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required class="input-form"><br><br>

        <input type="submit" value="Login" class="submit-button">
    </form>
</body>
<script src="../../js/d3.v6.min.js"></script>
<script src="../../js/all.js"></script>
<script src="../../js/scripts.js"></script>
</html>

