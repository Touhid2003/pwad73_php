<?php
     include_once("dbconfiq.php"); //database connection
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Student Update Form</h2>
            <?php
            // Display student data 
                 $id = $_GET['id'];
                
               

                
                //update student data
                if($_SERVER['REQUEST_METHOD']==='POST'){
                    //data received entry form
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $Phone = $_POST['Phone'];
                   
    //update into database
                   $conn->query("UPDATE students SET 
                   name='$name', address='$address', email='$email', phone='$Phone' 
                   WHERE id=$id");
                   if($conn->affected_rows){
                    echo "<div class='success-message'>Updated successfully</div>";
                   }
                
                   
                }
                   $data= $conn->query("SELECT * FROM students WHERE id = $id");
                $row = $data->fetch_object();
            ?>
            <div class="form-wrap">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Enter your Name" value="<?php
                         echo $row->name;?>">
                    <input type="text" name="address" placeholder="Enter your Address" value="<?php
                         echo $row->address;?>">
                    <input type="text" name="email" placeholder="Enter your Email" value="<?php
                         echo $row->email;?>">
                    <input type="text" name="Phone" placeholder="Enter your phone " value="<?php
                         echo $row->phone;?>">
                    <input type="submit" class="btn" name="submit" value="Update">
                </form>
            </div>
            <a class="back-link" href="index.php">Back to list</a>
        </div>
    </div>
</body>
</html>