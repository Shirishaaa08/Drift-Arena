<?php include('header.php') ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DriftArena</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Poppins&display=swap" rel="stylesheet" /> 
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- ✅ Favicon Line Added -->
  <link rel="icon" type="image/png" href="image/rl.png" />





  <style>
    body {
      background-color: #0a0a0a;
      color: white;
      font-family: 'Poppins', sans-serif;
    }
  
#categoryDownloadModal .btn:hover {
  box-shadow: 0 0 20px #00c6ff, 0 0 30px #0072ff;
}
@keyframes scrollLeft {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}
.service-box:hover {
  transform: translateY(-8px);
  box-shadow: 0 0 25px rgba(0, 255, 209, 0.3), 0 0 40px rgba(0, 255, 209, 0.2);
  border-color: #00ffd1 !important;
}



  </style>

  <style>
.neon-heading {
  text-shadow: 0 0 10px #00ffd1, 0 0 30px #00ffd1;
}
.underline-glow {
  width: 120px;
  height: 4px;
  background: #00ffd1;
  border-radius: 2px;
  box-shadow: 0 0 10px #00ffd1, 0 0 20px #00ffd1;
}
.neon-box {
  backdrop-filter: blur(10px);
  background-color: rgba(0, 0, 0, 0.4);
}
.glow-icon {
  font-size: 1.5rem;
  color: #00ffd1;
  text-shadow: 0 0 8px #00ffd1;
}

/* Apply only to buttons inside the Home section */
#home-section .btn {
  font-size: 1.2rem;
  padding: 12px 25px;
  border-radius: 10px;
  box-shadow: 0 0 15px #00ffd1;
  transition: 0.3s ease;
}

#home-section .btn:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px #00ffd1, 0 0 40px #00ffd1;
}

</style>

<style>
.card:hover {
  box-shadow: 0 0 30px #00ffd1a9;
  transform: scale(1.01);
  transition: 0.3s ease-in-out;
}

</style>

<!-- ratings --> 
 <style>
  .btn-outline-warning:hover,
.btn-outline-info:hover,
.btn-outline-success:hover {
  background-color: currentColor;
  color: #000;
  border-color: currentColor;
}


.neon-text {
  color: #0ff;
  text-shadow: 0 0 5px #0ff, 0 0 10px #0ff, 0 0 20px #0ff;
}


.video-bg-wrapper {
  position: relative;
  overflow: hidden;
}

.bg-video {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  min-height: 100%;
  object-fit: cover;
  z-index: 1;
  opacity: 1; /* FULL BRIGHTNESS */
  filter: brightness(1.3) contrast(1.2) saturate(1.3); /* ✅ ADD THIS */
}

.video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
  background-color: rgba(0, 0, 0, 0.08); /* very mild dark layer */
}

.content-overlay {
  position: relative;
  z-index: 3;
}

.heading-glow {
  font-size: 3.2rem;
  font-family: 'Orbitron', sans-serif;
  letter-spacing: 1px;
  color: #ffffff;
  text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #00f;
  animation: glow-pulse 2s infinite ease-in-out;
}

@keyframes glow-pulse {
  0% {
    text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #00f;
  }
  50% {
    text-shadow: 0 0 20px #0ff, 0 0 30px #00f, 0 0 40px #00f;
  }
  100% {
    text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #00f;
  }
}







</style>

<style>
  #rolePlayingGames .card {
    transition: transform 0.3s ease;
  }

  #rolePlayingGames .card:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 0 12px rgba(255, 193, 7, 0.6);
  }

  #rolePlayingGames h5 {
    font-family: 'Oxanium', sans-serif;
    letter-spacing: 1px;
  }
  .feedback-box textarea::placeholder,
.feedback-box input::placeholder {
  color: #ccc;
  font-style: italic;
}
.feedback-box textarea:focus,
.feedback-box input:focus {
  background-color: rgba(255, 255, 255, 0.05);
  color: #fff;
  border-color: #ffc107;
  box-shadow: none;
}

</style>
<style>
.leaderboard-box .list-group-item {
  border: none;
  border-radius: 0;
  transition: 0.3s ease;
}
.leaderboard-box .list-group-item:hover {
  background-color: #111;
  box-shadow: 0 0 10px #0ff;
}
</style>

</head>
<body>
   








<!-- 🔥 Browse by Category (Large Cards Version) -->
<section id="trending" class="video-bg-wrapper text-white py-5 mt-5" style="position: relative; overflow: hidden;">

  <!-- 🎥 Background Video -->
  <video autoplay muted loop class="bg-video position-absolute w-100 h-100" style="object-fit: cover; top: 0; left: 0; z-index: 0;">
    <source src="image/cate.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>

  <!-- 🔲 Overlay -->
  <div class="video-overlay position-absolute w-100 h-100" style="background: rgba(0, 0, 0, 0.7); top: 0; left: 0; z-index: 1;"></div>

  <!-- 🌟 Visible Content -->
  <div class="container position-relative" style="z-index: 2;">
    <h2 class="text-center text-white mb-5 fw-bold glowing-title">🎮 Browse by Category</h2>



<div class="row g-4 justify-content-center" id="categoryGrid">
  <!-- 🧱 ROLE-PLAYING -->
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
  <div id="roleCard" class="card category-card" style="height: 300px; cursor: pointer;">
    <img src="img1/role.jpg" class="card-img" alt="Role-Playing" />
    <div class="overlay-gradient"></div>
    <div class="card-img-overlay">
      <h4>🎮 ROLE-PLAYING</h4>
    </div>
  </div>
</div>


  <!-- 🧱 SIMULATION -->
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
  <div id="simCard" class="card category-card" style="height: 300px; cursor: pointer;">
    <img src="img1/sim.jpg" class="card-img" alt="Simulation" />
    <div class="overlay-gradient"></div>
    <div class="card-img-overlay">
      <h4>🎮 SIMULATION</h4>
    </div>
  </div>
</div>

  <!-- 🧱 HORROR -->
  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
  <div id="horrorCard" class="card category-card" style="height: 300px; cursor: pointer;">
    <img src="img1/horrot.jpg" class="card-img" alt="HORROR" />
    <div class="overlay-gradient"></div>
    <div class="card-img-overlay">
      <h4>🎮 HORROR</h4>
    </div>
  </div>
</div>

  <!-- 🧱 RACING -->
 <div class="col-12 col-sm-6 col-md-4 col-lg-3">
  <div id="racingCard" class="card category-card" style="height: 300px; cursor: pointer;">
    <img src="img1/racing.webp" class="card-img" alt="Racing" />
    <div class="overlay-gradient"></div>
    <div class="card-img-overlay">
      <h4>🎮 RACING</h4>
    </div>
  </div>
</div>

</div>

<!-- 🎮 ROLE-PLAYING GAMES -->
<div id="rolePlayingGames" class="container d-none genreGameSection">
 <div class="text-center mb-5">
    <button class="btn btn-outline-warning fw-bold rounded-pill px-5 py-2 shadow-lg hover-glow" onclick="goBack()" style="font-size: 1.2rem;">
      ⬅ Back to Categories
    </button>
  </div>
  <!-- Section Heading -->
  <h2 class="text-center text-warning fw-bold mb-4 display-5 glowing-title">⚔️ Role-Playing Games</h2>

  <!-- Game Cards Grid: 2 in a row -->
  <div class="row g-4 justify-content-center">
    
<!-- Game 1 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-warning border-3 rounded-4 game-card h-100">
    <h5 class="text-center fw-bold mb-2">Elvenrage</h5>
    <img src="img1/r3.avif" class="img-fluid rounded mb-3 border border-warning" alt="Elvenrage Thumbnail">
    <button class="btn btn-warning w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#roleGame1">🎮 Try Now</button>

<!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Elvenrage">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>



  </div>
</div>



    <!-- Game 2 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-warning border-3 rounded-4 game-card h-100">
    <h5 class="text-center fw-bold mb-2">Samurai Legacy</h5>
    <img src="img1/R2.avif" class="img-fluid rounded mb-3 border border-warning" alt="Samurai Legacy Thumbnail">
    <button class="btn btn-warning w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#roleGame2">🎮 Try Now</button>

<!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Samurai Legacy">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>

  </div>
</div>


    <!-- Game 3 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-warning border-3 rounded-4 game-card h-100">
    <h5 class="text-center fw-bold mb-2">The Quest</h5>
    <img src="img1/r4.avif" class="img-fluid rounded mb-3 border border-warning" alt="The Quest Thumbnail">
    <button class="btn btn-warning w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#roleGame3">🎮 Try Now</button>

    <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="The Quest">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 4 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-warning border-3 rounded-4 game-card h-100">
    <h5 class="text-center fw-bold mb-2">Blocky Parkour: Only Up</h5>
    <img src="img1/r1.avif" class="img-fluid rounded mb-3 border border-warning" alt="Blocky Parkour Thumbnail">
    <button class="btn btn-warning w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#roleGame4">🎮 Try Now</button>

    <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Blocky Parkour">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

</div>
</div>

<!-- 🎮 SIMULATION GAMES -->
<div id="simulationGames" class="container d-none genreGameSection">
  <!-- Back Button -->
  <div class="text-center mb-5">
    <button class="btn btn-outline-warning fw-bold rounded-pill px-5 py-2 shadow-lg hover-glow" onclick="goBack()" style="font-size: 1.2rem;">
      ⬅ Back to Categories
    </button>
  </div>

  <!-- Section Heading -->
  <h2 class="text-center text-warning fw-bold mb-4 display-5 glowing-title">🛠️ Simulation Games</h2>

  <!-- Game Cards Grid: 2 in a row -->
  <div class="row g-4 justify-content-center">
    
    <!-- Game 1 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-success border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Ultimate Truck Driving Simulator</h5>
    <img src="img1/sim1.avif" class="img-fluid rounded mb-3 border border-success" alt="Game Thumbnail">
    <button class="btn btn-success w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#simGame1">🎮 Try Now</button>

    <!-- ⭐ Feedback Form -->
   <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Ultimate Truck Driving Simulator">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-success mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 2 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-success border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Truck Driving Simulator Game</h5>
    <img src="img1/sim2.avif" class="img-fluid rounded mb-3 border border-success" alt="Game Thumbnail">
    <button class="btn btn-success w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#simGame2">🎮 Try Now</button>

   <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Truck Driving Simulator Game">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-success mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 3 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-success border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Bus Driving Simulator</h5>
    <img src="img1/sim3.avif" class="img-fluid rounded mb-3 border border-success" alt="Game Thumbnail">
    <button class="btn btn-success w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#simGame3">🎮 Try Now</button>

   <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Bus Driving Simulator">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-success mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 4 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-success border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Monster Cars: Ultimate Simulator</h5>
    <img src="img1/sim4.avif" class="img-fluid rounded mb-3 border border-success" alt="Game Thumbnail">
    <button class="btn btn-success w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#simGame4">🎮 Try Now</button>

  <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Monster Cars: Ultimate Simulator">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-success mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

  </div>
</div>


<div id="horrorGames" class="container d-none genreGameSection">
  <!-- Back Button -->
  <div class="text-center mb-5">
    <button class="btn btn-outline-warning fw-bold rounded-pill px-5 py-2 shadow-lg hover-glow" onclick="goBack()" style="font-size: 1.2rem;">
      ⬅ Back to Categories
    </button>
  </div>

  <!-- Section Heading -->
  <h2 class="text-center text-danger fw-bold mb-4 display-5 glowing-title">👻 Horror Games</h2>

  <div class="row g-4 justify-content-center">
    <!-- Game 1 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-danger border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Horror Tale</h5>
    <img src="img1/H1.avif" class="img-fluid rounded mb-3 border border-danger" alt="Game Thumbnail">
    <button class="btn btn-danger w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#horrorGame1">🎮 Try Now</button>

    <!-- ⭐ Feedback Form -->
    <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Horror Tale">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 2 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-danger border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Siren Head: Playing in the Forest</h5>
    <img src="img1/H2.avif" class="img-fluid rounded mb-3 border border-danger" alt="Game Thumbnail">
    <button class="btn btn-danger w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#horrorGame2">🎮 Try Now</button>

    <!-- ⭐ Feedback Form -->
    <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Siren Head: Playing in the Forest">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 3 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-danger border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Backwoods</h5>
    <img src="img1/H3.avif" class="img-fluid rounded mb-3 border border-danger" alt="Game Thumbnail">
    <button class="btn btn-danger w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#horrorGame3">🎮 Try Now</button>

   <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Backwoods">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 4 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-danger border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Haunted School</h5>
    <img src="img1/H4.avif" class="img-fluid rounded mb-3 border border-danger" alt="Game Thumbnail">
    <button class="btn btn-danger w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#horrorGame4">🎮 Try Now</button>

    <!-- ⭐ Feedback Form -->
  <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Haunted School">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

  </div>
</div>

<div id="racingGames" class="container d-none genreGameSection">
  <!-- Back Button -->
  <div class="text-center mb-5">
    <button class="btn btn-outline-warning fw-bold rounded-pill px-5 py-2 shadow-lg hover-glow" onclick="goBack()" style="font-size: 1.2rem;">
      ⬅ Back to Categories
    </button>
  </div>

  <!-- Section Heading -->
  <h2 class="text-center text-primary fw-bold mb-4 display-5 glowing-title">🏎️ Racing Games</h2>

  <div class="row g-4 justify-content-center">
   <!-- Game 1 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-primary border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Super Star Car</h5>
    <img src="img1/C1.avif" class="img-fluid rounded mb-3 border border-primary" alt="Game Thumbnail">
    <button class="btn btn-primary w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#raceGame1">🎮 Try Now</button>

    <!-- ⭐ Feedback Form -->
   <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Super Star Car">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 2 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-primary border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Real Cars Extreme Racing</h5>
    <img src="img1/C2.avif" class="img-fluid rounded mb-3 border border-primary" alt="Game Thumbnail">
    <button class="btn btn-primary w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#raceGame2">🎮 Try Now</button>

   <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Real Cars Extreme Racing">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 3 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-primary border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Street Racers Nitro Extreme</h5>
    <img src="img1/C3.avif" class="img-fluid rounded mb-3 border border-primary" alt="Game Thumbnail">
    <button class="btn btn-primary w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#raceGame3">🎮 Try Now</button>

   <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Street Racers Nitro Extreme">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

<!-- Game 4 -->
<div class="col-sm-6 col-md-6">
  <div class="card bg-dark text-white p-3 shadow-lg border border-primary border-3 rounded-4 game-card h-100 text-center">
    <h5 class="fw-bold mb-2">Rally Racer Dirt</h5>
    <img src="img1/C4.avif" class="img-fluid rounded mb-3 border border-primary" alt="Game Thumbnail">
    <button class="btn btn-primary w-100 rounded-pill fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#raceGame4">🎮 Try Now</button>

   <!-- ⭐ Feedback Form -->
<form method="POST" class="feedback-box">
  <input type="hidden" name="game_name" value="Rally Racer Dirt">
  
  <textarea name="feedback" class="form-control bg-transparent text-white border-warning mb-2" rows="2" placeholder="Write feedback..." required></textarea>
  
  <input type="text" name="user_name" class="form-control bg-transparent text-white border-secondary mb-2" placeholder="Your name (optional)">
  
  <button type="submit" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Send Feedback</button>

  <!-- ✅ Feedback Status Message -->
  <div class="mt-2 text-success fw-bold feedback-status" style="display:none;">✅ Feedback submitted!</div>
</form>
  </div>
</div>

  </div>
</div>


<!-- R1 -->
<!-- MODAL WITH BACKGROUND IMAGE AND IFRAME -->
<div class="modal fade" id="roleGame1" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0 position-relative">

        <!-- Game Thumbnail Background -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background-image: url('img1/r1.avif');
                    background-size: cover;
                    background-position: center;
                    filter: blur(2px) brightness(0.7);
                    z-index: 1;">
        </div>

        <!-- Overlay with Game Title -->
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center"
             style="z-index: 2;">
          <h3 class="fw-bold">Loading: Evil Dungeon RPG</h3>
        </div>

        <!-- Game Iframe -->
        <iframe src="https://www.crazygames.com/embed/elvenrage"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                class="position-absolute top-0 start-0"
                style="width: 100%; height: 100vh; z-index: 3; background: transparent;">
        </iframe>

      </div>

    </div>
  </div>
</div>
<!-- R2 -->
<!-- GAME MODAL -->
<div class="modal fade" id="roleGame2" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/samurai-legacy"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<!-- R3 -->
<div class="modal fade" id="roleGame3" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/the-quest-hcv"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<!-- R4 -->
<div class="modal fade" id="roleGame4" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/blocky-parkour-only-up-adventure"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<!-- SIM GAME 1 -->
<div class="modal fade" id="simGame1" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <<iframe src="https://www.crazygames.com/embed/ultimate-truck-driving-simulator-2020"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>
<!-- 🎮 SIMULATION MODALS -->
<div class="modal fade" id="simGame2" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/truck-driving-simulator-game"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="simGame3" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/bus-driving-simulator"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="simGame4" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/monster-cars-ultimate-simulator"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<!-- HORROR GAME 1 -->
<div class="modal fade" id="horrorGame1" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/horror-tale-kidnapper"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<!-- 🎮 HORROR MODALS -->
<div class="modal fade" id="horrorGame2" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/siren-head-playing-in-the-forest"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="horrorGame3" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/backwoods"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="horrorGame4" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/haunted-school---horror-game"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>
<!-- RACING GAME 1 -->
<div class="modal fade" id="raceGame1" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/super-star-car"
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>







<!-- 🎮 RACING MODALS -->
<div class="modal fade" id="raceGame2" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/real-cars-extreme-racing" 
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="raceGame3" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/street-racers-nitro-extreme" 
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="raceGame4" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-dark text-white">

      <div class="modal-body p-0">
        <iframe src="https://www.crazygames.com/embed/rally-racer-dirt" 
                frameborder="0"
                allowfullscreen
                allow="gamepad *; fullscreen"
                style="border: none; width: 100%; height: 100vh;"></iframe>
      </div>

    </div>
  </div>
</div>

<style>
  .genreGameSection .card {
    border-radius: 10px;
    min-height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.1rem;
  }
</style>


<style>
  .category-card {
    transition: all 0.4s ease;
    border-radius: 12px;
  }

  .category-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 0 20px rgba(255, 98, 0, 0.8), 0 0 30px rgba(255, 255, 255, 0.15);
    z-index: 3;
  }

  .category-card img {
    border-radius: 12px;
  }

  .card-img-overlay h4 {
    transition: background 0.3s ease;
  }

  .category-card:hover .card-img-overlay h4 {
    background-color: #fff !important;
    color: #000 !important;
  }
</style>


<style>
  .glowing-title {
    font-size: 2.75rem;
    text-shadow:
      0 0 5px #ff6200,
      0 0 10px #ff6200,
      0 0 15px #ff6200,
      0 0 20px #ff6200,
      0 0 30px #00ffd5;
    animation: glow-fade 2.5s ease-in-out infinite;
  }

  @keyframes glow-fade {
    0%, 100% {
      text-shadow:
        0 0 5px #ff6200,
        0 0 10px #ff6200,
        0 0 15px #ff6200,
        0 0 20px #ff6200,
        0 0 30px #00ffd5;
    }
    50% {
      text-shadow:
        0 0 2px #ff6200,
        0 0 5px #ff6200,
        0 0 10px #ff6200,
        0 0 15px #00ffd5,
        0 0 20px #00ffd5;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const categoryGrid = document.getElementById("categoryGrid");
    const genreSections = document.querySelectorAll('.genreGameSection');

    // Genre card click mapping
    document.getElementById("roleCard").addEventListener("click", () => showGenre("rolePlayingGames"));
    document.getElementById("simCard").addEventListener("click", () => showGenre("simulationGames"));
    document.getElementById("horrorCard").addEventListener("click", () => showGenre("horrorGames"));
    document.getElementById("racingCard").addEventListener("click", () => showGenre("racingGames"));

    // Show specific genre section
    function showGenre(sectionId) {
      categoryGrid.classList.add("d-none");
      genreSections.forEach(sec => sec.classList.add("d-none"));
      document.getElementById(sectionId).classList.remove("d-none");
    }

    // Back button function
    window.goBack = function () {
      genreSections.forEach(sec => sec.classList.add("d-none"));
      categoryGrid.classList.remove("d-none");
    }
  });
</script>




<style>
  .modal-backdrop {
    display: none !important;
  }
  
  footer {
  z-index: 999;
  position: relative;
}
.btn-close-white {
  filter: invert(1) brightness(2);
}

<style>
  /* 🔥 Glowing Header */
  .glowing-title {
    font-size: 3rem;
    font-weight: 800;
    text-align: center;
    background: linear-gradient(90deg, #ff6200, #ff004c, #00f0ff, #ff6200);
    background-size: 300% 300%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: glow-text 4s ease-in-out infinite;
  }

  @keyframes glow-text {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  /* 💠 Category Card Base */
  .category-card {
    border: none;
    border-radius: 1.5rem;
    overflow: hidden;
    position: relative;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.1);
  }

  .category-card:hover {
    transform: scale(1.05);
    box-shadow: 0 0 35px rgba(255, 98, 0, 0.9);
    z-index: 5;
  }

  .category-card img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    filter: brightness(0.85);
    transition: 0.5s;
  }

  .category-card:hover img {
    filter: brightness(1.1) saturate(1.4);
  }

  .category-card .overlay-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(145deg, rgba(255, 98, 0, 0.6), rgba(0, 0, 0, 0.4));
    z-index: 1;
    transition: opacity 0.3s ease;
  }

  .category-card:hover .overlay-gradient {
    opacity: 0.2;
  }

  .category-card .card-img-overlay {
    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .category-card h4 {
    font-size: 1.5rem;
    font-weight: 800;
    color: #000;
    padding: 0.6rem 1.5rem;
    border-radius: 50px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(8px);
    transition: 0.3s ease;
  }

  .category-card:hover h4 {
    background: #fff;
    color: #000;
    transform: scale(1.1);
  }

  /* ✨ Back Button Style */
  .btn-back-float {
    padding: 0.6rem 2rem;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 50px;
    background: linear-gradient(135deg, #ff6200, #ffc400);
    color: #000;
    border: none;
    transition: all 0.3s ease;
  }

  .btn-back-float:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(255, 255, 0, 0.6);
  }

  /* 📱 Responsive Fixes */
  @media (max-width: 576px) {
    .glowing-title {
      font-size: 2rem;
    }

    .category-card {
      height: 250px;
    }

    .category-card h4 {
      font-size: 1.1rem;
    }
  }
</style>

</style>


<!-- GLOBAL GO BACK BUTTON -->
<button id="gameExitBtn"
        type="button"
        class="btn position-fixed top-0 start-0 m-3 p-2 bg-danger text-white rounded-circle shadow"
        aria-label="Close"
        style="z-index: 9999; font-size: 1.2rem; display: none;">
  ❌
</button>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const gameExitBtn = document.getElementById('gameExitBtn');
    const navbar = document.querySelector('.navbar');
    let activeModal = null;

    // Listen for ALL modals
    const modals = document.querySelectorAll('.modal');

    modals.forEach(modal => {
      modal.addEventListener('show.bs.modal', () => {
        navbar.style.display = 'none';
        gameExitBtn.style.display = 'block';
        activeModal = bootstrap.Modal.getOrCreateInstance(modal);
      });

      modal.addEventListener('hidden.bs.modal', () => {
        navbar.style.display = 'flex';
        gameExitBtn.style.display = 'none';
        activeModal = null;
      });
    });

    // Close the currently open modal
    gameExitBtn.addEventListener('click', () => {
      if (activeModal) {
        activeModal.hide();
      }
    });
  });
</script>

<script>
  // Handle all feedback forms
  document.querySelectorAll('.feedback-box').forEach(form => {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(this);

      fetch('submit_feedback.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.text())
      .then(data => {
        // Success message
        const status = form.querySelector('.feedback-status');
        status.style.display = 'block';

        // Clear fields
        form.querySelector('textarea[name="feedback"]').value = '';
        form.querySelector('input[name="user_name"]').value = '';
      })
      .catch(err => {
        alert("❌ Something went wrong.");
        console.error(err);
      });
    });
  });
</script>





</section>

  

<?php include('footer.php') ?>


           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>