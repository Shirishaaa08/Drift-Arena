<?php
include('db.php');
session_start();

$error = "";

// ✅ Insert default admin user if not exists
$defaultUsername = 'drift';
$defaultPassword = '0808';
$defaultHash = hash('sha256', $defaultPassword);

$checkSql = "SELECT * FROM admin_users WHERE LOWER(username) = LOWER(?)";
$checkStmt = $conn->prepare($checkSql);
$checkStmt->bind_param("s", $defaultUsername);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();

if ($checkResult->num_rows === 0) {
    $insertSql = "INSERT INTO admin_users (username, password_hash) VALUES (?, ?)";
    $insertStmt = $conn->prepare($insertSql);
    $insertStmt->bind_param("ss", $defaultUsername, $defaultHash);
    $insertStmt->execute();
    $insertStmt->close();
}
$checkStmt->close();

// 🔐 Login logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_users WHERE LOWER(username) = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (hash('sha256', $password) === $row['password_hash']) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $row['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "❌ Incorrect password.";
        }
    } else {
        $error = "⚠️ User not found.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!-- 🚗 Drift Arena Admin Login Page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Drift Admin Login</title>
  <link rel="icon" type="image/png" href="img/logo.PNG" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- ✅ Favicon Line Added -->
  <link rel="icon" type="image/png" href="image/rl.png" />

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Orbitron', sans-serif;
      background: radial-gradient(circle at center, #111 0%, #000 100%);
      color: #fff;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    body::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, #00f7ff22 25%, transparent 25%),
                  linear-gradient(-45deg, #ff00cc22 25%, transparent 25%);
      background-size: 40px 40px;
      z-index: 0;
      animation: moveGrid 8s linear infinite;
    }
    @keyframes moveGrid {
      0% { background-position: 0 0, 0 0; }
      100% { background-position: 80px 80px, -80px -80px; }
    }
    .login-box {
      position: relative;
      z-index: 1;
      background: rgba(0, 0, 0, 0.85);
      border: 2px solid #00f7ff;
      border-radius: 20px;
      padding: 40px 30px;
      box-shadow: 0 0 20px #00f7ff, 0 0 50px #ff00cc;
      width: 360px;
      animation: glitchIn 0.8s ease;
    }
    @keyframes glitchIn {
      0% { opacity: 0; transform: scale(0.9) rotateX(30deg); }
      100% { opacity: 1; transform: scale(1) rotateX(0); }
    }
    .login-box h2 {
      font-size: 2rem;
      margin-bottom: 25px;
      color: #00f7ff;
      text-shadow: 0 0 5px #00f7ff, 0 0 12px #ff00cc;
      animation: flicker 2s infinite alternate;
    }
    @keyframes flicker {
      0% { opacity: 1; }
      50% { opacity: 0.85; text-shadow: 0 0 4px #00f7ff, 0 0 10px #ff00cc; }
      100% { opacity: 1; text-shadow: 0 0 8px #00f7ff, 0 0 20px #ff00cc; }
    }
    input {
      width: 100%;
      padding: 12px;
      margin-top: 14px;
      border: none;
      border-radius: 8px;
      background: #111;
      color: #00fff0;
      border: 1px solid #00f7ff;
      font-size: 1rem;
      transition: all 0.3s ease;
    }
    input:focus {
      background: #000;
      box-shadow: 0 0 12px #00f7ff;
    }
    button {
      margin-top: 25px;
      width: 100%;
      padding: 12px;
      background: linear-gradient(45deg, #00f7ff, #ff00cc);
      color: black;
      font-weight: bold;
      border: none;
      border-radius: 12px;
      font-size: 1rem;
      transition: 0.3s ease;
    }
    button:hover {
      box-shadow: 0 0 18px #ff00cc;
      transform: scale(1.05);
    }
    .btn-outline-info {
      border-color: #00f7ff;
      color: #00f7ff;
    }
    .btn-outline-info:hover {
      background-color: #00f7ff;
      color: #000;
      box-shadow: 0 0 12px #00f7ff;
    }
    .btn-outline-warning {
      color: #ffcc00;
      border-color: #ffcc00;
    }
    .btn-outline-warning:hover {
      background-color: #ffcc00;
      color: #000;
    }
    .error {
      color: #ffcc00;
      font-size: 0.88rem;
      margin-top: 14px;
    }
    @media (max-width: 400px) {
      .login-box {
        width: 90%;
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>👑 Drift Arena Admin</h2>

    <?php if (isset($_GET['new'])): ?>
      <div class="alert alert-success text-center">✅ New admin registered! Please log in.</div>
    <?php endif; ?>

    <form method="POST" autocomplete="off">
      <input
        type="text"
        name="username"
        placeholder="🚦 Admin Username"
        value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>"
        required
        autofocus
      />
      <input
        type="password"
        name="password"
        placeholder="🔐 Access Key"
        required
        autocomplete="new-password"
      />

      <button type="submit">⚡ Enter Control Room</button>

      <a href="index.php" class="btn btn-outline-info w-100 mt-3 fw-bold rounded-3">
        🔙 Back to User Login
      </a>

      <a href="register_admin.php" class="btn btn-outline-warning w-100 mt-2 fw-bold rounded-3">
  🔐 New Admin Registration
</a>


      <?php if (!empty($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>
    </form>
  </div>

  <script>
    document.querySelector("input[name='password']").addEventListener("keypress", function(e) {
      if (e.key === "Enter") {
        this.form.submit();
      }
    });
  </script>
</body>
</html>
