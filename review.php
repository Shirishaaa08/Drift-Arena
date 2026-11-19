<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $game = trim($_POST["game"]);
    $review = trim($_POST["review"]);
    $name = trim($_POST["name"]);

    if (!empty($game) && !empty($review) && !empty($name)) {
        $stmt = $conn->prepare("INSERT INTO game_reviews (game, review, name) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $game, $review, $name);

        if ($stmt->execute()) {
            $redirect = $_SERVER['HTTP_REFERER']; // Goes back to where user came from
            echo "<script>
                alert('✅ Review submitted successfully!');
                window.location.href = '$redirect';
            </script>";
        } else {
            echo "<script>
                alert('❌ Something went wrong while saving your review.');
                window.history.back();
            </script>";
        }

        $stmt->close();
    } else {
        echo "<script>
            alert('⚠️ Please fill in all fields.');
            window.history.back();
        </script>";
    }

    $conn->close();
}
?>
