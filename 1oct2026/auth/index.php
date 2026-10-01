<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <?php
        if(isset($_POST['submit'])){
            extract($_POST);
            $password = md5($password);
            include_once('dbconfiq.php');
        //    echo "SELECT * FROM users WHERE email='$email' AND password='$password'";
             $result = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
             if($result->num_rows === 1){
                header("Location: dashboard.php");
            
             } else {
                echo "<h3>Invalid email or password.</h3>";
             }
        }
    ?>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter your email"> <br> <br>
        <input type="password" name="password" placeholder="Password"><br> <br>
        <input type="submit" name="submit" value="Login">

    </form>
</body>
</html>