<?php
include('db.php');
$response = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $game_name = $_POST['game_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO pre_register (game_name, user_name, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $game_name, $name, $email);

    if ($stmt->execute()) {
        $response = "✅ Pre-registration successful!";
    } else {
        $response = "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    
    // 👇 Return result as JSON
    echo json_encode(["message" => $response]);
}
?>
