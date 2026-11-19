<?php
// download.php

include('db.php'); // Make sure this sets up $conn correctly

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $game_name   = trim($_POST['game_name'] ?? '');
    $player_name = trim($_POST['player_name'] ?? '');
    $platform    = trim($_POST['platform'] ?? '');
    $email       = trim($_POST['email'] ?? '');

    if ($game_name && $player_name && $platform && $email) {
        $stmt = $conn->prepare("INSERT INTO downloads (game_name, player_name, platform, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $game_name, $player_name, $platform, $email);

        if ($stmt->execute()) {
            echo "<script>
                    alert('🎮 Download started successfully!');
                    window.history.back();
                  </script>";
        } else {
            echo "<script>
                    alert('❌ Something went wrong. Try again.');
                    window.history.back();
                  </script>";
        }

        $stmt->close();
    } else {
        echo "<script>
                alert('⚠️ All fields are required!');
                window.history.back();
              </script>";
    }

    $conn->close();
} else {
    echo "<script>
            alert('Invalid request method.');
            window.history.back();
          </script>";
}
?>
