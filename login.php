<?php
include('db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $pin   = $conn->real_escape_string($_POST['pin']);

    // ✅ Corrected: All 3 values provided
    $sql = "INSERT INTO login_user (your_name, your_email, pin) VALUES ('$name', '$email', '$pin')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;
        $_SESSION['pin'] = $pin;

        echo "success";
    } else {
        echo "error: " . $conn->error;
    }

    $conn->close();

    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
}
?>