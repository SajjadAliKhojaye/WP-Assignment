<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    session_start();
    // Check if username and password are correct
        if ($_POST["username"]== "sajjad" && $_POST["password"]== "18k-0355") { 
    // If correct, we set the session to YES
        $_SESSION["Login"]= "YES";
        echo "<h1>You are now logged correctly in</h1>";
        echo "<p><a href='document.php'>Link to protected file</a><p/>";
    } else {
    // If not correct, we set the session to NO
        $_SESSION["Login"]= "NO";
        echo "<h1>You are NOT logged correctly in </h1>"; 
        echo "<p><a href='document.php'>Link to protected file</a></p>";
    }
 ?>
</body>
</html>