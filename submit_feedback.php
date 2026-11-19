<?php
include('db.php'); // ✅ make sure this connects to your DB

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $game_name = trim($_POST['game_name'] ?? '');
    $feedback = trim($_POST['feedback'] ?? '');
    $user_name = trim($_POST['user_name'] ?? '');

    if ($feedback !== '') {
        $stmt = $conn->prepare("INSERT INTO game_feedback (game_name, feedback, user_name) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $game_name, $feedback, $user_name);

        if ($stmt->execute()) {
            echo "<script>alert('✅ Feedback submitted successfully!'); window.history.back();</script>";
        } else {
            echo "<script>alert('❌ DB Error: " . $stmt->error . "'); window.history.back();</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('❌ Feedback cannot be empty.'); window.history.back();</script>";
    }

    $conn->close();
}
?>

