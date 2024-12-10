<?php
  include "db_config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $address = $_POST['address'];
    $status = $_POST['status'];

    $sql = "UPDATE user_info SET firstname = '$fname', lastname = '$lname', address = '$address', status = '$status' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: admin.php"); // Redirect back to the main page
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
