<?php
session_start();

include 'db_config.php';

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header( "Location: login.php");
    exit;
}
    $user = $_SESSION['username'];
    

    $sql = "SELECT * FROM user_info WHERE username='$user'";        
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No user found";
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRSMS</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css  "/>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WRSMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
            </ul>
            <span class="navbar-text">
               <a href="./logout.php" class="btn btn-danger text-white">Logout</a>
            </span>
            </div>  
        </div>
    </nav>

    <section class="p-2 bg-dark-subtle vh-100">
        <div class="bg-white shadow h-100 rounded shadow p-5">
            <p class="w-100 text-center fs-1"> Welcome, <?php echo htmlspecialchars($row['firstname'] . " ". $row['lastname']); ?> !</p>
            <div>
            <form action="">
                <label for="">Jug Type</label>
                <select name="" id="">
                    <option value="">Small</option>
                    <option value="">Big</option>
                    <option value="">Rounded</option>
                </select>

            </form>
        </div>
        </div>
    </section>
</body>
</html>
 