<?php 
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
  <title>DriftArena</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
 <link href="https://fonts.googleapis.com/css2?family=Audiowide=swap" rel="stylesheet">
 <!-- ✅ Favicon Line Added -->
  <link rel="icon" type="image/png" href="image/rl.png" />




<style>
  /* Neon Gaming Navbar */
.neon-navbar {
  background: linear-gradient(90deg, #050d1f, #0a1930, #1c1c3c);
  border-bottom: 2px solid #00ffd1;
  box-shadow: 0 0 15px #00ffd1;
  padding: 10px 20px;
  font-family: 'Audiowide', sans-serif;
  z-index: 1000;
}

/* Brand Name */
.navbar-brand {
  font-size: 2rem;
  font-weight: bold;
  letter-spacing: 2px;
  color: #00ffd1 !important;
  text-shadow: 0 0 12px #00ffd1, 0 0 22px #00fff7;
}

/* Nav Links */
.navbar-nav .nav-link {
  font-size: 1rem;
  padding: 8px 14px;
  color: #ffffffcc;
  transition: all 0.3s ease;
  letter-spacing: 1px;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
  color: #00ffd1 !important;
  text-shadow: 0 0 10px #00ffd1;
  transform: scale(1.08);
}

/* Toggle Button */
.navbar-toggler {
  background-color: #00ffd1;
  border-radius: 6px;
}
.navbar-toggler-icon {
  filter: invert(100%);
}

/* Search Input */
.search-glow {
  background-color: #0d0d0d;
  border: 1px solid #00ffd1;
  color: #00ffd1;
  border-radius: 8px;
  box-shadow: 0 0 10px #00ffd1;
  font-size: 0.95rem;
}
.search-glow::placeholder {
  color: #88ffff;
  font-style: italic;
}

/* Gradient Text Class (if needed) */
.gradient-text {
  background: linear-gradient(270deg, #00f0ff, #ff00ff, #00ff99);
  background-size: 600% 600%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: gradientMove 6s ease infinite;
  text-shadow: 0 0 8px #00fff2;
}

@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

    .carousel-caption {
      background: rgba(77, 255, 0, 0.1);
      padding: 6px 18px;
      border-radius: 50px;
      border: 1px solid #00ffd1;
      left: 50%;
      transform: translateX(-50%);
      bottom: 40px;
    }
    .carousel-caption h5 {
      color: transparent;
      font-family: 'Sarpanch', sans-serif;
      font-size: 1.6rem;
      text-shadow: 0 0 12px #00ffd1;
    }
    .carousel-inner img {
      height: 450px;
      object-fit: cover;
      border-radius: 20px;
    }
    .carousel {
      margin-top: 30px;
      box-shadow: 0 0 25px rgba(0, 255, 209, 0.4);
      border-radius: 20px;
      overflow: hidden;
      width: 90%;
      margin-left: auto;
      margin-right: auto;
    }
    .tab-content {
      padding: 2rem;
    }



 @keyframes pulseGlow {
  0%, 100% {
    box-shadow: 0 0 15px 5px rgba(155, 89, 182, 0.5);
  }
  50% {
    box-shadow: 0 0 30px 15px rgba(155, 89, 182, 0.7);
  }
}
    @keyframes rotate360 {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}


    .about-box {
      background-color: transparent;
      border: 2px solid rgb(0, 238, 255);
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 0 25px rgba(0, 255, 209, 0.2), 0 0 40px rgba(0, 255, 209, 0.1) inset;
      transition: all 0.3s ease-in-out;
    }
    .about-box h5 {
      color: #00ffd1;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    .about-box:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px rgba(0, 255, 209, 0.6), 0 0 50px rgba(0, 255, 209, 0.3) inset;
    }
    

    .quick-box {
  background: linear-gradient(145deg, transparent, transparent);
  border: 2px solid #00ffd1;
  border-radius: 20px;
  padding: 25px;
  transition: all 0.4s ease;
  animation: floatPulse 4s ease-in-out infinite;
  box-shadow: 0 0 20px rgba(0, 255, 209, 0.2), 0 0 35px rgba(0, 255, 209, 0.1) inset;
  cursor: pointer;
  backdrop-filter: blur(6px);
  position: relative;
  overflow: hidden;
}

.quick-box::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: conic-gradient(from 90deg at 50% 50%,rgb(0, 242, 255), transparent,rgb(187, 0, 255), transparent,rgb(204, 255, 0));
  animation: rotate360 5s linear infinite;
  opacity: 0.15;
}

.quick-box:hover {
  transform: scale(1.08);
  background: linear-gradient(145deg,rgb(12, 96, 240) 10%,rgb(255, 0, 234) 90%);
  color: transparent;
  box-shadow: 0 0 35px #00ffd1, 0 0 50px rgba(0, 183, 255, 0.4) inset;
}

.quick-box h5 {
  font-family: 'Orbitron', sans-serif;
  font-size: 1.05rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #ffffff;
  text-shadow: 0 0 6px #00ffd1;
  z-index: 2;
  position: relative;
}

@keyframes floatPulse {
  0% {
    transform: translateY(0px);
    box-shadow: 0 0 10px #00ffd1;
  }
  50% {
    transform: translateY(-8px);
    box-shadow: 0 0 20px #00ffd1, 0 0 40px #00ffd1 inset;
  }
  100% {
    transform: translateY(0px);
    box-shadow: 0 0 10px #00ffd1;
  }
}

.quick-box {
  animation: floatPulse 4s ease-in-out infinite;
}
.glitch-box {
  position: relative;
  border: 4px solid transparent;
  border-image: linear-gradient(145deg, #00ffd1, #0077ff, #9b59b6) 1;
  border-radius: 26px;
  box-shadow: 0 0 45px rgba(0,255,209,0.6), 0 0 100px rgba(0,255,209,0.18) inset;
  background: 
    linear-gradient(120deg, transparent , transparent),
    linear-gradient(135deg, rgba(0,255,209,0.08) 0%, rgba(255,0,234,0.10) 100%);
  background-blend-mode: overlay;
  backdrop-filter: blur(8px) saturate(140%);
  padding: 50px 30px 40px 30px;
  overflow: hidden;
  transition: transform 0.35s cubic-bezier(.4,2,.5,.8), box-shadow 0.35s;
  animation: glitchAnim 2s infinite;
}
.glitch-box:hover {
  transform: scale(1.04) rotate(-1deg);
  box-shadow: 0 0 60px #00ffd1, 0 0 120px #ff5edf inset;
}

.glitch-box {
  /* ...existing styles... */
  box-shadow: 0 0 30px #00ffd1, 0 0 60px #ff00ea;
  animation: neon-glow 1.2s alternate infinite;
}

@keyframes neon-glow {
  0% {
    box-shadow: 0 0 30px #00ffd1, 0 0 60px #ff00ea;
    border-color: #00ffd1;
  }
  100% {
    box-shadow: 0 0 60px #ff00ea, 0 0 120px #00ffd1;
    border-color: #ff00ea;
  }
} 


  section video {
    filter: brightness(0.4);
  }




  .bg-glass {
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 10px rgba(0,255,209,0.4);
  }


  .welcome-heading {
    font-family: 'Orbitron', sans-serif;
    font-size: 3rem;
    background: linear-gradient(90deg, #00ffd1, #aaff00, #ff00ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 0 10px rgba(0,255,209,0.5);
    animation: neon-glow 2s infinite alternate;
    letter-spacing: 2px;
    margin-bottom: 30px;
  }

  @keyframes neon-glow {
    0% {
      text-shadow: 0 0 10px #00ffd1, 0 0 20px #00ffd1;
    }
    100% {
      text-shadow: 0 0 20px #aaff00, 0 0 40px #aaff00;
    }
  }



  .glow-cyan-text {
  font-family: 'Orbitron', sans-serif;
  font-size: 1.2rem;
  color: #00fff7;
  text-align: center;
  text-shadow: 0 0 5px #00fff7, 0 0 10px #00fff7, 0 0 20px #00fff7;
  animation: glowCyan 1.8s ease-in-out infinite alternate;
  margin-top: 10px;
  margin-bottom: 30px;
}

@keyframes glowCyan {
  from {
    text-shadow: 0 0 5px #00fff7, 0 0 10px #00fff7, 0 0 20px #00fff7;
  }
  to {
    text-shadow: 0 0 10px #00fff7, 0 0 20px #00fff7, 0 0 30px #00fff7;
  }
}



@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;600&display=swap');

.rajdhani-font {
  font-family: 'Rajdhani', sans-serif;
}


.glow-ticker {
  background: transparent;
  border: 2px solid #00ffd1;
  border-radius: 12px;
  box-shadow: 0 0 20px #00ffd1;
  color: #00ffd1;
  font-family: 'Orbitron', sans-serif;
  font-size: 1.1rem;
  padding: 10px 20px;
  overflow: hidden;
}
.glow-ticker marquee {
  text-shadow: 0 0 10px #00ffd1;
}

@keyframes arrowPulse {
  from { transform: scale(1); opacity: 0.7; }
  to { transform: scale(1.2); opacity: 1; }
} 





  .hover-shadow:hover {
    box-shadow: 0 0 15px #0ff, 0 0 25px #0ff inset;
  }
  .text-glow {
    text-shadow: 0 0 12px #00ffd1;
  }
  .animated {
    animation-duration: 1s;
    animation-fill-mode: both;
  }
  .fadeInUp {
    animation-name: fadeInUp;
  }
  .zoomIn {
    animation-name: zoomIn;
  }
  .pulse {
    animation-name: pulse;
    animation-iteration-count: infinite;
    animation-duration: 2s;
  }
  @keyframes fadeInUp {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1; transform: translateY(0);}
  }
  @keyframes zoomIn {
    from {opacity: 0; transform: scale(0.9);}
    to {opacity: 1; transform: scale(1);}
  }
  @keyframes pulse {
    0% {box-shadow: 0 0 0 0 rgba(0,255,255,0.7);}
    70% {box-shadow: 0 0 0 10px rgba(0,255,255, 0);}
    100% {box-shadow: 0 0 0 0 rgba(0,255,255, 0);}
  }

 
  html, body {
    height: 100%;
  }

  .modal-content, .modal-body, iframe {
    height: 100%;
  }

  iframe {
    width: 100%;
    border: none;
  }

  .downloading::after {
    content: " ⏬ Downloading...";
    margin-left: 8px;
    color: #0dcaf0;
    font-weight: bold;
    animation: blink 1s step-end infinite;
  }

  @keyframes blink {
    50% { opacity: 0; }
  }

 
  /* Card Hover Animation */
  .card:hover {
    transform: scale(1.03);
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  /* Smooth button hover animation */
  .card .btn {
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  .card .btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
  }

  /* Optional: glow border on focus */
  .card:focus-within {
    outline: 2px solid #00f7ff;
    outline-offset: 4px;
  }


.section-title {
  font-size: 2.8rem;
  font-weight: 700;
  color: #00f7ff;
  text-shadow: 0 0 10px #00f7ff, 0 0 20px #00f7ff;
  animation: pulse-glow 2s infinite ease-in-out;
  font-family: 'Orbitron', sans-serif; /* Optional futuristic font */
}

.section-title .icon {
  font-size: 2.5rem;
  margin-right: 10px;
}

.section-title .highlight {
  color: #ff00cc;
  text-shadow: 0 0 10px #ff00cc;
}

@keyframes pulse-glow {
  0%, 100% {
    text-shadow: 0 0 10px #00f7ff, 0 0 20px #00f7ff;
  }
  50% {
    text-shadow: 0 0 20px #00f7ff, 0 0 30px #00f7ff;
  }
}
html, body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
} 
.video-bg-wrapper {
  position: relative;
  width: 100vw;              /* Ensures it spans full screen width */
  min-height: 100vh;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

/* Fullscreen background video */
.bg-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;              /* Changed from min-width */
  height: 100vh;             /* Changed from min-height */
  object-fit: cover;
  z-index: 0;
  margin: 0;
  padding: 0;
}

/* Optional transparent overlay (you can add rgba if needed) */
.video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: transparent;   /* Optional: rgba(0,0,0,0.4) if needed */
  z-index: 1;
  margin: 0;
  padding: 0;
}

.content-overlay {
  position: relative;
  z-index: 2; /* This ensures all content stays above video + overlay */
}

.download-btn-glow {
  background: linear-gradient(135deg, transparent, #928dab);
  color: #fff;
  font-weight: bold;
  font-size: 1rem;
  padding: 10px 18px;
  border: none;
  border-radius: 50px;
  text-transform: uppercase;
  letter-spacing: 1px;
  position: relative;
  transition: all 0.4s ease;
  box-shadow: 0 0 10px #00ffffa8, 0 0 25px #00ffff33;
  display: flex;
  align-items: center;
  justify-content: center;
}

.download-btn-glow:hover {
  background: linear-gradient(135deg, #928dab, transparent);
  color: #00f7ff;
  box-shadow: 0 0 18px #00f7ff, 0 0 35px #00f7ff80;
  transform: translateY(-2px) scale(1.03);
}

.download-btn-glow .glow-icon {
  margin-right: 8px;
  animation: pulse-glow 1.5s infinite ease-in-out;
}

@keyframes pulse-glow {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.7; transform: scale(1.2); }
}

.badge-new {
  position: absolute;
  top: -8px;
  right: -8px;
  background: #ff2d75;
  font-size: 0.7rem;
  padding: 4px 6px;
  border-radius: 10px;
  font-weight: 600;
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
  background-color: transparent;
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



/* about us */
 body {
      background: linear-gradient(to right, transparent, transparent);
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    h2.section-title {
      font-weight: bold;
      text-shadow: 2px 2px 5px #000;
    }
    .section-padding {
      padding: 80px 0;
    }
    .highlight-box {
      background: rgba(255, 255, 255, 0.05);
      border-left: 5px solid #dc3545;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(220, 53, 69, 0.3);
    }



     <style>
    body {
      background: #0d0d0d;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }
    .section-title {
      font-weight: bold;
      text-shadow: 2px 2px 5px #000;
    }
    .gallery-img {
      overflow: hidden;
      border-radius: 12px;
      transition: transform 0.4s ease;
      cursor: pointer;
    }
    .gallery-img img {
      width: 100%;
      height: auto;
      border-radius: 12px;
      transition: transform 0.4s ease;
    }
    .gallery-img:hover img {
      transform: scale(1.05);
    }
    .filter-nav .nav-link {
      color: #fff;
      background-color: transparent;
      border-radius: 30px;
      margin: 5px;
    }
    .filter-nav .nav-link.active {
      background-color: #dc3545;
    }

</style>

</head>
<body>

<?php include('header.php') ?>


<body id="body" style="overflow: hidden; font-family: 'Oxanium', sans-serif; background-color: #000;">

<!-- 🔐 LOGIN SECTION -->
<section id="loginSection" class="vh-100 vw-100 d-flex justify-content-center align-items-center position-fixed top-0 start-0"
  style="z-index: 9999; background: rgba(0, 0, 0, 0.95);">

  <div class="text-center shadow-lg p-5 rounded" style="background: #111; border: 2px solid #00ffd1; max-width: 400px; width: 90%;">
    
    <!-- 👆 Initial Click Box -->
    <div id="loginPrompt" style="cursor: pointer;">
      <img src="image/rl.png" alt="avatar" class="rounded-circle mb-3" style="width: 90px;">
      <h3 class="text-white">🚀 <span style="color: #00ffd1;">Click to Login</span></h3>
    </div>

    <!-- 🧾 Actual Login Form -->
    <form id="loginForm" method="post" action="login.php" autocomplete="off" style="display: none; animation: fadeIn 0.4s ease;">
      <div class="mb-3">
        <input type="text" class="form-control bg-dark text-white border-neon" name="name" placeholder="👤 your name" required autocomplete="on">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control bg-dark text-white border-neon" name="email" placeholder="📧 your email" required autocomplete="on">
      </div>
      <div class="mb-4">
        <input type="password" maxlength="4" pattern="\d{4}" title="Enter 4 digit code" class="form-control bg-dark text-white border-neon text-center" name="pin" placeholder="🔐 4_digit Drift Code" required autocomplete="new-password">
      </div>

      <!-- 🚪 Login Button -->
      <button type="submit" class="btn btn-info w-100 fw-bold text-dark mb-3">
        Login & Enter Arena 🚨
      </button>

      <!-- 🔐 Admin Button -->
      <a href="admin.php" class="btn btn-glow w-100 fw-bold text-uppercase">
        🛡️ Admin Control Room
      </a>
    </form>

  </div>
</section>

<!-- 🌐 Main Site (Hidden before login) -->
<div id="siteContent" style="display: none;">
  <!-- Navbar, slider, categories, etc. -->
</div>

<!-- 🌈 Styling -->
<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .border-neon {
    border: 2px solid #00ffd1 !important;
    box-shadow: 0 0 10px #00ffd1;
  }

  .btn-glow {
    background: transparent;
    border: 2px solid #00ffd1;
    color: #00ffd1;
    text-shadow: 0 0 6px #00ffd1;
    box-shadow: 0 0 10px #00ffd1;
    transition: all 0.3s ease;
  }

  .btn-glow:hover {
    background: #00ffd1;
    color: #000;
    text-shadow: none;
    box-shadow: 0 0 20px #00ffd1, 0 0 40px #00ffd1;
  }
</style>

<!-- 🔁 JS Logic -->
<script>
  console.log("🔥 JS loaded");
  document.body.style.overflow = "hidden"; // Lock scroll before login

  // Show form when user clicks login box
  document.getElementById("loginPrompt").addEventListener("click", function () {
    this.style.display = "none";
    document.getElementById("loginForm").style.display = "block";
  });

  // Login Form Submission
  document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.querySelector('[name="name"]').value.trim();
    const email = document.querySelector('[name="email"]').value.trim();
    const pin = document.querySelector('[name="pin"]').value.replace(/\D/g, '');

    if (!name || !email || !pin) {
      alert("All fields are required!");
      return;
    }

    const formData = new FormData();
    formData.append("name", name);
    formData.append("email", email);
    formData.append("pin", pin);

    const btn = this.querySelector('button');
    btn.disabled = true;
    btn.textContent = "Logging in... 🚀";

    fetch("login.php", {
      method: "POST",
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      btn.disabled = false;
      btn.textContent = "Login & Enter Arena 🚨";

      if (data.trim() === "success") {
        document.getElementById("loginSection").style.display = "none";
        document.getElementById("loginSection").classList.add("d-none");

        document.getElementById("siteContent").style.display = "block";
        document.getElementById("siteContent").classList.remove("d-none");

        document.body.style.overflow = "auto";

        document.getElementById("slider")?.scrollIntoView({ behavior: "smooth" });
      } else {
        alert("❌ Login failed: " + data);
      }
    })
    .catch(err => {
      btn.disabled = false;
      btn.textContent = "Login & Enter Arena 🚨";
      alert("⚠ Error during login: " + err);
    });
  });
</script>



<!-- ✨ CSS Styles -->
<style>
  /* 🟦 Glowing Avatar Animation */
  .glow-avatar {
    border-radius: 50%;
    padding: 5px;
    width: max-content;
    animation: avatarGlow 2s infinite ease-in-out;
    background: linear-gradient(45deg, #00ffd1, #007bff);
  }

  @keyframes avatarGlow {
    0%, 100% { box-shadow: 0 0 10px #00ffd1; }
    50% { box-shadow: 0 0 25px #00ffd1; }
  }

  .border-neon {
    border: 2px solid #00ffd1;
    box-shadow: 0 0 10px #00ffd1;
  }

  .border-neon::placeholder {
    color: #aaffff;
    opacity: 0.6;
  }

  .border-neon:focus {
    outline: none;
    box-shadow: 0 0 15px #00ffd1;
    background-color: transparent;
  }

  .login-btn {
    background: linear-gradient(135deg, #00ffd1, #007bff);
    color: transparent;
    font-weight: bold;
    border-radius: 50px;
    border: none;
    box-shadow: 0 0 15px #00ffd1;
    transition: all 0.3s ease;
  }

  .login-btn:hover {
    transform: scale(1.03);
    box-shadow: 0 0 25px #00ffd1;
    background: linear-gradient(135deg, #00ffd1, #00bbff);
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
  }

  .animate-fade {
    animation: fadeIn 1.5s ease;
  }

  /* 🌌 Floating Particle Background */
  .bg-animated {
    position: absolute;
    top: 0; left: 0;
    height: 100%;
    width: 100%;
    background: radial-gradient(circle at 20% 30%, #00ffd133 1px, transparent 0),
                radial-gradient(circle at 80% 60%, #00ffd133 1px, transparent 0),
                radial-gradient(circle at 50% 90%, #00ffd133 1px, transparent 0);
    background-size: 20px 20px;
    animation: floatBG 10s linear infinite;
    z-index: 1;
  }

  @keyframes floatBG {
    0% { background-position: 0 0; }
    100% { background-position: 100px 100px; }
  }
</style>

<style>
    /* Reset default spacing and handle overflow */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      width: 100%;
      height: 100%;
      overflow-x: hidden;
      font-family: 'Orbitron', sans-serif;
      background-color: #000;
    }

    /* Hero Section */
    .hero-section {
      position: relative;
      width: 100vw;
      height: 100vh;
      overflow: hidden;
      color: #fff;
    }

    .hero-bg-video {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .hero-overlay {
      position: relative;
      z-index: 1;
      padding: 2rem;
      text-shadow: 0 0 10px rgba(0, 255, 255, 0.4);
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: bold;
    }

    .neon-gradient {
      color: #00fff2;
      text-shadow: 0 0 20px #0ff, 0 0 40px #0ff;
    }

    .hero-subtitle {
      font-size: 1.2rem;
      line-height: 1.6;
    }

    .glow-btn {
      display: inline-block;
      background: #00ffd5;
      padding: 0.8rem 2rem;
      border-radius: 50px;
      color: #000;
      font-weight: bold;
      font-size: 1.1rem;
      text-decoration: none;
      box-shadow: 0 0 15px #00fff2, 0 0 25px #00ffd5;
      transition: 0.3s;
    }

    .glow-btn:hover {
      background: #0ff;
      color: #000;
      box-shadow: 0 0 25px #0ff, 0 0 45px #0ff;
    }

    .floating-tags {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .tag-glow {
      background: rgba(0, 255, 255, 0.1);
      border: 1px solid #00ffd5;
      color: #00ffd5;
      padding: 0.5rem 1rem;
      border-radius: 30px;
      font-size: 0.9rem;
      box-shadow: 0 0 10px #00fff2;
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }

      .hero-subtitle {
        font-size: 1rem;
      }
    }
  </style>

<!-- Hero Section -->
  <section class="hero-section d-flex justify-content-center align-items-center text-center">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="hero-bg-video">
      <source src="image/bg.mp4" type="video/mp4" />
      <!-- fallback image -->
      Your browser does not support the video tag.
    </video>

    <!-- Overlay Content -->
    <div class="hero-overlay">
      <h1 class="hero-title">
        Enter the <span class="neon-gradient">DriftArena</span>
      </h1>
      <p class="hero-subtitle mt-3">
        Unleash your <span class="text-warning">Speed</span>, master the
        <span class="text-danger">Power</span>, and dominate the
        <span class="text-success">Arena</span>.<br>
        Explore next-gen racing, survival, and action games all in one place!
      </p>
      <a href="#neonSlider" class="glow-btn mt-4">
        🚗 Explore Now!
      </a>

      <div class="floating-tags mt-5">
        <span class="tag-glow">#Trending</span>
        <span class="tag-glow">#Multiplayer</span>
        <span class="tag-glow">#BattleZone</span>
      </div>
    </div>
  </section>

</div>

<!-- 🔥 Styles -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap');

  .hero-text {
    font-family: 'Orbitron', sans-serif;
    font-size: 3.5rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 1.2;
  }

  .text-glow {
    display: inline-block;
    color: #00fff7;
    padding: 8px 20px;
    border-radius: 12px;
    border: 2px solid #00fff7;
    background: transparent;
    text-shadow: 0 0 15px #00fff7, 0 0 25px #00fff7;
    animation: glowLoop 3s ease-in-out infinite alternate;
  }

  .fancy-btn {
    background: transparent;
    color: #00fff7;
    border: 2px solid #00fff7;
    font-weight: bold;
    text-transform: uppercase;
    box-shadow: 0 0 15px #00fff7;
    transition: all 0.3s ease;
    backdrop-filter: blur(5px);
  }

  .fancy-btn:hover {
    background-color: #00fff7;
    color: transparent;
    transform: scale(1.08);
    box-shadow: 0 0 30px #00fff7;
  }

  /* Animations */
  .animate-fade-up {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 1.2s ease-out 0.3s forwards;
  }

  .animate-fade-in {
    opacity: 0;
    animation: fadeIn 1.4s ease-in 0.8s forwards;
  }

  @keyframes fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
    }
  }

  @keyframes glowLoop {
    0% {
      box-shadow: 0 0 10px #00fff7;
    }
    100% {
      box-shadow: 0 0 35px #00fff7;
    }
  }
</style>
<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });
</script>



<!-- ___________________________________________________________________________________________________________________________________________________________ -->
 


<!-- 🌌 Trending Games Section -->
<section class="py-5 position-relative" style="font-family: 'Orbitron', sans-serif; background: none !important; overflow: hidden;">


  <!-- 🌟 Heading -->
  <div class="text-center mb-5">
    <h2 class="text-white fw-bold display-5 glowing-title">
      🚀 Trending Games Arena
    </h2>
    <div class="glow-underline mx-auto mt-2"></div>
  </div>

  <!-- 🎮 Glowing Carousel -->
  <div id="neonSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
   <div class="carousel-inner">


      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="card neon-card bg-blur-glass border border-info text-white mx-auto">
          <img src="image/driftx.jpg" class="card-img" alt="Drift X">
          <div class="card-img-overlay d-flex flex-column justify-content-end text-start p-4">
            <h4 class="fw-bold text-info mb-1">🔥 Drift X: Turbo Legends</h4>
            <p class="small text-light mb-3">Dominate neon roads with turbo speed.</p>
            <a href="#tryanddownload" class="btn btn-neon">Explore</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="card neon-card bg-blur-glass border border-danger text-white mx-auto">
          <img src="image/cu.jpg" class="card-img" alt="Skyfall Battlegrounds">
          <div class="card-img-overlay d-flex flex-column justify-content-end text-start p-4">
            <h4 class="fw-bold text-danger mb-1">🎯 Skyfall Battlegrounds</h4>
            <p class="small text-light mb-3">Drop, loot, and conquer the skies!</p>
            <a href="#tryanddownload" class="btn btn-neon">Explore</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="card neon-card bg-blur-glass border border-success text-white mx-auto">
          <img src="image/kl.jpg" class="card-img" alt="Echo Vanguard">
          <div class="card-img-overlay d-flex flex-column justify-content-end text-start p-4">
            <h4 class="fw-bold text-success mb-1">🤖 Echo Vanguard</h4>
            <p class="small text-light mb-3">Futuristic AI warfare begins now.</p>
            <a href="#tryanddownload" class="btn btn-neon">Explore</a>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="card neon-card bg-blur-glass border border-warning text-white mx-auto">
          <img src="image/minecraft.jpg" class="card-img" alt="MineVerse">
          <div class="card-img-overlay d-flex flex-column justify-content-end text-start p-4">
            <h4 class="fw-bold text-warning mb-1">⛏ MineVerse: Minecraft Edition</h4>
            <p class="small text-light mb-3">Craft, explore, and build legends.</p>
            <a href="#tryanddownload" class="btn btn-neon">Explore</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#neonSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-arrow rounded-circle p-3" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#neonSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-arrow rounded-circle p-3" aria-hidden="true"></span>
    </button>
  </div>

</section>

<!-- 🌈 Neon Styles -->
<style>
.glowing-title {
  color: #00ffe1;
  text-shadow: 0 0 10px #00ffe1, 0 0 25px #00ffe1;
}

.glow-underline {
  width: 100px;
  height: 4px;
  background: #00ffe1;
  border-radius: 5px;
  box-shadow: 0 0 15px #00ffe1;
}

.neon-card {
  width: 100%;
  height: 440px;
  overflow: hidden;
  border-radius: 25px;
  box-shadow: 0 0 25px rgba(0, 255, 255, 0.3);
  transition: transform 0.4s ease;
}

.neon-card:hover {
  transform: scale(1.02);
  box-shadow: 0 0 40px rgba(0, 255, 255, 0.6);
}

.bg-blur-glass {
  background: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(6px);
}

.btn-neon {
  border: 2px solid #00ffe1;
  color: #00ffe1;
  padding: 8px 25px;
  border-radius: 30px;
  font-weight: bold;
  background: transparent;
  transition: 0.3s ease;
  text-transform: uppercase;
  font-size: 0.9rem;
  box-shadow: 0 0 10px #00ffe1;
}
.btn-neon:hover {
  background: #00ffe1;
  color: black;
  box-shadow: 0 0 25px #00ffe1, 0 0 40px #00ffe1;
  transform: scale(1.05);
}

.carousel-control-prev,
.carousel-control-next {
  width: 5%;
  z-index: 10;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-size: 100% 100%;
  filter: drop-shadow(0 0 10px #00ffe1);
  width: 40px;
  height: 40px;
}
.carousel-control-prev,
.carousel-control-next {
  top: 50%;
  transform: translateY(-50%);
}

.bg-arrow {
  background-color: rgba(0, 255, 255, 0.1);
  backdrop-filter: blur(4px);
  box-shadow: 0 0 12px #00ffe1;
}
</style>
<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: "smooth",
          block: "start"
        });
      }
    });
  });
</script>




<!-- 🧠 Include in <head> -->
<link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

<style>
@keyframes scrollLeft {
  0% { transform: translateX(100%); }
  100% { transform: translateX(-100%); }
}

@keyframes glowLineAnim {
  0%, 100% { opacity: 0.2; }
  50% { opacity: 1; }
}

@keyframes shimmerBtn {
  0% { background-position: -200%; }
  100% { background-position: 200%; }
}

@keyframes ringBell {
  0% { transform: rotate(0deg); }
  15% { transform: rotate(15deg); }
  30% { transform: rotate(-15deg); }
  45% { transform: rotate(10deg); }
  60% { transform: rotate(-10deg); }
  75% { transform: rotate(5deg); }
  100% { transform: rotate(0deg); }
}

/* 🟦 Tournament Box */
.tournament-box {
  background: radial-gradient(circle at center, rgba(0, 140, 255, 0.08), transparent);
  border: 2px solid #00dcff;
  border-radius: 20px;
 box-shadow: 0 0 30px rgba(0, 220, 255, 0.4), 0 0 60px rgba(0, 220, 255, 0.2) inset;
  backdrop-filter: blur(14px);
  padding: 30px;
  color: #ffffff;
  font-family: 'Bungee', sans-serif;
  position: relative;
  overflow: hidden;
  max-width: 1000px;
  margin: 50px auto;
  transition: 0.4s ease;
}

.tournament-box:hover {
  transform: scale(1.01);
  box-shadow: 0 0 50px rgba(0,255,209,0.6);
}

/* 🎨 Tournament Heading */
.tournament-heading {
  font-size: 2.6rem;
  font-family: 'Audiowide', cursive;
  font-weight: 900;
  letter-spacing: 2px;
  text-transform: uppercase;
  margin-bottom: 20px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  text-align: center;
}

/* 🔔 Bell icon styled independently */
.bell-icon {
  font-size: 2.4rem;
  animation: ringBell 2s infinite ease-in-out;
  color: #00ffd1;
  text-shadow: 0 0 6px #00ffd1;
}

/* 💎 Gradient on Text */
.heading-text {
  background: linear-gradient(90deg, #00eaff, #aaffee);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}



/* 🔘 Button */
.tournament-btn {
  margin-top: 18px;
  padding: 10px 25px;
  border: 2px solid #00ffd1;
  color: #00ffd1;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  background: linear-gradient(120deg, transparent, #00ffd1, transparent);
  background-size: 300%;
  animation: shimmerBtn 3s linear infinite;
  border-radius: 50px;
  transition: 0.3s ease;
}

.tournament-btn:hover {
  transform: scale(1.05);
  background-color: #00ffd1;
  color: transparent;
  box-shadow: 0 0 20px #00ffd1;
}

/* 📢 Ticker */
.ticker-container-inner {
  margin-top: 25px;
  display: none;
  position: relative;
  border: 1px solid #00ffd1;
  border-radius: 12px;
  padding: 20px 25px;
  background: rgba(0, 255, 209, 0.08);
  box-shadow: 0 0 12px rgba(0,255,209,0.25), inset 0 0 15px rgba(0,255,209,0.15);
}

.ticker-text {
  white-space: nowrap;
  display: inline-block;
  animation: scrollLeft 20s linear infinite;
  font-size: 1.2rem;
  font-weight: 700;
  color: #00ffd1;
  text-shadow: 0 0 5px #00ffd1, 0 0 10px #00ffd1;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.ticker-text strong {
  color: #aaff00;
  text-shadow: 0 0 5px #aaff00;
}

.glow-line-top,
.glow-line-bottom {
  position: absolute;
  height: 2px;
  width: 100%;
  background: linear-gradient(90deg, transparent, #00ffd1, transparent);
  box-shadow: 0 0 12px #00ffd1;
  animation: glowLineAnim 3s infinite ease-in-out;
}
.glow-line-top { top: 0; }
.glow-line-bottom { bottom: 0; }

.close-ticker-btn {
  position: absolute;
  top: 8px;
  right: 12px;
  background: transparent;
  border: none;
  font-size: 1.4rem;
  color: #00ffd1;
  text-shadow: 0 0 6px #00ffd1;
  cursor: pointer;
}
.close-ticker-btn:hover {
  color: #aaff00;
  text-shadow: 0 0 12px #aaff00;
}

.underline-glow {
  width: 100px;
  height: 4px;
  background: linear-gradient(90deg, #00eaff, #aaffee);
  margin: 10px auto 25px;
  border-radius: 50px;
  animation: glowLineAnim 4s infinite ease-in-out;
}

</style>

<div id="arenaSections">
  <!-- ✅ HTML Body -->
<div class="tournament-box text-center">
  <h2 class="tournament-heading">
    <span class="bell-icon">🔔</span>
    <span class="heading-text">Upcoming Tournament</span>
  </h2>
  <div class="underline-glow"></div>


  <button id="showTicker" class="btn tournament-btn" onclick="toggleTicker(true)">
    Click for More Info
  </button>

  <div id="tournamentTicker" class="ticker-container-inner mt-3">
    <button class="close-ticker-btn" onclick="toggleTicker(false)">×</button>
    
    <div class="glow-line-top"></div>
    <div class="ticker-text">
      🚨 <strong>July 5:</strong> DriftArena Tournament Starts • 🏆 ₹50,000 Grand Prize • 🕹 Register Now • 👑 Top 100 Players Get VIP Access • 🎮 New Game Modes Weekly! 🚨
    </div>
    <div class="glow-line-bottom"></div>
  </div>
</div>

<script>
  function toggleTicker(show) {
    const ticker = document.getElementById('tournamentTicker');
    const showBtn = document.getElementById('showTicker');
    ticker.style.display = show ? 'block' : 'none';
    showBtn.style.display = show ? 'none' : 'inline-block';
  }
</script>


<!-- ticker close -->


<!-- _____________________________________________________________________________________________________________________________________________________________ -->



<!-- 🔹 What We Offer Section -->
<section class="py-5 text-white position-relative" style="font-family: 'Orbitron', sans-serif;">
  <div class="container text-center">

    <!-- ✅ Glowing Capsule Heading -->
    <div class="offer-heading-wrapper mb-5" data-bs-toggle="collapse" data-bs-target="#servicesCollapse"
      aria-expanded="false" aria-controls="servicesCollapse" style="cursor: pointer;">
      <h2 class="offer-heading m-0">
        🎮 What We Offer
        <br>
        <small class="fs-6 d-block text-info glow-text mt-1">Click to Explore Features</small>
      </h2>
    </div>

    <!-- 📦 Collapsible Service Boxes -->
    <div class="collapse" id="servicesCollapse">
      <div class="row g-4">

        <!-- BOX 1 -->
        <div class="col-md-4">
          <div class="neon-box card-bg-animated border border-2 border-warning p-4 rounded-4 position-relative h-100 hover-glow card-img1">
            <div class="glow-icon mb-3 fs-1 text-warning">🏎</div>
            <h4 class="text-warning fw-bold mb-3" style="text-shadow: 0 0 10px #ffc107;">Multiplayer Racing</h4>
            <p>Race head-to-head with global players in electrifying, real-time matches.</p>
            <button class="btn btn-sm btn-outline-warning mt-2" data-bs-toggle="collapse" data-bs-target="#info1">More Info</button>
            <div class="collapse mt-3" id="info1">
              <div class="ticker-line px-3 py-2 rounded-3" style="background: transparent; border: 1px solid #ffc107;">
                <div class="scrolling-text text-warning" style="white-space: nowrap; overflow: hidden;">
                  <div style="display:inline-block; animation: scrollLeft 10s linear infinite;">
                    ⚡ Live Voice Chat • Custom Race Tracks • Weekly Tournaments • Win Rewards & Upgrade Vehicles!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- BOX 2 -->
        <div class="col-md-4">
          <div class="neon-box card-bg-animated border border-2 border-info p-4 rounded-4 position-relative h-100 hover-glow card-img2">
            <div class="glow-icon mb-3 fs-1 text-info">🎮</div>
            <h4 class="text-info fw-bold mb-3" style="text-shadow: 0 0 10px #00d5ff;">Realistic Simulation</h4>
            <p>Experience ultra-smooth, physics-driven driving in hyper-realistic arenas.</p>
            <button class="btn btn-sm btn-outline-info mt-2" data-bs-toggle="collapse" data-bs-target="#info2">More Info</button>
            <div class="collapse mt-3" id="info2">
              <div class="ticker-line px-3 py-2 rounded-3" style="background: transparent; border: 1px solid #00d5ff;">
                <div class="scrolling-text text-info" style="white-space: nowrap; overflow: hidden;">
                  <div style="display:inline-block; animation: scrollLeft 10s linear infinite;">
                    🔧 Real-Car Physics • Adaptive Terrain • Weather Impact • Track Wear & Tire Grip System!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- BOX 3 -->
        <div class="col-md-4">
          <div class="neon-box card-bg-animated border border-2 border-success p-4 rounded-4 position-relative h-100 hover-glow card-img3">
            <div class="glow-icon mb-3 fs-1 text-success">🏆</div>
            <h4 class="text-success fw-bold mb-3" style="text-shadow: 0 0 10px #00ff91;">Leaderboards</h4>
            <p>Compete with top racers and claim your place on the global charts.</p>
            <button class="btn btn-sm btn-outline-success mt-2" data-bs-toggle="collapse" data-bs-target="#info3">More Info</button>
            <div class="collapse mt-3" id="info3">
              <div class="ticker-line px-3 py-2 rounded-3" style="background: transparent; border: 1px solid #00ff91;">
                <div class="scrolling-text text-success" style="white-space: nowrap; overflow: hidden;">
                  <div style="display:inline-block; animation: scrollLeft 10s linear infinite;">
                    🏁 Real-Time Rankings • Player Stats • Daily Missions • Climb Tiers to Win Exclusive Skins!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- 🔹 CSS Styles -->
<style>
@keyframes scrollLeft {
  0% { transform: translateX(100%); }
  100% { transform: translateX(-100%); }
}

@keyframes moveBG {
  0% { background-position: 0% 0%; }
  50% { background-position: 100% 100%; }
  100% { background-position: 0% 0%; }
}

@keyframes pulseBorder {
  0%, 100% {
    box-shadow: 0 0 12px #ff00aa66, inset 0 0 10px #ff99dd33;
  }
  50% {
    box-shadow: 0 0 25px #ff00aa99, inset 0 0 25px #ff99dd55;
  }
}

@keyframes floatIn {
  0% {
    transform: translateY(-40px) scale(0.95);
    opacity: 0;
    filter: blur(4px);
  }
  60% {
    transform: translateY(10px) scale(1.02);
    opacity: 0.85;
    filter: blur(1px);
  }
  100% {
    transform: translateY(0) scale(1);
    opacity: 1;
    filter: blur(0);
  }
}

.offer-heading-wrapper {
  display: inline-block;
  padding: 28px 48px;
  border-radius: 50px;
  background: linear-gradient(145deg, rgba(255, 0, 128, 0.08), transparent);
  border: 2px solid rgba(255, 0, 128, 0.3);
  backdrop-filter: blur(10px);
  animation: floatIn 1.2s ease-out, pulseBorder 4s ease-in-out infinite;
  box-shadow: 0 0 22px rgba(255, 0, 128, 0.2);
  transition: 0.3s ease;
}

.offer-heading-wrapper:hover {
  transform: scale(1.03);
  box-shadow: 0 0 35px rgba(255, 0, 128, 0.5), inset 0 0 45px rgba(255, 0, 200, 0.1);
}

.offer-heading {
  font-family: 'Orbitron', sans-serif;
  font-size: 2.3rem;
  font-weight: 800;
  background: linear-gradient(to right, #ff007f, #ff55cc);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
  letter-spacing: 2px;
  margin-bottom: 0;
}

.hover-glow {
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.hover-glow:hover {
  transform: translateY(-10px);
  box-shadow: 0 0 25px rgba(0,255,209,0.4), 0 0 45px rgba(0,255,209,0.3);
  background: rgba(255, 255, 255, 0.03);
}

.card-bg-animated {
  background-size: cover;
  background-position: center;
  animation: moveBG 6s ease-in-out infinite;
  position: relative;
  overflow: hidden;
}

/* 🔥 Overlay for text readability */
.card-bg-animated {
  background-size: cover;
  background-position: center;
  animation: moveBG 6s ease-in-out infinite;
  position: relative;
  overflow: hidden;
}

.card-bg-animated::before {
  content: '';
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.65); /* Dark overlay for readability */
  z-index: 0;
  border-radius: inherit;
}

.card-bg-animated > * {
  position: relative;
  z-index: 1;
}

/* 🎯 Final Image Paths */
.card-img1 {
  background-image: url('/proc12/proc12/image/1.jpeg');
}

.card-img2 {
  background-image: url('/proc12/proc12/image/2.jpeg');
}

.card-img3 {
  background-image: url('/proc12/proc12/image/3.jpeg');
}
</style>



<!--what we offer close -->



<!-- _________________________________________________________________________________________________________________________________________________________________-->




<!-- 🚀 Enhanced Why Choose DriftArena Section -->
<section class="py-5 text-white text-center position-relative" style="background: radial-gradient(circle at center, transparent 30%, transparent 100%); overflow: hidden; font-family: 'Orbitron', sans-serif;">

  <!-- Background Animation Particles -->
  <div class="bg-particles"></div>

  <!-- Heading -->
 <!-- 🚀 Enhanced Glowing Heading -->
<!-- 🚀 Glowing Emoji + Clean Text Heading -->
<h2 class="mb-5 fw-bold display-5 text-center position-relative">
  <span class="emoji-glow-only">🚀</span>
  <span class="text-accent"> Why Choose <span class="text-accent">DriftArena ?</span></span>
  <div class="underline-pulse mx-auto mt-3"></div>
</h2>



  <!-- Flip Card -->
  <div class="container position-relative">
    <div class="flip-card mx-auto" onclick="this.classList.toggle('flipped')">
      <div class="flip-card-inner">

        <!-- Front -->
        <div class="flip-card-front d-flex flex-column justify-content-center p-5">
          <h3 class="text-glow">Unleash Your Drift Skills!</h3>
          <p class="text-info mt-2">Click to Reveal Features</p>
        </div>

        <!-- Back -->
        <div class="flip-card-back text-start p-4">
          <ul class="list-unstyled mb-0 text-start feature-points">
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-controller glowing-icon me-3"></i>
              <span><strong>✔ 100% Free Games</strong> with Instant Access</span>
            </li>
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-shield-lock glowing-icon me-3"></i>
              <span><strong>✔ Secure Downloads</strong> from Trusted Sources</span>
            </li>
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-stars glowing-icon me-3"></i>
              <span><strong>✔ Monthly New Releases</strong> with Premium Quality</span>
            </li>
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-people glowing-icon me-3"></i>
              <span><strong>✔ Community Ratings</strong> & User Feedback</span>
            </li>
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-trophy glowing-icon me-3"></i>
              <span><strong>✔ Competitive Leaderboards</strong> & Tournaments</span>
            </li>
            <li class="mb-3 d-flex align-items-center">
              <i class="bi bi-joystick glowing-icon me-3"></i>
              <span><strong>✔ Realistic Physics</strong> & Simulation Tracks</span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
/* 🌟 Heading Container Flare */
.heading-wrapper {
  position: relative;
  display: inline-block;
}

.flare-behind {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 180%;
  height: 200%;
  background: radial-gradient(circle, rgba(0,255,255,0.08) 0%, transparent 80%);
  z-index: -1;
  filter: blur(50px);
  animation: flarePulse 5s ease-in-out infinite;
}

@keyframes flarePulse {
  0%, 100% {
    opacity: 0.2;
    transform: translate(-50%, -50%) scale(1);
  }
  50% {
    opacity: 0.4;
    transform: translate(-50%, -50%) scale(1.1);
  }
}

/* 🚀 Icon Flicker Animation */
.flicker-icon {
  background: linear-gradient(45deg, #00fff7, #ff00cc, #00ffd5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: flickerIcon 1.8s infinite alternate;
  text-shadow: 0 0 8px #00fff7, 0 0 14px #ff44ff;
}

@keyframes flickerIcon {
  0%, 100% {
    opacity: 1;
    text-shadow: 0 0 10px #00fff7;
  }
  50% {
    opacity: 0.6;
    text-shadow: 0 0 20px #ff00cc, 0 0 30px #99ffff;
  }
}
.emoji-glow-only {
  display: inline-block;
  position: relative;
  font-size: 1em; /* Smaller and more balanced */
  line-height: 1;
  vertical-align: middle;
  z-index: 1;
}

.emoji-glow-only::before {
  content: '🚀';
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  color: #00fff7;
  filter: blur(5px);
  opacity: 0.7;
  text-shadow:
    0 0 6px #00fff7,
    0 0 12px #00ffe5,
    0 0 18px #ff00cc;
  animation: emojiPulse 2s ease-in-out infinite;
}

@keyframes emojiPulse {
  0%, 100% {
    opacity: 0.7;
    filter: blur(5px);
  }
  50% {
    opacity: 0.9;
    filter: blur(7px);
  }
}

/* 🌈 Animated Text Gradient */
.neon-sheen {
  background: linear-gradient(90deg, #00fff7, #ff00cc, #00ffd5, #ff00cc);
  background-size: 300% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: sheenGlow 6s linear infinite;
}

@keyframes sheenGlow {
  0% {
    background-position: 0% center;
  }
  100% {
    background-position: 300% center;
  }
}

/* 💥 Accent Text Pulse */
.pulse-accent {
  animation: pulseAccent 2s ease-in-out infinite;
}

@keyframes pulseAccent {
  0%, 100% {
    text-shadow: 0 0 8px #00ffe5;
    transform: scale(1);
  }
  50% {
    text-shadow: 0 0 20px #00ffe5, 0 0 30px #ff00cc;
    transform: scale(1.05);
  }
}

/* 🌌 Flickering Title Text */
.glow-title {
  font-family: 'Orbitron', sans-serif;
  text-shadow: 0 0 10px #00fff7, 0 0 20px #00ffe5;
  animation: flickerGlow 2.5s infinite alternate;
}

@keyframes flickerGlow {
  0% {
    text-shadow: 0 0 10px #00fff7;
  }
  50% {
    text-shadow: 0 0 20px #00ffe5, 0 0 30px #00fff0;
  }
  100% {
    text-shadow: 0 0 15px #00fff7;
  }
}

/* ✨ Main Gradient Text */
.gradient-text {
  letter-spacing: 2px;
}

.text-accent-cyan {
  background: linear-gradient(90deg, #00fff7, #ff00cc, #00ffd1, #ff44ff);
  background-size: 400% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: 0 0 8px rgba(0,255,255,0.3), 0 0 16px rgba(255,0,204,0.2);
  animation: auroraFlow 6s ease-in-out infinite;
}

@keyframes auroraFlow {
  0%   { background-position: 0% center; }
  50%  { background-position: 100% center; }
  100% { background-position: 0% center; }
}

/* 🔥 Underline Pulse Effect */
.underline-pulse {
  width: 140px;
  height: 4px;
  background: #00ffd1;
  border-radius: 50px;
  box-shadow: 0 0 12px #00ffd1;
  animation: pulseUnderline 2s ease-in-out infinite;
}

@keyframes pulseUnderline {
  0%, 100% {
    transform: scaleX(1);
    opacity: 1;
  }
  50% {
    transform: scaleX(1.5);
    opacity: 0.6;
  }
}

/* Flip Card Base */
.flip-card {
  background: transparent;
  width: 100%;
  max-width: 600px;
  height: 360px;
  perspective: 1000px;
  cursor: pointer;
  z-index: 2;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.8s ease-in-out;
  transform-style: preserve-3d;
}

.flip-card.flipped .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  backface-visibility: hidden;
  background: radial-gradient(circle at top left, #00f0ff, #1a0033, #11001f);
  box-shadow: 0 0 30px #00ffd133, inset 0 0 10px #00ffd122;
}

.flip-card-back {
  transform: rotateY(180deg);
}

.text-glow {
  font-size: 1.6rem;
  font-weight: bold;
  color: #00ffd1;
  text-shadow: 0 0 8px #00ffd1, 0 0 16px #00ffd1;
}

.underline-glow {
  width: 120px;
  height: 4px;
  background: #00ffd1;
  border-radius: 50px;
  box-shadow: 0 0 10px #00ffd1;
  margin-top: 10px;
}

/* Background Glow Animation */
.bg-particles {
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, #00fff233 1px, transparent 1px);
  background-size: 50px 50px;
  animation: bgMove 30s linear infinite;
  z-index: 0;
  opacity: 0.05;
}

@keyframes bgMove {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(100px, 100px);
  }
}

/* Feature Points Style */
.feature-points span {
  font-size: 1.05rem;
  color: #ccfaff;
  text-shadow: 0 0 5px #00ffd1;
  transition: transform 0.3s ease;
}

.feature-points li:hover span {
  transform: translateX(4px);
  color: #00ffe0;
}

.glowing-icon {
  font-size: 1.3rem;
  color: #00ffd1;
  text-shadow: 0 0 8px #00ffd1;
  animation: pulseIcon 2s infinite;
}

@keyframes pulseIcon {
  0%, 100% {
    text-shadow: 0 0 8px #00ffd1;
  }
  50% {
    text-shadow: 0 0 20px #00fff7, 0 0 10px #00fff7;
  }
}





.glow-title {
  font-family: 'Orbitron', sans-serif;
  text-shadow: 0 0 10px #00fff7, 0 0 20px #00ffe5;
  animation: flickerGlow 2.5s infinite alternate;
}

.gradient-text {
  background: linear-gradient(90deg, #00fff7, #00ffd1, #00ffbb);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  letter-spacing: 2px;
}

.text-accent {
  background: linear-gradient(to right, #ff00cc, #00ffd5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.underline-pulse {
  width: 140px;
  height: 4px;
  background: #00ffd1;
  border-radius: 50px;
  box-shadow: 0 0 12px #00ffd1;
  animation: pulseUnderline 2s ease-in-out infinite;
}

@keyframes pulseUnderline {
  0%, 100% {
    transform: scaleX(1);
    opacity: 1;
  }
  50% {
    transform: scaleX(1.5);
    opacity: 0.6;
  }
}

@keyframes flickerGlow {
  0% {
    text-shadow: 0 0 10px #00fff7;
  }
  50% {
    text-shadow: 0 0 20px #00ffe5, 0 0 30px #00fff0;
  }
  100% {
    text-shadow: 0 0 15px #00fff7;
  }
}

</style>




<!-- why choose driftareana ends -->




<!-- why choose driftareana ends -->

<!-- _________________________________________________________________________________________________________________________________________ -->


<!-- 🌟 Enhanced Testimonials Section -->
<section class="py-5 text-white text-center" style="background: linear-gradient(to right, transparent, transparent); font-family: 'Orbitron', sans-serif;">
  <div class="container">
    <!-- Neon Heading -->
    <h2 class="mb-5 display-5 fw-bold glowing-heading">
      🗣 What <span style="color:#00ffe1;">Players</span> Say
      <div class="underline-glow mx-auto mt-2"></div>
    </h2>

    <div class="row g-4 justify-content-center">

      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="testimonial-card glass-card border-info text-white" style="background-image: url('img1/re1.jpg');">
          <i class="fa-solid fa-quote-left quote-icon text-info"></i>
          <img src="img1/logo1.jpg" class="rounded-circle border border-2 border-info shadow mb-3" width="80" height="80">
          <h5 class="text-info fw-bold">Aryan G.</h5>
          <button class="btn btn-outline-info btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#r1">View Review</button>
          <div class="collapse mt-3" id="r1">
            <p class="review-text">💥 "Best racing platform I've used. Graphics are fire!"</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="testimonial-card glass-card border-warning text-white" style="background-image: url('img1/re2.jpg');">
          <i class="fa-solid fa-quote-left quote-icon text-warning"></i>
          <img src="img1/logo2.jpg" class="rounded-circle border border-2 border-success shadow mb-3" width="80" height="80">
          <h5 class="text-warning fw-bold">Priya S.</h5>
          <button class="btn btn-outline-warning btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#r2">View Review</button>
          <div class="collapse mt-3" id="r2">
            <p class="review-text">⚡ "Super fast download. Love the Try Now feature!"</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="testimonial-card glass-card border-success text-white" style="background-image: url('img1/re4.jpg');">
          <i class="fa-solid fa-quote-left quote-icon text-success"></i>
          <img src="img1/i1.jpg" class="rounded-circle border border-2 border-success shadow mb-3" width="80" height="80">
          <h5 class="text-success fw-bold">Karan M.</h5>
          <button class="btn btn-outline-success btn-sm mt-3" data-bs-toggle="collapse" data-bs-target="#r3">View Review</button>
          <div class="collapse mt-3" id="r3">
            <p class="review-text">🔥 "Gameplay feels smooth, no lag at all. Respect!"</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<style>
/* Neon Heading */
.glowing-heading {
  color: #ff00cc;
  text-shadow: 0 0 10px #ff00cc, 0 0 25px #ff66d4;
  animation: glowPulse 3s ease-in-out infinite;
}
@keyframes glowPulse {
  0%, 100% { text-shadow: 0 0 10px #ff00cc; }
  50% { text-shadow: 0 0 20px #ff00cc, 0 0 40px #ff66d4; }
}
.underline-glow {
  width: 120px;
  height: 4px;
  background: #00ffd1;
  border-radius: 50px;
  box-shadow: 0 0 12px #00ffd1;
  margin-top: 10px;
}

/* Testimonial Card Styles */
.testimonial-card {
  position: relative;
  overflow: hidden;
  padding: 2rem;
  border-radius: 1rem;
  background-size: cover;
  background-position: center;
  transition: all 0.4s ease;
  box-shadow: 0 0 15px rgba(0, 255, 200, 0.08);
  backdrop-filter: blur(8px);
}
.testimonial-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.55);
  z-index: 0;
}
.testimonial-card * {
  position: relative;
  z-index: 1;
}
.testimonial-card:hover {
  transform: scale(1.03);
  box-shadow: 0 0 30px rgba(0, 255, 200, 0.2);
}

/* Glass Effect Variant */
.glass-card {
  backdrop-filter: blur(12px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  background-blend-mode: overlay;
}

/* Quote Icon */
.quote-icon {
  position: absolute;
  top: 15px;
  left: 15px;
  font-size: 1.5rem;
  opacity: 0.8;
}

/* Review Text */
.review-text {
  font-size: 1.05rem;
  color: #f4faff;
  background: transparent;
  padding: 10px 15px;
  border-left: 3px solid #00ffd1;
  border-radius: 6px;
  text-shadow: 0 0 4px #00ffd1;
}
</style>





 

<!-- _______________________________________________________________________________________________________________________________________ -->
<!-- 🚀 Enhanced Call to Action Section -->
<section id="tryanddownload" class="py-5 text-center text-white position-relative" style="background: radial-gradient(circle at center, transparent,transparent); font-family: 'Orbitron', sans-serif; overflow: hidden; z-index: 1;">

  <!-- Background Glow -->
  <div class="bg-particles-arena"></div>

  <div class="container position-relative" style="z-index: 2;">
    <!-- Glowing Heading -->
    <h2 class="mb-4 fw-bold display-5 neon-heading">
      🎮 <span class="gradient-text">The World Of <span class="text-accent">Arena</span></span>
      <div class="underline-glow mx-auto mt-2"></div>
    </h2>

    <!-- Subheading -->
    <p class="fs-5 mb-4 text-light" style="text-shadow: 0 0 8px #ff4d4d;">
      No limits. No rules. Just play. <br>Welcome to your ultimate <span class="text-danger fw-bold">Play Zone</span>!
    </p>

    <!-- ✅ FIXED: Clickable Button -->
    <a href="tryanddownload.php" class="btn btn-lg px-5 py-3 fw-bold glowing-btn-red mt-2">
      Start Now 🚗💨
    </a>
  </div>
</section>


<style>
/* Glowing underline */
.underline-glow {
  width: 120px;
  height: 4px;
  background: #ff4d4d;
  border-radius: 50px;
  box-shadow: 0 0 15px #ff4d4d;
}

/* Glowing button */
.glowing-btn-red {
  background: #ff1a1a;
  border: none;
  color: white;
  box-shadow: 0 0 12px #ff4d4d, 0 0 20px #ff4d4d inset;
  transition: all 0.3s ease-in-out;
}
.glowing-btn-red:hover {
  background: #ff3333;
  box-shadow: 0 0 25px #ff6666, 0 0 35px #ff4d4d inset;
  transform: scale(1.05);
}

.gradient-text {
  background: linear-gradient(90deg, #ff4d4d, #ff0066, #ff1aff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: 900; /* Make it bolder */
  text-shadow: 0 0 1px rgba(255, 0, 0, 0.4); /* Slight edge highlight */
}

/* Background particle glow effect */
.bg-particles-arena {
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, #ff1a1a33 1px, transparent 1px);
  background-size: 40px 40px;
  animation: moveArenaParticles 50s linear infinite;
  opacity: 0.07;
  z-index: 0;
}

@keyframes moveArenaParticles {
  0% { transform: translate(0, 0); }
  100% { transform: translate(200px, 200px); }
}
</style>


<!-- __________________________________________________________________________________________________________________________________________ -->
 


<!-- 📞 Quick Contact Section -->
<section class="py-5 text-white" style="background: linear-gradient(to right, transparent, transparent); font-family: 'Orbitron', sans-serif;">
  <div class="container">
    <h2 class="text-center fw-bold display-6 mb-4 glowing-heading">
      📞 Quick <span style="color:#00ffd1;">Contact</span>
      <div class="underline-glow mx-auto mt-2"></div>
    </h2>
    
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form class="bg-dark p-4 rounded-4 shadow-lg border border-info bg-opacity-75" method="POST" action="contact.php">
          <div class="mb-3">
            <input type="text" class="form-control bg-transparent text-white border-info" name="name" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control bg-transparent text-white border-info" name="email" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control bg-transparent text-white border-info" name="message" rows="4" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-outline-info px-4 py-2">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>


<style>
.glowing-heading {
  text-shadow: 0 0 10px #00ffd1, 0 0 20px #00ffd1;
}
.underline-glow {
  width: 100px;
  height: 4px;
  background: #00ffd1;
  border-radius: 20px;
  box-shadow: 0 0 10px #00ffd1;
}
</style>
</div>
<style>
#arenaSections {
  background: url('img1/td.jpg') no-repeat center center fixed;
  background-size: cover;
  position: relative;
  z-index: 0;
}
#arenaSections section {
  position: relative;
  z-index: 1;
}
#arenaSections::before {
  content: "";
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: transparent; /* transparent dark overlay */
  z-index: 0;
}
#arenaSections > section {
  position: relative;
  z-index: 1;
}

</style>
<style>
  body {
    background: url('img1/td.jpg') no-repeat center center fixed;
    background-size: cover;
    background-color: transparent; /* Fallback */
  }

  section {
    background-color: transparent; /* Dark overlay for readability */
    backdrop-filter: blur(4px);
    z-index: 2;
    position: relative;
  }

  /* Optional: prevent the background from repeating weirdly inside containers */
  .container, .text-center, .text-white {
    position: relative;
    z-index: 2;
  }
</style>



  




  


 
  

  

  


   




<?php include('footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>