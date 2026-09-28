<?php
    include_once("dbconfiq.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Student list</h1>
     <a href="studentNew.php">New Entry</a> <br> <br>
    <?php
        $rawData = $conn->query("SELECT * FROM students");
        ?>
        
        
            
       <table border="1" cellpadding="10" cellspacing="0">
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>email</th>
        <th>Phone</th>
        <th>Action</th>
       <?php
           
      
       while($row = $rawData->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><a href="#">Edit</a> | 
                    <a onclick="return confirm('Are you sure to delete')" class="dangerJ" href="studentNew_delete.php?id=<?php
                       echo $row['id'];
                    ?>">Delete</a>
                </td>
            </tr>
            
            
            <?php
                
            
        }
       
        
    ?>
     
   </table>
</body>
</html>