<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DriftArena</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
 <link href="https://fonts.googleapis.com/css2?family=Audiowide=swap" rel="stylesheet">
 <!-- ✅ Favicon Line Added -->
  <link rel="icon" type="image/png" href="image/rl.png" />





  <style>
    body {
      background-color: #0a0a0a;
      color: white;
      font-family: 'Poppins', sans-serif;
    }
  
   
 

  #download {
    background: url('td.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
    padding: 100px 0;
    position: relative;
    z-index: 1;
  }

  #download::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0); /* No blur, no overlay */
    z-index: -1;
  }

  #download .container, 
  #download .section-title, 
  #download .card {
    position: relative;
    z-index: 2;
  }
  .card {
  border: 2px solid #00f2ff;
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  background: rgba(0, 0, 0, 0.85);
  backdrop-filter: blur(3px);
  box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
}

.card:hover {
  transform: scale(1.03);
  box-shadow: 0 0 25px #00ffe0, 0 0 10px #00ffe0 inset;
}

.card-img-top {
  height: 250px;
  object-fit: cover;
  border-bottom: 2px solid #00ffe0;
}

.card-title {
  font-family: 'Orbitron', sans-serif;
  color: #00f2ff;
  font-size: 1.2rem;
  text-shadow: 0 0 5px #00f2ff;
}

.card-text {
  font-size: 0.95rem;
  color: #cccccc;
}

.btn-info {
  background: #00f2ff;
  border: none;
  color: black;
  font-weight: bold;
  transition: 0.3s ease;
}

.btn-info:hover {
  background: #0ff;
  color: black;
  transform: scale(1.05);
}

.btn-success {
  background: #00ff88;
  border: none;
  color: black;
  font-weight: bold;
}

.btn-success:hover {
  background: #00ffaa;
  transform: scale(1.05);
}

</style>




</style>

</head>



<!-- 🏆 Conquer the Arena with Animation -->
<div id="arenaIntro" class="position-fixed top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center overflow-hidden" style="z-index: 9999;">

  <!-- 🎥 Fullscreen Background Video -->
  <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" style="z-index: -1;">
    <source src="image/1111.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Optional Particle Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 50% 50%, rgba(0, 255, 255, 0.1), transparent 70%);">
    <div class="td.jpg-particles"></div>
  </div>

  <!-- Glowing Oval Box -->
  <div class="p-5 px-4 px-md-5 glowing-box">
    <h1 class="glow-text mb-4"><span>🏆</span> Conquer the Arena</h1>
    <button class="btn btn-outline-info btn-lg fw-bold pulse-btn" onclick="enterArena()">Enter the Arena</button>
  </div>
</div>


 <style>


  /* Glowing box */
  .glowing-box {
    border: 2px solid #00ffd1;
    border-radius: 100px;
    background: rgba(0, 0, 0, 0.6);
    box-shadow: 0 0 20px #00ffd1;
    backdrop-filter: blur(6px);
    animation: fadeIn 2s ease forwards;
  }

  /* Glowing text */
  .glow-text {
    font-family: 'Orbitron', sans-serif;
    font-size: 3rem;
    color: #00ffd1;
    text-shadow: 0 0 8px #00ffd1, 0 0 16px #00ffd1;
    animation: flicker 2s infinite alternate;
  }

  /* Fade in */
  @keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
  }

  /* Text flicker */
  @keyframes flicker {
    0% { opacity: 1; text-shadow: 0 0 10px #00ffd1; }
    50% { opacity: 0.8; text-shadow: 0 0 25px #00ffd1; }
    100% { opacity: 1; text-shadow: 0 0 15px #00ffd1; }
  }

  /* Button pulse effect */
  .pulse-btn {
    animation: pulse 1.6s infinite;
  }

  @keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(0, 255, 255, 0.5); }
    70% { box-shadow: 0 0 0 20px rgba(0, 255, 255, 0); }
    100% { box-shadow: 0 0 0 0 rgba(0, 255, 255, 0); }
  }

  #arenaIntro.fade-out {
    opacity: 0;
    pointer-events: none;
    transition: opacity 1s ease;
  }
</style>

<script>
  function enterArena() {
    document.getElementById('arenaIntro').classList.add('fade-out');
    setTimeout(() => {
      document.getElementById('arenaIntro').style.display = 'none';
    }, 1000);
  }
</script>


<body style="background:black; color:white; font-family:'Orbitron';">
  <section id="download" class="py-5 mt-5 text-white" style="
    background: url('crystal.jpg') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
  ">
    <div class="container">
      <div class="text-center mb-5">
  <div style="
    display: inline-block;
    padding: 20px 40px;
    border: 2px solid #00ffd1;
    border-radius: 50px;
    background: rgba(0, 0, 0, 0.6);
    box-shadow: 0 0 20px #00ffd1, 0 0 40px #00ffd1 inset;
  ">
    <h2 style="
      font-size: 2.8rem;
      font-family: 'Orbitron', sans-serif;
      font-weight: 700;
      margin: 0;
      color: #00fff7;
      letter-spacing: 1.5px;
      text-shadow:
        0 0 5px #00fff7,
        0 0 10px #00ffd1,
        0 0 20px #00ffd1;
    ">
      🎮 Try &amp; <span style="
        color: #ff007f;
        text-shadow: 0 0 5px #ff007f, 0 0 10px #ff3399;">Download Games</span>
    </h2>
  </div>
</div>

      <div class="row g-4">

       <!-- Game Card 1 -->
<div class="col-md-6 mb-4">
  <div class="card h-100 bg-gradient border border-info shadow-lg">
    <img src="image/101.jpg" class="card-img-top" alt="Man Runner" style="height: 220px; object-fit: cover;">
    <div class="card-body d-flex flex-column text-white bg-dark">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <h5 class="card-title mb-0">Man Runner</h5>
        <span class="badge bg-warning text-dark">Action</span>
      </div>
      <p class="card-text small">Run, dodge, and collect coins in this fast-paced adventure!</p>

      <div class="mt-auto">
        <div class="d-grid gap-2">
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#gameModal1">
            🎮 Try Now
          </button>
          <button class="btn btn-success btn-sm downloadBtn" data-bs-toggle="modal" data-bs-target="#downloadModal" data-game="Man Runner">
            ⬇️ Download
          </button>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-2">
          <small>⭐ <strong>4.4</strong> / 5</small>
          <a href="#" class="review-link text-info small text-decoration-none" data-game="Man Runner" data-bs-toggle="modal" data-bs-target="#reviewModal">💬 Write a Review</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Game Card 2 -->
<div class="col-md-6 mb-4">
  <div class="card h-100 bg-gradient border border-info shadow-lg">
    <img src="image/t1.avif" class="card-img-top" alt="Night City Racing" style="height: 220px; object-fit: cover;">
    <div class="card-body d-flex flex-column text-white bg-dark">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <h5 class="card-title mb-0">Night City Racing</h5>
        <span class="badge bg-danger">Racing</span>
      </div>
      <p class="card-text small">Burn rubber in neon-lit streets and become the drift king!</p>

      <div class="mt-auto">
        <div class="d-grid gap-2">
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#gameModal2">
            🎮 Try Now
          </button>
          <button class="btn btn-success btn-sm downloadBtn" data-bs-toggle="modal" data-bs-target="#downloadModal" data-game="Night City Racing">
            ⬇️ Download
          </button>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-2">
          <small>⭐ <strong>4.4</strong> / 5</small>
          <a href="#" class="review-link text-info small text-decoration-none" data-game="Night City Racing" data-bs-toggle="modal" data-bs-target="#reviewModal">💬 Write a Review</a>
        </div>
      </div>
    </div>
  </div>
</div>


 <!-- Game Card 3 -->
<div class="col-md-6 mb-4">
  <div class="card h-100 bg-gradient border border-info shadow-lg">
    <img src="image/t2.avif" class="card-img-top" alt="Quick TDM!" style="height: 220px; object-fit: cover;">
    <div class="card-body d-flex flex-column text-white bg-dark">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <h5 class="card-title mb-0">Quick TDM!</h5>
        <span class="badge bg-primary">Shooter</span>
      </div>
      <p class="card-text small">Fast-paced team battles to dominate the arena!</p>
      <div class="mt-auto">
        <div class="d-grid gap-2">
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#gameModal3">🎮 Try Now</button>
          <button class="btn btn-success btn-sm downloadBtn" data-bs-toggle="modal" data-bs-target="#downloadModal" data-game="Quick TDM!">⬇️ Download</button>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <small>⭐ <strong>4.7</strong> / 5</small>
          <a href="#" class="review-link text-info small text-decoration-none" data-game="Quick TDM!" data-bs-toggle="modal" data-bs-target="#reviewModal">💬 Write a Review</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Game Card 4 -->
<div class="col-md-6 mb-4">
  <div class="card h-100 bg-gradient border border-info shadow-lg">
    <img src="image/t3.avif" class="card-img-top" alt="Embedded Kills" style="height: 220px; object-fit: cover;">
    <div class="card-body d-flex flex-column text-white bg-dark">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <h5 class="card-title mb-0">Embedded Kills</h5>
        <span class="badge bg-danger">Survival</span>
      </div>
      <p class="card-text small">Survive, eliminate, and conquer your enemies!</p>
      <div class="mt-auto">
        <div class="d-grid gap-2">
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#gameModal4">🎮 Try Now</button>
          <button class="btn btn-success btn-sm downloadBtn" data-bs-toggle="modal" data-bs-target="#downloadModal" data-game="Embedded Kills">⬇️ Download</button>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <small>⭐ <strong>4.3</strong> / 5</small>
          <a href="#" class="review-link text-info small text-decoration-none" data-game="Embedded Kills" data-bs-toggle="modal" data-bs-target="#reviewModal">💬 Write a Review</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Game Card 5 -->
<div class="col-md-6 mb-4">
  <div class="card h-100 bg-gradient border border-info shadow-lg">
    <img src="img1/br.jpg" class="card-img-top" alt="Brother Wake Up" style="height: 220px; object-fit: cover;">
    <div class="card-body d-flex flex-column text-white bg-dark">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <h5 class="card-title mb-0">Brother Wake Up</h5>
        <span class="badge bg-warning text-dark">Mystery</span>
      </div>
      <p class="card-text small">Unravel the secrets and wake your brother from the nightmare!</p>
      <div class="mt-auto">
        <div class="d-grid gap-2">
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#gameModal5">🎮 Try Now</button>
          <button class="btn btn-success btn-sm downloadBtn" data-bs-toggle="modal" data-bs-target="#downloadModal" data-game="Brother Wake Up">⬇️ Download</button>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <small>⭐ <strong>4.1</strong> / 5</small>
          <a href="#" class="review-link text-info small text-decoration-none" data-game="Brother Wake Up" data-bs-toggle="modal" data-bs-target="#reviewModal">💬 Write a Review</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Game Card 6 -->
<div class="col-md-6 mb-4">
  <div class="card h-100 bg-gradient border border-info shadow-lg">
    <img src="image/t4.avif" class="card-img-top" alt="Uno" style="height: 220px; object-fit: cover;">
    <div class="card-body d-flex flex-column text-white bg-dark">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <h5 class="card-title mb-0">Uno</h5>
        <span class="badge bg-success">Multiplayer</span>
      </div>
      <p class="card-text small">Classic card game fun with your friends and rivals!</p>
      <div class="mt-auto">
        <div class="d-grid gap-2">
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#gameModal6">🎮 Try Now</button>
          <button class="btn btn-success btn-sm downloadBtn" data-bs-toggle="modal" data-bs-target="#downloadModal" data-game="Uno">⬇️ Download</button>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <small>⭐ <strong>4.8</strong> / 5</small>
          <a href="#" class="review-link text-info small text-decoration-none" data-game="Uno" data-bs-toggle="modal" data-bs-target="#reviewModal">💬 Write a Review</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Game Card 7 -->
<div class="col-md-6 mb-4">
  <div class="card h-100 bg-gradient border border-info shadow-lg">
    <img src="image/loiklok.jpg" class="card-img-top" alt="Traffic Rider" style="height: 220px; object-fit: cover;">
    <div class="card-body d-flex flex-column text-white bg-dark">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <h5 class="card-title mb-0">Traffic Rider</h5>
        <span class="badge bg-info text-dark">Racing</span>
      </div>
      <p class="card-text small">Speed through traffic endlessly and beat the leaderboard!</p>
      <div class="mt-auto">
        <div class="d-grid gap-2">
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#gameModal7">🎮 Try Now</button>
          <button class="btn btn-success btn-sm downloadBtn" data-bs-toggle="modal" data-bs-target="#downloadModal" data-game="Traffic Rider">⬇️ Download</button>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <small>⭐ <strong>4.2</strong> / 5</small>
         <a href="#" class="review-link text-info small text-decoration-none" data-game="Traffic Rider" data-bs-toggle="modal" data-bs-target="#reviewModal">💬 Write a Review</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Game Card 8 -->
<div class="col-md-6 mb-4">
  <div class="card h-100 bg-gradient border border-info shadow-lg">
    <img src="image/t5.avif" class="card-img-top" alt="You Are Being Watched" style="height: 220px; object-fit: cover;">
    <div class="card-body d-flex flex-column text-white bg-dark">
      <div class="d-flex justify-content-between align-items-start mb-2">
        <h5 class="card-title mb-0">You Are Being Watched</h5>
        <span class="badge bg-secondary">Horror</span>
      </div>
      <p class="card-text small">Navigate the maze and escape the unknown presence stalking you!</p>
      <div class="mt-auto">
        <div class="d-grid gap-2">
          <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#gameModal8">🎮 Try Now</button>
          <button class="btn btn-success btn-sm downloadBtn" data-bs-toggle="modal" data-bs-target="#downloadModal" data-game="You Are Being Watched">⬇️ Download</button>
        </div>
        <div class="d-flex justify-content-between mt-2">
          <small>⭐ <strong>4.5</strong> / 5</small>
          <a href="#" class="review-link text-info small text-decoration-none" data-game="You Are Being Watched" data-bs-toggle="modal" data-bs-target="#reviewModal">💬 Write a Review</a>

        </div>
      </div>
    </div>
  </div>
</div>


</div> <!-- row -->
    </div> <!-- container -->
  </section>

   <!-- Modals for Try Now -->
  <div class="modal fade" id="gameModal1" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content bg-dark"><div class="modal-header border-0"><h5 class="modal-title text-white">Man Runner</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body p-0"><iframe src="https://www.crazygames.com/embed/man-runner-2048" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe></div></div></div></div>

  <div class="modal fade" id="gameModal2" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content bg-dark"><div class="modal-header border-0"><h5 class="modal-title text-white">Night City Racing</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body p-0"><iframe src="https://www.crazygames.com/embed/night-city-racing" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe></div></div></div></div>

  <div class="modal fade" id="gameModal3" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content bg-dark"><div class="modal-header border-0"><h5 class="modal-title text-white">Quick TDM</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body p-0"><iframe src="https://www.crazygames.com/embed/hazmob-fps-online-shooter" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe></div></div></div></div>

  <div class="modal fade" id="gameModal4" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content bg-dark"><div class="modal-header border-0"><h5 class="modal-title text-white">Embedded Kills</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body p-0"><iframe src="https://www.crazygames.com/embed/kour-io" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe></div></div></div></div>

  <div class="modal fade" id="gameModal5" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content bg-dark"><div class="modal-header border-0"><h5 class="modal-title text-white">Brother Wake Up</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body p-0"><iframe src="https://www.crazygames.com/embed/brother-wake-up" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe></div></div></div></div>

  <div class="modal fade" id="gameModal6" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content bg-dark"><div class="modal-header border-0"><h5 class="modal-title text-white">Uno</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body p-0"><iframe src="https://www.crazygames.com/embed/duo-with-friends" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe></div></div></div></div>

  <div class="modal fade" id="gameModal7" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content bg-dark"><div class="modal-header border-0"><h5 class="modal-title text-white">Traffic Rider</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body p-0"><iframe src="https://www.crazygames.com/embed/traffic-rider-vvq" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe></div></div></div></div>

  <div class="modal fade" id="gameModal8" tabindex="-1"><div class="modal-dialog modal-fullscreen"><div class="modal-content bg-dark"><div class="modal-header border-0"><h5 class="modal-title text-white">You Are Being Watched</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body p-0"><iframe src="https://www.crazygames.com/embed/you-are-being-watched---horror-game" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe></div></div></div></div>




      </div>
      
      

<!-- 🔽 Download Form Modal -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form action="download.php" method="POST" class="modal-content bg-dark text-white border border-info">
      <div class="modal-header">
        <h5 class="modal-title" id="downloadModalLabel">Download Request</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Hidden Field for Game Name -->
        <input type="hidden" name="game_name" id="selectedGameName">

        <div class="mb-3">
          <label for="playerName" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="playerName" name="player_name" required>
        </div>

        <div class="mb-3">
          <label for="platform" class="form-label">Select Platform</label>
          <select class="form-select" id="platform" name="platform" required>
            <option value="">Choose...</option>
            <option value="PC">PC</option>
            <option value="Android">Android</option>
            <option value="Console">Console</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Start Download</button>
      </div>
    </form>
  </div>
</div>


<!-- 🧠 JS to Set Game Name -->
<script>
  // Set game name from clicked button
  document.querySelectorAll('.downloadBtn').forEach(button => {
    button.addEventListener('click', function () {
      const gameName = this.getAttribute('data-game');
      document.getElementById('selectedGameName').value = gameName;
    });
  });

  // Clear form data when modal closes
  const downloadModal = document.getElementById('downloadModal');
  downloadModal.addEventListener('hidden.bs.modal', function () {
    downloadModal.querySelector('form').reset(); // Clear all inputs
    document.getElementById('selectedGameName').value = ''; // Optional: clear hidden input
  });
</script>

<!-- ✍️ Global Review Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white border-info">
      <div class="modal-header">
        <h5 class="modal-title" id="reviewModalLabel">Write a Review</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="review.php" method="POST">
          <div class="mb-3">
            <label for="reviewGame" class="form-label">Game</label>
            <input type="text" class="form-control" id="reviewGame" name="game" readonly>
          </div>
          <div class="mb-3">
            <label for="reviewText" class="form-label">Your Review</label>
            <textarea class="form-control" id="reviewText" name="review" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="reviewName" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="reviewName" name="name" required>
          </div>
          <button type="submit" class="btn btn-warning">Submit Review</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  // Handle game name for download modal (already exists)
  document.querySelectorAll('.downloadBtn').forEach(button => {
    button.addEventListener('click', function () {
      const gameName = this.getAttribute('data-game');
      document.getElementById('selectedGameName').value = gameName;
    });
  });

  // Handle game name for review modal
  document.querySelectorAll('.review-link').forEach(link => {
    link.addEventListener('click', function () {
      const game = this.getAttribute('data-game');
      document.getElementById('reviewGame').value = game;
    });
  });

  // Optional: clear review form when closed
  const reviewModal = document.getElementById('reviewModal');
  reviewModal.addEventListener('hidden.bs.modal', function () {
    reviewModal.querySelector('form').reset();
  });
</script>


</div>

<?php include('footer.php') ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>