<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin.php");
    exit();
}

require_once "db.php"; // Make sure this file exists and has correct DB credentials

// Fetch total users from login_user table
$user_result = mysqli_query($conn, "SELECT COUNT(*) AS total_users FROM login_user");
$user_data = mysqli_fetch_assoc($user_result);
$total_users = $user_data['total_users'] ?? 0;

// Fetch total enquiries from contact table
$enquiry_result = mysqli_query($conn, "SELECT COUNT(*) AS total_enquiries FROM contact");
$enquiry_data = mysqli_fetch_assoc($enquiry_result);
$total_enquiries = $enquiry_data['total_enquiries'] ?? 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Drift Arena | Admin Control Room</title>
  <link rel="icon" href="img/logo.PNG" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
  <!-- ✅ Favicon Line Added -->
  <link rel="icon" type="image/png" href="image/rl.png" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      width: 100%;
      height: 100%;
      font-family: 'Orbitron', sans-serif;
      background: radial-gradient(circle, #0d0d0d 0%, #000 100%);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .status-bar {
      position: absolute;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      background: linear-gradient(90deg, #00ffd1, #ff00cc);
      padding: 10px 20px;
      border-radius: 30px;
      display: flex;
      gap: 20px;
      justify-content: center;
      align-items: center;
      font-size: 0.95rem;
      font-weight: 600;
      color: black;
      box-shadow: 0 0 18px #00ffd1;
      z-index: 999;
      flex-wrap: wrap;
      max-width: 90%;
      text-align: center;
    }

    @media (max-width: 500px) {
      .status-bar {
        flex-direction: column;
        padding: 12px 16px;
        gap: 8px;
        font-size: 0.85rem;
      }
    }

    .dashboard-container {
      background: rgba(0, 0, 0, 0.75);
      padding: 60px 40px;
      border-radius: 30px;
      border: 3px solid transparent;
      background-clip: padding-box;
      box-shadow: 0 0 40px #00ffd1, inset 0 0 60px #ff00cc50;
      max-width: 750px;
      width: 90%;
      text-align: center;
      animation: fadeIn 0.8s ease;
      position: relative;
      z-index: 1;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.96);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .glitch-text {
      font-size: 2.5rem;
      color: #00ffd1;
      position: relative;
      display: inline-block;
      text-shadow: 0 0 6px #00ffd1, 0 0 16px #ff00cc;
      margin-bottom: 35px;
    }

    .admin-btn {
      display: inline-block;
      margin: 16px 12px;
      padding: 14px 28px;
      font-size: 1.05rem;
      font-weight: bold;
      color: black;
      background: linear-gradient(45deg, #00ffd1, #ff00cc);
      border: none;
      border-radius: 14px;
      box-shadow: 0 0 10px #00ffd1;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .admin-btn:hover {
      background: linear-gradient(45deg, #ff00cc, #00ffd1);
      box-shadow: 0 0 25px #ff00cc;
    }

    .logout-btn {
      background: transparent;
      color: #ff0040;
      border: 2px solid #ff0040;
    }

    .logout-btn:hover {
      background: #ff0040;
      color: white;
      box-shadow: 0 0 15px #ff0040;
    }

    @media (max-width: 500px) {
      .glitch-text {
        font-size: 1.6rem;
      }
      .admin-btn {
        display: block;
        width: 100%;
        margin: 10px auto;
      }
    }
  </style>  
</head>
<body>

  <!-- 🧠 Top Status Panel -->
  <div class="status-bar">
    <span>👤 Admin: <?= htmlspecialchars($_SESSION['admin_username']) ?></span>
    <span id="liveTime">🕒 --:-- --</span>
    <span>👥 Users: <?= $total_users ?></span>
    <span>📩 Enquiries: <?= $total_enquiries ?></span>
  </div>

  <!-- 🧩 Admin Panel Box -->
  <div class="dashboard-container">
    <div class="glitch-text">
      👑 Welcome, <?= htmlspecialchars($_SESSION['admin_username']) ?>!
    </div>

    <div>
      <a href="manage_users.php" class="admin-btn">📋 Manage Users</a>
      <a href="manage_enquiries.php" class="admin-btn">📨 View Enquiries</a>
      <a href="admin_logout.php" class="admin-btn logout-btn">🚪 Logout</a>
    </div>
  </div>

  <!-- ⏰ Time Auto Update -->
  <script>
    function updateClock() {
      const now = new Date();
      const timeString = now.toLocaleTimeString('en-IN', {
        hour: '2-digit',
        minute: '2-digit',
        hour12: true
      });
      document.getElementById("liveTime").innerHTML = `🕒 ${timeString}`;
    }

    updateClock();
    setInterval(updateClock, 1000);
  </script>
</body>
</html>
