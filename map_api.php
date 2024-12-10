<?php
session_start();
require 'db_config.php';

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['latitude'], $data['longitude'])) {
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
    $userId = $_SESSION['username']; // Replace with the logged-in user's ID

    $stmt = $pdo->prepare('INSERT INTO locations (user_id, latitude, longitude) VALUES (?, ?, ?)');
    $stmt->execute([$userId, $latitude, $longitude]);

    echo 'Location shared successfully!';
} else {
    echo 'Invalid request.';
}
?>
