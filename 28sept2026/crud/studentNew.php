
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student Entry Form</h2>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            //data received entry form
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $Phone = $_POST['Phone'];
            include_once("dbconfiq.php"); //database connection

           $conn->query("INSERT INTO students(id,name,address,email,phone) VAlUES (NULL,'$name',' $address', '$email', '$Phone' )");
           if($conn->affected_rows){
            echo "success";
           }
        }
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your Name"> <br> <br>
        <input type="text" name="address" placeholder="Enter your Addrrss"> <br> <br>
        <input type="text" name="email" placeholder="Enter your Email"> <br> <br>
        <input type="text" name="Phone" placeholder="Enter your phone "> <br> <br>
        <input type="submit" name="submit" value="Add">
    </form> <br> <br>
    <a href="index.php">back to list</a> 
</body>
</html>