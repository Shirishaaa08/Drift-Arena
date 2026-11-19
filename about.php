<?php include('header.php'); 
 
if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: index.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About | DriftArena</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- ✅ Favicon Line Added -->
  <link rel="icon" type="image/png" href="image/rl.png" />

  <style>
    body {
      background: #050510;
      color: white;
      font-family: 'Montserrat', sans-serif;
    }

    /* Particles Layer */
    #particles-js {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
    }

    body > *:not(#particles-js) {
      position: relative;
      z-index: 2;
    }

    .glow-card {
      background: rgba(0, 0, 0, 0.5);
      border: 2px solid #00ffd1;
      border-radius: 20px;
      padding: 30px;
      transition: 0.4s ease;
      box-shadow: 0 0 20px #00ffd1;
    }

    .glow-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 35px #00fff2, 0 0 60px #00fff2;
    }

    .glow-card h4 {
      color: #00fff2;
      text-shadow: 0 0 8px #00fff2;
    }

    .section-title {
      font-size: 3rem;
      color: #00fff2;
      text-shadow: 0 0 10px #00fff2;
    }

    .underline-glow {
      width: 100px;
      height: 4px;
      background: #00fff2;
      margin: 10px auto 30px;
      box-shadow: 0 0 10px #00fff2;
      animation: swipe 2s infinite ease-in-out;
    }

    @keyframes swipe {
      0% { transform: scaleX(0); opacity: 0.2; }
      50% { transform: scaleX(1); opacity: 1; }
      100% { transform: scaleX(0); opacity: 0.2; }
    }

     .special-title {
  font-size: 3rem;
  font-family: 'Orbitron', sans-serif;
  color: #33f0ff; /* Fresh cyan-blue */
  text-shadow: 0 0 10px #33f0ff, 0 0 20px #117d99; /* Soft glow */
  letter-spacing: 2px;
  border-bottom: 2px dashed #33f0ff; /* Your original dashed underline */
  display: inline-block;
  padding-bottom: 5px;
  margin-bottom: 20px;
}

  </style>  
</head>
<body>

<!-- 🌌 Full Page Particles Background -->
<div id="particles-js"></div>

<section class="py-5" id="about">

  <div class="container text-center">
    <h1 class="section-title animate__animated animate__fadeInDown special-title">
    About DriftArena
  </h1>
    <div class="underline-glow"></div>
    <p class="lead text-white-50 animate__animated animate__fadeInUp" style="max-width: 900px; margin: auto;">
      DriftArena isn’t just a game — it’s a full-scale browser-powered universe for adrenaline junkies, competitive racers, and gaming rebels. No downloads. No limits. Just insane speed and pure skill.
    </p>

    <!-- 🔥 Features Grid -->
    <div class="row mt-5 g-4">
      <div class="col-md-6 col-lg-3">
        <div class="glow-card h-100">
          <h4>🎮 Cross-Platform</h4>
          <p>Play from anywhere: Mobile, PC, or tablet — DriftArena doesn’t care where you drift from.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="glow-card h-100">
          <h4>⚙️ Tech First</h4>
          <p>WebGL, WebAssembly & blazing-fast architecture power our high-performance gameplay.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="glow-card h-100">
          <h4>🌐 Global Network</h4>
          <p>Drifters from over 100+ countries unite in our digital colosseum. New rivals every second.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="glow-card h-100">
          <h4>🧠 Fair Play</h4>
          <p>No Pay-to-Win. Every race is decided by skill, reflex, and insane drift precision.</p>
        </div>
      </div>
    </div>

    <!-- 🌐 Mission + Vision Section -->
    <div class="mt-5 text-center">
      <h2 class="section-title">🌐 Our Mission</h2>
      <div class="underline-glow"></div>
      <p class="fs-5 text-light" style="text-shadow: 0 0 10px #00fff2; max-width: 850px; margin: auto;">
        To create a universal racing platform where competition, community, and cutting-edge tech blend into pure browser magic — no downloads, no limits.
      </p>

      <h2 class="section-title mt-5">🚀 Our Vision</h2>
      <div class="underline-glow"></div>
      <p class="fs-5 text-light" style="text-shadow: 0 0 10px #00fff2; max-width: 850px; margin: auto;">
        A future where browser esports rival console gaming — and DriftArena becomes the global hub for adrenaline-fueled, skill-based online racing.
      </p>
    </div>

    <!-- 🌍 Stats Section -->
<div class="row mt-5 g-4">
  <!-- Card 1 -->
  <div class="col-md-4">
    <div class="glow-card">
      <h4>🌎 30M+ Players</h4>
      <p>From Tokyo to Toronto, millions have entered the Arena — will you?</p>
    </div>
  </div>

  <!-- 💾 Download Card in Center -->
  <div class="col-md-4">
    <div class="glow-card text-center">
      <h4>💾 Now Downloadable</h4>
      <p>Get DriftArena for Windows & Android. Experience the thrill, even without a browser!</p>
      <a href="tryanddownload.php" class="btn btn-outline-info mt-2">Download Now</a>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="col-md-4">
    <div class="glow-card">
      <h4>⏱️ 500K Daily Races</h4>
      <p>Real-time races happen every second. No bots. Just brutal speed battles.</p>
    </div>
  </div>
</div>

    

    <!-- 🏁 Milestones That Matter -->
<div class="mt-5">
  <h2 class="section-title text-center"><span class="emoji-hover">🏁</span> Milestones That Matter</h2>
  <div class="underline-glow"></div>

  <div class="row mt-4 g-4">
    <div class="col-md-4">
      <div class="glow-card h-100">
        <h4>🚗 Year 1</h4>
        <p>Launch of DriftArena. Built for speed, scaled for browsers.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="glow-card h-100">
        <h4>📱 Year 2</h4>
        <p>Support for all devices — more racers, more heat, more wins.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="glow-card h-100">
        <h4>🤖 Year 3</h4>
        <p>AI opponents. Global tournaments. Legends born daily.</p>
      </div>
    </div>
  </div>
</div>

<!-- 🏆 Top Champions Section -->
<div class="mt-5 text-center">
  <h2 class="section-title"><span class="emoji-hover">🏆</span> Top Drift Champions</h2>
  <div class="underline-glow"></div>

  <div class="row mt-4 g-4">
    <div class="col-md-4">
      <div class="glow-card h-100">
        <h4><span class="emoji-hover">👑</span> VelocityZ</h4>
        <p>Known for unmatchable drift precision & tactical wins.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="glow-card h-100">
        <h4><span class="emoji-hover">⚡</span> Nova</h4>
        <p>Fastest lap record holder — 0:44 at ThunderTrack.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="glow-card h-100">
        <h4><span class="emoji-hover">🔥</span> GhostX</h4>
        <p>Most wins in ranked arena — 1,209 and still counting.</p>
      </div>
    </div>
  </div>
</div>

    <!-- 👥 Partner Studios -->
    <div class="mt-5 text-center">
      <h2 class="section-title">🤝 Partner Studios</h2>
      <div class="underline-glow"></div>
      <p class="text-white-50 fs-5">We collaborate with indie creators & pro studios globally — creating new tracks, new rivals, new chaos. From Vortex Games to NeonGlide — the Arena grows every day.</p>
    <style>
  .studio-logo {
  width: 100px;
  height: 100px;
  object-fit: cover; /* Changed from contain */
  border-radius: 12px;
  padding: 0; /* Removed padding */
  background-color: #111;
  box-shadow: 0 0 12px #00fff2;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.studio-logo:hover {
  transform: scale(1.1) rotate(2deg);
  box-shadow: 0 0 24px #00fff2, 0 0 40px #00fff2;
}

</style>

<div class="row justify-content-center g-4">
  <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
    <img src="img1/vort.jpeg" alt="Vortex Games" class="studio-logo" />
    <p class="mt-2 text-white-50">Vortex Games</p>
  </div>
  <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
    <img src="img1/neon.jpeg" alt="NeonGlide" class="studio-logo" />
    <p class="mt-2 text-white-50">NeonGlide</p>
  </div>
  <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
    <img src="img1/plixer.jpeg" alt="PixelForge" class="studio-logo" />
    <p class="mt-2 text-white-50">Plixer</p>
  </div>
  <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
    <img src="img1/dr.jpeg" alt="DriftLogic" class="studio-logo" />
    <p class="mt-2 text-white-50">DriftLogic</p>
  </div>

    </div>

    <!-- 👨‍💻 Meet Our Dev Team -->
<h2 class="section-title mt-5">👨‍💻 Meet Our Dev Team</h2>
<div class="underline-glow"></div>
<p class="text-white-50 fs-5 mb-4">The minds behind DriftArena’s chaos — creativity meets code.</p>

<div class="row justify-content-center g-4">
  <div class="col-md-3">
    <div class="glow-card text-center p-3">
      <img src="img1/pratik.jpeg" class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover; border: 2px solid #00fff2;" />
      <h5 class="text-info">🔥 Pratik</h5>
      <p class="text-white-50 mb-0">Lead Game Developer</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="glow-card text-center p-3">
      <img src="img1/an.jpeg" class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover; border: 2px solid #00fff2;" />
      <h5 class="text-info">🎨 Anaya</h5>
      <p class="text-white-50 mb-0">UI/UX Artist</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="glow-card text-center p-3">
      <img src="img1/ray.jpeg" class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover; border: 2px solid #00fff2;" />
      <h5 class="text-info">🧠 Ray</h5>
      <p class="text-white-50 mb-0">AI + Physics Engine</p>
    </div>
  </div>
</div>



    <!-- 🚀 Join the Race CTA -->
    <div class="mt-5">
      <h2 class="section-title">🔥 Join the Race</h2>
      <div class="underline-glow"></div>
      <p class="lead">No limits. No waiting. Just the roar of engines and the scent of burning tires. Drift. Win. Repeat.</p>
      <a href="trending.php" class="btn btn-lg btn-info text-dark fw-bold mt-3">Enter the Arena 🚗💨</a>
    </div>
  </div>
</section>

<!-- 🌌 Particles.js Script -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
particlesJS("particles-js", {
  "particles": {
    "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
    "color": { "value": "#00fff2" },
    "shape": { "type": "circle" },
    "opacity": { "value": 0.3, "random": true },
    "size": { "value": 3, "random": true },
    "line_linked": {
      "enable": true,
      "distance": 130,
      "color": "#00fff2",
      "opacity": 0.3,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1.2,
      "direction": "none",
      "out_mode": "bounce"
    }
  },
  "interactivity": {
    "events": {
      "onhover": { "enable": true, "mode": "repulse" },
      "onclick": { "enable": true, "mode": "push" }
    },
    "modes": {
      "repulse": { "distance": 100 },
      "push": { "particles_nb": 4 }
    }
  },
  "retina_detect": true
});
</script>


<?php include('footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>