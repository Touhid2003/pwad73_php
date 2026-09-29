
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
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
                    echo "<div class='success-message'>Student added successfully</div>";
                   }
                }
            ?>
            <div class="form-wrap">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Enter your Name">
                    <input type="text" name="address" placeholder="Enter your Address">
                    <input type="text" name="email" placeholder="Enter your Email">
                    <input type="text" name="Phone" placeholder="Enter your phone ">
                    <input type="submit" class="btn" name="submit" value="Add">
                </form>
            </div>
            <a class="back-link" href="index.php">Back to list</a>
        </div>
    </div>
</body>
</html>