<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Location</title>
</head>
<body>
    <h1>Welcome, User</h1>
    <button id="share-location">Share My Location</button>
    <script>
        document.getElementById('share-location').addEventListener('click', () => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(position => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    fetch('map_api.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ latitude, longitude })
                    }).then(response => response.text()).then(data => {
                        alert(data);
                    }).catch(error => {
                        console.error('Error:', error);
                    });
                });
            } else {
                alert('Geolocation is not supported by your browser.');
            }
        });
    </script>
</body>
</html>
