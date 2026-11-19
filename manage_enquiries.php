<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin.php");
    exit();
}

require_once "db.php";

// Handle delete/restore actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'], $_POST['id'])) {
    $id = (int)$_POST['id'];
    $action = $_POST['action'] === 'delete' ? 1 : 0;
    $stmt = $conn->prepare("UPDATE contact SET is_deleted = ? WHERE id = ?");
    $stmt->bind_param("ii", $action, $id);
    $stmt->execute();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch all enquiries
$result = mysqli_query($conn, "SELECT * FROM contact ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Enquiries - Drift Arena</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle, #111, #000);
      color: #fff;
      font-family: 'Orbitron', sans-serif;
      padding: 40px 20px;
    }
    h1 {
      text-align: center;
      color: #00ffd1;
      margin-bottom: 40px;
      text-shadow: 0 0 10px #ff00cc;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: rgba(255, 255, 255, 0.05);
      box-shadow: 0 0 15px #00ffd1;
    }
    th, td {
      padding: 12px 15px;
      border: 1px solid #00ffd1;
      text-align: left;
    }
    th {
      background-color: #00ffd1;
      color: #000;
      text-transform: uppercase;
    }
    tr:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .action-btn {
      padding: 5px 12px;
      border-radius: 6px;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }
    .delete-btn {
      background: #ff0040;
      color: white;
    }
    .restore-btn {
      background: #00ffd1;
      color: black;
    }
    .back-btn {
      display: inline-block;
      margin-top: 30px;
      padding: 12px 25px;
      background: linear-gradient(45deg, #00ffd1, #ff00cc);
      color: #000;
      font-weight: bold;
      border-radius: 10px;
      text-decoration: none;
      box-shadow: 0 0 10px #00ffd1;
    }
    .back-btn:hover {
      background: linear-gradient(45deg, #ff00cc, #00ffd1);
      color: #fff;
    }
    .container {
      max-width: 1000px;
      margin: auto;
    }
    .deleted-row {
      opacity: 0.5;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📨 All Enquiries</h1>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (mysqli_num_rows($result) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr class="<?= $row['is_deleted'] ? 'deleted-row' : '' ?>">
              <td><?= $row['id'] ?></td>
              <td><?= htmlspecialchars($row['your_name']) ?></td>
              <td><?= htmlspecialchars($row['your_email']) ?></td>
              <td><?= htmlspecialchars($row['your_message']) ?></td>
              <td>
                <form method="post" style="display:inline;">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <?php if ($row['is_deleted']): ?>
                    <input type="hidden" name="action" value="restore">
                    <button type="submit" class="action-btn restore-btn">Restore</button>
                  <?php else: ?>
                    <input type="hidden" name="action" value="delete">
                    <button type="submit" class="action-btn delete-btn">Delete</button>
                  <?php endif; ?>
                </form>
              </td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr><td colspan="5">No enquiries found.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>

    <div style="text-align:center;">
      <a href="dashboard.php" class="back-btn">⬅️ Back to Dashboard</a>
    </div>
  </div>
</body>
</html>
