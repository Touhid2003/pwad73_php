<?php
    include_once("dbconfiq.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Student List</h1>
            <a class="top-link" href="studentNew.php">New Entry</a>
            <?php
                $rawData = $conn->query("SELECT * FROM students");
            ?>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $rawData->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td class="action-links">
                                    <a class="edit-btn" href="studentNew_edit.php?id=<?php echo $row['id']; ?>" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a class="delete-btn" onclick="return confirm('Are you sure to delete')" href="studentNew_delete.php?id=<?php echo $row['id']; ?>" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>