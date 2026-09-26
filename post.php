<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Post</title>
</head>
<body>
    <h2>Request Form</h2>
    <form method="POST" action="">
        <label for="">Name</label><br>
        <input type="text" name="username" require><br><br>
        <label for="">Password</label><br>
        <input type="password" name="password" require><br><br>
        <button type="submit" name="btn_submit">Send</button>
    </form>
    <hr>

    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        echo "<h3>Received</h3>";
        echo "User's name: <strong>". $username. "</strong><br>";
        echo "Password : <strong>" . $password . "</strong><br>";
    }
    ?>
</body>
</html>