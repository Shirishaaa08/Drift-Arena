<?php
include('db.php');
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = strtolower(trim($_POST['username']));
    $newPassword = $_POST['password'];

    // Check if username already exists
    $checkSql = "SELECT * FROM admin_users WHERE LOWER(username) = ?";
    $stmt = $conn->prepare($checkSql);
    $stmt->bind_param("s", $newUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $error = "⚠️ Username already exists!";
    } else {
        $hashedPassword = hash('sha256', $newPassword);
        $insertSql = "INSERT INTO admin_users (username, password_hash) VALUES (?, ?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("ss", $newUsername, $hashedPassword);
        if ($insertStmt->execute()) {
            header("Location: admin.php?new=1");
            exit();
        } else {
            $error = "❌ Error during registration!";
        }
        $insertStmt->close();
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Register Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: #000;
      color: #fff;
      font-family: 'Orbitron', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .register-box {
      background: rgba(0,0,0,0.85);
      border: 2px solid #00ffcc;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 20px #00ffcc;
      width: 360px;
    }
  </style>
</head>
<body>
  <div class="register-box">
    <h2 class="text-center text-info">🔐 New Admin Registration</h2>
    <?php if (!empty($error)): ?>
      <div class="alert alert-warning"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST">
      <input type="text" name="username" placeholder="👤 Username" class="form-control mt-3" required />
      <input type="password" name="password" placeholder="🔐 Password" class="form-control mt-3" required />
      <button type="submit" class="btn btn-info w-100 mt-3">✅ Register</button>
      <a href="admin.php" class="btn btn-outline-light w-100 mt-2">🔙 Back to Admin Login</a>
    </form>
  </div>
</body>
</html>
