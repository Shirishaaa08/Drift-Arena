<?php 
if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
?>
<!-- ✅ Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

<!-- 🔺 Navbar -->
<nav class="navbar navbar-expand-lg fixed-top neon-navbar">
  <div class="container-fluid">

    <!-- 🔰 Logo + Glowing Title -->
    <div class="logo-title d-flex align-items-center">
      <img src="image/rl.png" alt="DriftArena Logo" style="height: 60px; border-radius: 10px;" class="me-2">
      <a class="navbar-brand gradient-text" href="#">DriftArena</a>
    </div>

    <!-- ☰ Toggle for Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- 🌐 Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="tryanddownload.php">Try & Download</a></li>
        <li class="nav-item"><a class="nav-link" href="trending.php">Trending Free</a></li>
        <li class="nav-item"><a class="nav-link" href="upcoming.php">Upcoming</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <!-- 🔴 Enhanced Logout Button -->
<li class="nav-item">
  <a class="btn btn-outline-danger fw-bold logout-btn px-3 py-1" href="?logout=true">
     Logout
  </a>
</li>

      </ul>

      <!-- 🔍 Search Bar -->
      <form class="d-flex ms-3" role="search">
        <input class="form-control search-glow" type="search" placeholder="Search games..." />
      </form>
    </div>
  </div>
</nav>

<!-- 🎨 Styles -->
<style>
    .logout-btn {
  border: 2px solid #ff4d4d;
  color: #ff4d4d;
  background-color: transparent;
  box-shadow: 0 0 10px rgba(255, 77, 77, 0.4);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
}

.logout-btn:hover {
  background-color: #ff4d4d;
  color: #fff;
  box-shadow: 0 0 20px rgba(255, 77, 77, 0.8), 0 0 30px #ff4d4d;
  transform: scale(1.05);
}
  .neon-navbar {
    background: linear-gradient(90deg, #050d1f, #0a1930, #1c1c3c);
    border-bottom: 2px solid #00ffd1;
    box-shadow: 0 0 12px #00ffd1aa;
    padding: 12px 25px;
    font-family: 'Audiowide', sans-serif;
    z-index: 1000;
  }

  .navbar-brand.gradient-text {
    font-size: 2rem;
    font-weight: bold;
    background: linear-gradient(to right, #00ffff, #00ccff, #00ffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 0 10px #00fff2, 0 0 20px #00ccff;
  }

  .navbar-nav .nav-link {
    color: #00ffee !important;
    font-size: 1rem;
    padding: 8px 16px;
    text-shadow: 0 0 5px #00ffee66;
    transition: all 0.3s ease;
  }

  .navbar-nav .nav-link:hover {
    color: #00ffd1 !important;
    text-shadow: 0 0 12px #00ffd1, 0 0 16px #00faff;
    transform: scale(1.05);
  }

  .navbar-toggler {
    background-color: #00ffd1;
    border-radius: 6px;
  }

  .navbar-toggler-icon {
    filter: invert(100%);
  }

  .search-glow {
    background-color: #0a0a0a;
    border: 1px solid #00ffd1;
    color: #00ffd1;
    box-shadow: 0 0 8px #00ffd1;
    border-radius: 8px;
  }

  .search-glow::placeholder {
    color: #88ffff;
    font-style: italic;
  }
</style>
