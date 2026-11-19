<?php
include('db.php');
session_start();

// 🛡️ Only for admin
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin.php");
    exit();
}

// 🔄 Handle delete/restore actions
if (isset($_GET['action'], $_GET['id'])) {
    $id = intval($_GET['id']);
    $action = $_GET['action'] === 'delete' ? 1 : 0;
    $stmt = $conn->prepare("UPDATE login_user SET deleted = ? WHERE id = ?");
    $stmt->bind_param("ii", $action, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: manage_users.php");
    exit();
}

// 📦 Fetch users
$sql = "SELECT * FROM login_user ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Manage Users - Drift Arena</title>
  <link rel="icon" href="img/logo.PNG" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: #000;
      color: #00ffd1;
      font-family: 'Orbitron', sans-serif;
      padding: 40px;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
      color: #00ffd1;
      text-shadow: 0 0 10px #00f7ff;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #111;
      box-shadow: 0 0 15px #00ffd1;
    }

    th, td {
      padding: 12px;
      border: 1px solid #00ffd1;
      text-align: center;
      color: #fff;
    }

    th {
      background: #222;
    }

    .btn-act {
      padding: 6px 14px;
      font-size: 0.9rem;
      font-weight: bold;
      border-radius: 8px;
      border: none;
      text-decoration: none;
      color: black;
      background: linear-gradient(45deg, #00ffd1, #ff00cc);
      transition: 0.3s;
    }

    .btn-act:hover {
      transform: scale(1.1);
      box-shadow: 0 0 10px #ff00cc;
    }

    .deleted-row {
      background-color: #331111 !important;
      color: #ff6666 !important;
    }

    .back-btn {
      position: fixed;
      top: 20px;
      left: 30px;
      padding: 10px 20px;
      background: #00ffd1;
      border: none;
      font-weight: bold;
      border-radius: 10px;
      color: #000;
      text-decoration: none;
    }

    .back-btn:hover {
      box-shadow: 0 0 12px #00ffd1;
    }
  </style>
</head>
<body>

<a class="back-btn" href="dashboard.php">← Back</a>

<h1>👥 Drift Arena Users</h1>

<?php if ($result->num_rows > 0): ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Created At</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr class="<?= $row['deleted'] ? 'deleted-row' : '' ?>">
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['your_name']) ?></td>
        <td><?= htmlspecialchars($row['your_email']) ?></td>
        <td><?= $row['created_at'] ?></td>
        <td><?= $row['deleted'] ? '❌ Deleted' : '✅ Active' ?></td>
        <td>
          <?php if (!$row['deleted']): ?>
            <a class="btn-act" href="?action=delete&id=<?= $row['id'] ?>">🗑️ Delete</a>
          <?php else: ?>
            <a class="btn-act" href="?action=restore&id=<?= $row['id'] ?>">♻️ Restore</a>
          <?php endif; ?>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
<?php else: ?>
  <p class="text-center mt-5">🚫 No users found.</p>
<?php endif; ?>

</body>
</html>