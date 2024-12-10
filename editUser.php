<?php
  include "db_config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user_info WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>
<form method="post" action="updateUser.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
    <label for="firstname">Name:</label>
    <input type="text" id="frstname" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="<?php echo $row['firstname']; ?>">
    <br>
    <label for="lastname">Lastname:</label>
   <input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="<?php echo $row['lastname']; ?>">
    <br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" placeholder="<?php echo $row['address']; ?>">
   <br> 
    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
        <option value="admin">Admin</option>
        <option value="verified">Verify</option>
        <option value="declined">Decline</option>
    </select>
    <input type="submit" value="Update">
</form>
