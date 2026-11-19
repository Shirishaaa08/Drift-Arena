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
 <link rel="icon" type="image/png" href="rl.png" />



  <style>
    body {
      background-color: #0a0a0a;
      color: white;
      font-family: 'Poppins', sans-serif;
    }
.glow-heading {
  font-family: 'Orbitron', sans-serif;
  font-size: 3.5rem;
  text-transform: uppercase;
  letter-spacing: 3px;
  background: linear-gradient(90deg, #00fff0, #00ffd1, #00aaff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  position: relative;
  animation: flicker 2.5s infinite;
  text-shadow:
    0 0 5px #00ffd1,
    0 0 10px #00ffd1,
    0 0 20px #00ffd1,
    0 0 40px #00ffe0;
}

.glow-heading::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: -10px;
  transform: translateX(-50%);
  width: 120px;
  height: 4px;
  background: #00ffd1;
  border-radius: 10px;
  box-shadow: 0 0 12px #00ffd1, 0 0 20px #00ffd1;
  animation: pulseUnderline 1.8s infinite alternate;
}

/* Neon flicker effect */
@keyframes flicker {
  0%, 18%, 22%, 25%, 53%, 57%, 100% {
    opacity: 1;
  }
  20%, 24%, 55% {
    opacity: 0.4;
  }
}

/* Glowing underline pulse */
@keyframes pulseUnderline {
  0% {
    transform: translateX(-50%) scaleX(1);
    opacity: 0.7;
  }
  100% {
    transform: translateX(-50%) scaleX(1.3);
    opacity: 1;
  }
}

</style>

  
</head>
<body>
    <!-- 🚀 Upcoming Section -->


<section id="upcoming" class="text-white py-5 mt-5"
  style="min-height: 100vh;
         background: url('img1/upo.png') no-repeat center center / cover;">
  <div class="container">
   <h2 class="glow-heading text-center mb-5">
  🌟 Upcoming
</h2>

  
<div class="tab-pane fade show active" id="upcoming" role="tabpanel" aria-labelledby="new-tab">
  <div class="container">
    <div class="row g-4">
        <!-- 🔹 Game Card 1 -->
        <!-- 🟢 Enhanced Game Card with Pre-Register Button -->
<!-- 🟢 Enhanced Game Card - GTA 6 with Right-Aligned Trailer Button -->
<div class="col-lg-4 col-md-6">
  <div class="card game-card text-white border-0 rounded-4 p-3" style="background: linear-gradient(to top right, #1a1a1a, #0f0f0f); transition: 0.4s ease;">

    <!-- Game Thumbnail -->
    <div class="mb-3" style="height: 160px; border-radius: 12px; overflow: hidden; border: 2px solid #00ffd1; box-shadow: 0 0 10px #00ffd1;">
      <img src="img1/u1.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Ground Zero">
    </div>

    <!-- Card Body -->
    <div class="card-body px-2">

      <!-- Title and Watch Trailer Button -->
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="text-info fw-bold text-uppercase mb-0" style="font-family: 'Orbitron', sans-serif;">Ground Zero</h5>
        <button class="btn btn-sm btn-info rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#trailerModalGroundZero">
          ▶️ Watch Trailer
        </button>
      </div>

      <p class="card-text text-light" style="font-size: 0.9rem;">
        After the collapse of civilization, only silence remains. Step into a futuristic warzone, uncover forbidden tech, and rewrite the fate of humanity from Ground Zero.
          </p>

      <!-- Ratings -->
      <div class="mb-3 small">
        <div class="d-flex justify-content-between"><span class="text-warning">💡 Idea</span><span>★★★★☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-info">🎨 Graphics</span><span>★★★☆☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-success">🎮 Concept</span><span>★★★★☆</span></div>
      </div>

      <!-- Pre-register Modal Trigger -->
      <button class="btn btn-sm btn-outline-warning w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#preRegisterModal1">
        🛒 Pre-register Now
      </button>
    </div>
  </div>
</div>

<!-- 🎬 Trailer Modal for Ground Zero -->
<div class="modal fade" id="trailerModalGroundZero" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-black border border-info rounded-4">
      <div class="modal-header border-info">
        <h5 class="modal-title text-info fw-bold" id="trailerModalLabel">🎬 Ground Zero Trailer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" onclick="stopGtaTrailer()"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Cf3OvrFbpY0"
        title="Ground Zero - Official Announcement Trailer"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
      </iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 🟡 Enhanced Bootstrap Modal with PHP Form -->
<div class="modal fade" id="preRegisterModal1" tabindex="-1" aria-labelledby="preRegisterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-white rounded-4 border border-info shadow-lg"
      style="background: radial-gradient(circle at top left, #111 20%, #000 100%);">
      
      <div class="modal-header border-bottom border-info bg-gradient" style="background: linear-gradient(to right, #0ff, #08f);">
        <h5 class="modal-title fw-bold text-dark" id="preRegisterModalLabel1">🛒 Pre-register for <span class="text-white">Ground Zero</span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="pre_register.php" class="animate__animated animate__fadeIn">
        <div class="modal-body">

          <!-- Hidden Game Name -->
          <input type="hidden" name="game_name" value="BGround Zero">

          <div class="mb-3">
            <label for="name1" class="form-label">🧑 Your Name</label>
            <input type="text" class="form-control border-info bg-dark text-white" id="name1" name="name" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label for="email1" class="form-label">📧 Email Address</label>
            <input type="email" class="form-control border-info bg-dark text-white" id="email1" name="email" placeholder="you@example.com" required>
          </div>
        </div>

        <div class="modal-footer border-top border-info">
          <button type="submit" class="btn btn-info w-100 rounded-pill fw-bold text-dark">
            ✅ Submit Pre-Registration
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- 🔵 Optional CSS Enhancements -->
<style>
  .game-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 0 20px #00ffd1, 0 0 10px #00ffd1 inset;
  }
  .form-control:focus {
    border-color: #0ff;
    box-shadow: 0 0 0 0.2rem rgba(0, 255, 255, 0.25);
  }
</style>

<!-- 🟢 Enhanced Game Card - GTA 6 with Right-Aligned Trailer Button -->
<div class="col-lg-4 col-md-6">
  <div class="card game-card text-white border-0 rounded-4 p-3" style="background: linear-gradient(to top right, #1a1a1a, #0f0f0f); transition: 0.4s ease;">

    <!-- Game Thumbnail -->
    <div class="mb-3" style="height: 160px; border-radius: 12px; overflow: hidden; border: 2px solid #00ffd1; box-shadow: 0 0 10px #00ffd1;">
      <img src="img1/u2.jpg" class="w-100 h-100" style="object-fit: cover;" alt="GTA 6">
    </div>

    <!-- Card Body -->
    <div class="card-body px-2">

      <!-- Title and Watch Trailer Button -->
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="text-info fw-bold text-uppercase mb-0" style="font-family: 'Orbitron', sans-serif;">GTA 6</h5>
        <button class="btn btn-sm btn-info rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#trailerModalGTA">
          ▶️ Watch Trailer
        </button>
      </div>

      <p class="card-text text-light" style="font-size: 0.9rem;">
        Dive into a chaotic open world where crime meets chrome. Hijack supercars, run neon-lit heists, and climb the underworld ranks in a city that never sleeps.
      </p>

      <!-- Ratings -->
      <div class="mb-3 small">
        <div class="d-flex justify-content-between"><span class="text-warning">💡 Idea</span><span>★★★★☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-info">🎨 Graphics</span><span>★★★☆☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-success">🎮 Concept</span><span>★★★★☆</span></div>
      </div>

      <!-- Pre-register Modal Trigger -->
      <button class="btn btn-sm btn-outline-warning w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#preRegisterModal2">
        🛒 Pre-register Now
      </button>
    </div>
  </div>
</div>
<!-- 🎬 Trailer Modal for GTA 6 -->
<div class="modal fade" id="trailerModalGTA" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-black border border-info rounded-4">
      <div class="modal-header border-info">
        <h5 class="modal-title text-info fw-bold" id="trailerModalLabel">🎬 GTA 6 - Official Trailer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" onclick="stopGtaTrailer()"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VQRLujxTm3c"
        title="Grand Theft Auto VI Trailer 2"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
      </iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 🟡 Modal with PHP Form for GTA 6 -->
<div class="modal fade" id="preRegisterModal2" tabindex="-1" aria-labelledby="preRegisterModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-white rounded-4 border border-info shadow-lg"
      style="background: radial-gradient(circle at top left, #111 20%, #000 100%);">
      
      <div class="modal-header border-bottom border-info bg-gradient" style="background: linear-gradient(to right, #0ff, #08f);">
        <h5 class="modal-title fw-bold text-dark" id="preRegisterModalLabel2">🛒 Pre-register for <span class="text-white">GTA 6</span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="pre_register.php" class="animate__animated animate__fadeIn">
        <div class="modal-body">

          <!-- Hidden Game Name -->
          <input type="hidden" name="game_name" value="GTA 6">

          <div class="mb-3">
            <label for="name2" class="form-label">🧑 Your Name</label>
            <input type="text" class="form-control border-info bg-dark text-white" id="name2" name="name" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label for="email2" class="form-label">📧 Email Address</label>
            <input type="email" class="form-control border-info bg-dark text-white" id="email2" name="email" placeholder="you@example.com" required>
          </div>
        </div>

        <div class="modal-footer border-top border-info">
          <button type="submit" class="btn btn-info w-100 rounded-pill fw-bold text-dark">
            ✅ Submit Pre-Registration
          </button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- 🟢 Enhanced Game Card3 - ILL: Descent into Flesh -->
<div class="col-lg-4 col-md-6">
  <div class="card game-card text-white border-0 rounded-4 p-3" style="background: linear-gradient(to top right, #1a1a1a, #0f0f0f); transition: 0.4s ease;">

    <!-- Game Thumbnail -->
    <div class="mb-3" style="height: 160px; border-radius: 12px; overflow: hidden; border: 2px solid #00ffd1; box-shadow: 0 0 10px #00ffd1;">
      <img src="img1/u3.jpg" class="w-100 h-100" style="object-fit: cover;" alt="GTA 6">
    </div>

    <!-- Card Body -->
    <div class="card-body px-2">

      <!-- Title and Watch Trailer Button -->
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="text-info fw-bold text-uppercase mb-0" style="font-family: 'Orbitron', sans-serif;">ILL</h5>
        <button class="btn btn-sm btn-info rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#trailerModalILL">
          ▶️ Watch Trailer
        </button>
      </div>

      <p class="card-text text-light" style="font-size: 0.9rem;">
        A decaying town.Grotesque experiments. Step into the madness of ILL — where your mind and body are your only weapons against the unknown.
       </p>

      <!-- Ratings -->
      <div class="mb-3 small">
        <div class="d-flex justify-content-between"><span class="text-warning">💡 Idea</span><span>★★★★☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-info">🎨 Graphics</span><span>★★★☆☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-success">🎮 Concept</span><span>★★★★☆</span></div>
      </div>

      <!-- Pre-register Modal Trigger -->
      <button class="btn btn-sm btn-outline-warning w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#preRegisterModal3">
        🛒 Pre-register Now
      </button>
    </div>
  </div>
</div>
<!-- 🎬 Trailer Modal for ILL: Descent into Flesh -->
<div class="modal fade" id="trailerModalILL" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-black border border-info rounded-4">
      <div class="modal-header border-info">
        <h5 class="modal-title text-info fw-bold" id="trailerModalLabel">🎬 ILL: Descent into Flesh Trailer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" onclick="stopGtaTrailer()"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
         <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jkkc-kQTuNM"
        title="ILL: Official Gameplay Trailer"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
      </iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 🟡 Modal with PHP Form for ILL: Descent into Flesh -->
<div class="modal fade" id="preRegisterModal3" tabindex="-1" aria-labelledby="preRegisterModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-white rounded-4 border border-info shadow-lg"
         style="background: radial-gradient(circle at top left, #111 20%, #000 100%);">

      <div class="modal-header border-bottom border-info bg-gradient" style="background: linear-gradient(to right, #0ff, #08f);">
        <h5 class="modal-title fw-bold text-dark" id="preRegisterModalLabel3">🛒 Pre-register for <span class="text-white">ILL</span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="pre_register.php" class="animate__animated animate__fadeIn">
        <div class="modal-body">

          <!-- Hidden Game Name -->
          <input type="hidden" name="game_name" value="ILL: Descent into Flesh">

          <div class="mb-3">
            <label for="name3" class="form-label">🧑 Your Name</label>
            <input type="text" class="form-control border-info bg-dark text-white" id="name3" name="name" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label for="email3" class="form-label">📧 Email Address</label>
            <input type="email" class="form-control border-info bg-dark text-white" id="email3" name="email" placeholder="you@example.com" required>
          </div>
        </div>

        <div class="modal-footer border-top border-info">
          <button type="submit" class="btn btn-info w-100 rounded-pill fw-bold text-dark">
            ✅ Submit Pre-Registration
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- 🟢 Enhanced Game Card4 - Beast of Reincarnation  -->
<div class="col-lg-4 col-md-6">
  <div class="card game-card text-white border-0 rounded-4 p-3" style="background: linear-gradient(to top right, #1a1a1a, #0f0f0f); transition: 0.4s ease;">

    <!-- Game Thumbnail -->
    <div class="mb-3" style="height: 160px; border-radius: 12px; overflow: hidden; border: 2px solid #00ffd1; box-shadow: 0 0 10px #00ffd1;">
      <img src="img1/u4.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Beast of Reincarnation ">
    </div>

    <!-- Card Body -->
    <div class="card-body px-2">

      <!-- Title and Watch Trailer Button -->
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="text-info fw-bold text-uppercase mb-0" style="font-family: 'Orbitron', sans-serif;">Reincarnation</h5>
        <button class="btn btn-sm btn-info rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#trailerModalReincarnation">
          ▶️ Watch Trailer
        </button>
      </div>
      <p class="card-text text-light" style="font-size: 0.9rem;">
               Awaken in a shattered realm where death is only the beginning. Channel ancient beasts, and reclaim your soul in a world where destiny resets withdeath.
                </p>

      <!-- Ratings -->
      <div class="mb-3 small">
        <div class="d-flex justify-content-between"><span class="text-warning">💡 Idea</span><span>★★★★☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-info">🎨 Graphics</span><span>★★★☆☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-success">🎮 Concept</span><span>★★★★☆</span></div>
      </div>

      <!-- Pre-register Modal Trigger -->
      <button class="btn btn-sm btn-outline-warning w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#preRegisterModal4">
        🛒 Pre-register Now
      </button>
    </div>
  </div>
</div>
<!-- 🎬 Trailer Modal for ILL: Descent into Flesh -->
<div class="modal fade" id="trailerModalReincarnation" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-black border border-info rounded-4">
      <div class="modal-header border-info">
        <h5 class="modal-title text-info fw-bold" id="trailerModalLabel">🎬 Beast of Reincarnation Trailer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" onclick="stopGtaTrailer()"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
         <iframe width="100%" height="100%" src="https://www.youtube.com/embed/L-qZiMPsNz0"
        title="Beast of Reincarnation - Reveal Trailer | Xbox Games Showcase 2025"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
      </iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 🟡 Modal with PHP Form for Beast of Reincarnation -->
<div class="modal fade" id="preRegisterModal4" tabindex="-1" aria-labelledby="preRegisterModalLabel4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-white rounded-4 border border-info shadow-lg"
         style="background: radial-gradient(circle at top left, #111 20%, #000 100%);">

      <div class="modal-header border-bottom border-info bg-gradient" style="background: linear-gradient(to right, #0ff, #08f);">
        <h5 class="modal-title fw-bold text-dark" id="preRegisterModalLabel4">🛒 Pre-register for <span class="text-white">Beast of Reincarnation </span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="pre_register.php" class="animate__animated animate__fadeIn">
        <div class="modal-body">

          <!-- Hidden Game Name -->
          <input type="hidden" name="game_name" value="Beast of Reincarnation ">

          <div class="mb-3">
            <label for="name4" class="form-label">🧑 Your Name</label>
            <input type="text" class="form-control border-info bg-dark text-white" id="name4" name="name" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label for="email4" class="form-label">📧 Email Address</label>
            <input type="email" class="form-control border-info bg-dark text-white" id="email4" name="email" placeholder="you@example.com" required>
          </div>
        </div>

        <div class="modal-footer border-top border-info">
          <button type="submit" class="btn btn-info w-100 rounded-pill fw-bold text-dark">
            ✅ Submit Pre-Registration
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- 🟢 Enhanced Game Card5 - Ledgerbound -->
<div class="col-lg-4 col-md-6">
  <div class="card game-card text-white border-0 rounded-4 p-3" style="background: linear-gradient(to top right, #1a1a1a, #0f0f0f); transition: 0.4s ease;">

    <!-- Game Thumbnail -->
    <div class="mb-3" style="height: 160px; border-radius: 12px; overflow: hidden; border: 2px solid #00ffd1; box-shadow: 0 0 10px #00ffd1;">
      <img src="img1/u5.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Ledgerbound ">
    </div>

    <!-- Card Body -->
    <div class="card-body px-2">

      <!-- Title and Watch Trailer Button -->
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="text-info fw-bold text-uppercase mb-0" style="font-family: 'Orbitron', sans-serif;">Ledgerbound</h5>
        <button class="btn btn-sm btn-info rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#trailerModalLedgerbound">
          ▶️ Watch Trailer
        </button>
      </div>
      <p class="card-text text-light" style="font-size: 0.9rem;">
               Bound by fate. Dive into a beautifully dark realm where your decisions etch your destiny into a living archive. Solve ancient puzzles and shape reality itself.
                    </p>

      <!-- Ratings -->
      <div class="mb-3 small">
        <div class="d-flex justify-content-between"><span class="text-warning">💡 Idea</span><span>★★★★☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-info">🎨 Graphics</span><span>★★★☆☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-success">🎮 Concept</span><span>★★★★☆</span></div>
      </div>

      <!-- Pre-register Modal Trigger -->
      <button class="btn btn-sm btn-outline-warning w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#preRegisterModal5">
        🛒 Pre-register Now
      </button>
    </div>
  </div>
</div>
<!-- 🎬 Trailer Modal for ILL: Descent into Flesh -->
<div class="modal fade" id="trailerModalLedgerbound" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-black border border-info rounded-4">
      <div class="modal-header border-info">
        <h5 class="modal-title text-info fw-bold" id="trailerModalLabel">🎬 Ledgerbound Trailer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" onclick="stopGtaTrailer()"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
         <iframe width="100%" height="100%" src="https://www.youtube.com/embed/93HwuXmwk9M"
        title="Ledgerbound - Official Trailer | IGN Live 2025"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
      </iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 🟡 Modal with PHP Form for Ledgerbound -->
<div class="modal fade" id="preRegisterModal5" tabindex="-1" aria-labelledby="preRegisterModalLabel5" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-white rounded-4 border border-info shadow-lg"
         style="background: radial-gradient(circle at top left, #111 20%, #000 100%);">

      <div class="modal-header border-bottom border-info bg-gradient" style="background: linear-gradient(to right, #0ff, #08f);">
        <h5 class="modal-title fw-bold text-dark" id="preRegisterModalLabel5">🛒 Pre-register for <span class="text-white">Ledgerbound</span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="pre_register.php" class="animate__animated animate__fadeIn">
        <div class="modal-body">

          <!-- Hidden Game Name -->
          <input type="hidden" name="game_name" value="Ledgerbound">

          <div class="mb-3">
            <label for="name5" class="form-label">🧑 Your Name</label>
            <input type="text" class="form-control border-info bg-dark text-white" id="name5" name="name" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label for="email5" class="form-label">📧 Email Address</label>
            <input type="email" class="form-control border-info bg-dark text-white" id="email5" name="email" placeholder="you@example.com" required>
          </div>
        </div>

        <div class="modal-footer border-top border-info">
          <button type="submit" class="btn btn-info w-100 rounded-pill fw-bold text-dark">
            ✅ Submit Pre-Registration
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- 🟢 Enhanced Game Card6 - NODE: The Last Favor -->
<div class="col-lg-4 col-md-6">
  <div class="card game-card text-white border-0 rounded-4 p-3" style="background: linear-gradient(to top right, #1a1a1a, #0f0f0f); transition: 0.4s ease;">

    <!-- Game Thumbnail -->
    <div class="mb-3" style="height: 160px; border-radius: 12px; overflow: hidden; border: 2px solid #00ffd1; box-shadow: 0 0 10px #00ffd1;">
      <img src="img1/u6.jpg" class="w-100 h-100" style="object-fit: cover;" alt="NODE: The Last Favor">
    </div>

    <!-- Card Body -->
    <div class="card-body px-2">

      <!-- Title and Watch Trailer Button -->
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h5 class="text-info fw-bold text-uppercase mb-0" style="font-family: 'Orbitron', sans-serif;">NODE</h5>
        <button class="btn btn-sm btn-info rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#trailerModalNODE">
          ▶️ Watch Trailer
        </button>
      </div>
      <p class="card-text text-light" style="font-size: 0.9rem;">
               In the shadow of extinction, your destiny awaits. Journey through alien-infested ruins, unravel ancient cosmic riddles, and confront the unknown. 
       </p>

      <!-- Ratings -->
      <div class="mb-3 small">
        <div class="d-flex justify-content-between"><span class="text-warning">💡 Idea</span><span>★★★★☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-info">🎨 Graphics</span><span>★★★☆☆</span></div>
        <div class="d-flex justify-content-between"><span class="text-success">🎮 Concept</span><span>★★★★☆</span></div>
      </div>

      <!-- Pre-register Modal Trigger -->
      <button class="btn btn-sm btn-outline-warning w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#preRegisterModal6">
        🛒 Pre-register Now
      </button>
    </div>
  </div>
</div>
<!-- 🎬 Trailer Modal for ILL: Descent into Flesh -->
<div class="modal fade" id="trailerModalNODE" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-black border border-info rounded-4">
      <div class="modal-header border-info">
        <h5 class="modal-title text-info fw-bold" id="trailerModalLabel">🎬 NODE: The Last Favor Trailer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" onclick="stopGtaTrailer()"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
         <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VmxE7JhCHXI"
        title="NODE: The Last Favor of the Antarii - Official Gameplay Trailer"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
      </iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 🟡 Modal with PHP Form for NODE: The Last Favor -->
<div class="modal fade" id="preRegisterModal6" tabindex="-1" aria-labelledby="preRegisterModalLabel6" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-white rounded-4 border border-info shadow-lg"
         style="background: radial-gradient(circle at top left, #111 20%, #000 100%);">

      <div class="modal-header border-bottom border-info bg-gradient" style="background: linear-gradient(to right, #0ff, #08f);">
        <h5 class="modal-title fw-bold text-dark" id="preRegisterModalLabel6">🛒 Pre-register for <span class="text-white">NODE: The Last Favor</span></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="pre_register.php" class="animate__animated animate__fadeIn">
        <div class="modal-body">

          <!-- Hidden Game Name -->
          <input type="hidden" name="game_name" value="NODE: The Last Favor">

          <div class="mb-3">
            <label for="name6" class="form-label">🧑 Your Name</label>
            <input type="text" class="form-control border-info bg-dark text-white" id="name6" name="name" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <label for="email6" class="form-label">📧 Email Address</label>
            <input type="email" class="form-control border-info bg-dark text-white" id="email6" name="email" placeholder="you@example.com" required>
          </div>
        </div>

        <div class="modal-footer border-top border-info">
          <button type="submit" class="btn btn-info w-100 rounded-pill fw-bold text-dark">
            ✅ Submit Pre-Registration
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ✅ Scripts -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const name = document.getElementById('gamerName');
    const platform = document.getElementById('platformSelect');
    const email = document.getElementById('emailInput');
    const registerBtn = document.getElementById('registerBtn');
    const form = document.getElementById('registerForm');

    function checkForm() {
      registerBtn.disabled = !(name.value.trim() && platform.value && email.value.trim());
    }

    name.addEventListener('input', checkForm);
    platform.addEventListener('change', checkForm);
    email.addEventListener('input', checkForm);

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const modalEl = document.getElementById('preRegisterModal1');
      const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
      modal.hide();
      alert('✅ Done! You’re Registered');
    });

    // Reset form when modal opens
    document.getElementById('preRegisterModal1').addEventListener('show.bs.modal', function () {
      document.getElementById('registerForm').reset();
      document.getElementById('registerBtn').disabled = true;
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.sendFeedbackBtn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        const cardBody = btn.closest('.card-body');
        const feedback = cardBody.querySelector('.feedbackText');
        const suggestion = cardBody.querySelector('.suggestionText');

        if (!feedback.value.trim()) {
          alert("⚠ Please write some feedback before sending.");
        } else {
          alert("✅ Thanks! Your feedback has been received.");
          feedback.value = '';
          suggestion.value = '';
        }
      });
    });
  });
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const forms = document.querySelectorAll("form[action='pre_register.php']");

  forms.forEach(form => {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(form);
      const modalBody = form.querySelector(".modal-body");
      const modalFooter = form.querySelector(".modal-footer");

      fetch("pre_register.php", {
        method: "POST",
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        // ✅ Replace modal body with message
        modalBody.innerHTML = `
          <div class="alert alert-success text-center fw-bold rounded-pill py-3 mb-0">
            ${data.message}
          </div>
        `;

        // ✅ Clear or hide modal footer (submit button)
        if (modalFooter) {
          modalFooter.innerHTML = "";
        }
      })
      .catch(err => {
        console.error("Fetch error:", err);
        modalBody.innerHTML = `
          <div class="alert alert-danger text-center fw-bold rounded-pill py-3 mb-0">
            ❌ Something went wrong!
          </div>
        `;
        if (modalFooter) {
          modalFooter.innerHTML = "";
        }
      });
    });
  });
});
</script>
<script>
  const gtaModal = document.getElementById('trailerModalGTA');
  gtaModal.addEventListener('show.bs.modal', function () {
    const iframe = document.getElementById('gtaTrailerIframe');
    iframe.src = iframe.getAttribute('data-src');
  });

  function stopGtaTrailer() {
    document.getElementById('gtaTrailerIframe').src = "";
  }
</script>
</section>



<?php include('footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>