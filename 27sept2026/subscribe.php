<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Subscription Form</h1>
   <?php
        if($_SERVER ['REQUEST_METHOD']=== 'POST'){
            $Name = $_POST["name"];
        $Email = $_POST ["email"]; 

    
        echo "Name :". $Name;
        echo "<br>";
        echo "Email:" . $Email;
        }
   ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your Name"> <br> <br>
        <input type="text" name ="email" placeholder="Enter your Email" > <br> <br>
        <input type="submit" name="submit" value="Subscribe">
       

    </form>
</body>
</html>