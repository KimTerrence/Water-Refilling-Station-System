<?php 
    include 'getUser_api.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>admin</p>

    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Address</th>
            <th>Status</th>
        </tr>

        <?php while ($row = $result->fetch_assoc())  { //PHP LOOP ?> 

        <tr>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <a href="editUser.php?id=<?php echo $row['id']; ?>">Edit</a>
            </td>
        </tr>

    <?php } ?>

    </table>
</body>
</html> 