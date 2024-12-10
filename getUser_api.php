<?php 
    include "db_config.php";

    $sql = "SELECT * FROM user_info"; //mysql query to display all user

    $result = $conn->query($sql);


?>