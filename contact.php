<?php 
include('header.php');
include('db.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $conn->real_escape_string($_POST['name']);
    $email   = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact (your_name, your_email, your_message)
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Message sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('❌ Error: " . addslashes($conn->error) . "'); window.location.href='contact.php';</script>";
    }
}
?>
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





 

</head>
<body>
   <style>
     /* Base Navbar Style */
    /* Gaming style navbar */
  .navbar {
    background: linear-gradient(90deg, #0f0c29, #302b63, #24243e);
    padding: 10px 20px;
    border-bottom: 2px solid #00f0ff;
    box-shadow: 0 0 10px #00f0ff55;
  }


  .navbar {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 999;
}

  .navbar-brand span {
    color: #00f0ff;
    font-size: 1.5rem;
    font-weight: bold;
    text-shadow: 0 0 5px #00f0ff;
  }

  .navbar-nav .nav-link {
    color: #fff;
    font-weight: 500;
    padding: 8px 16px;
    border-radius: 8px;
    transition: all 0.3s ease;
  }

  .navbar-nav .nav-link.active,
  .navbar-nav .nav-link:hover {
    background-color: #00f0ff33;
    color: #00f0ff;
    box-shadow: 0 0 8px #00f0ff;
  }

  .form-control {
    background-color: #1a1a1a;
    border: 1px solid #00f0ff88;
    color: #fff;
    border-radius: 8px;
  }

  .form-control:focus {
    box-shadow: 0 0 8px #00f0ff;
    border-color: #00f0ff;
    background-color: #111;
  }

  .navbar-toggler {
    background-color: #00f0ff;
  }

  .navbar-toggler-icon {
    filter: invert(100%);
  }

  .gradient-text {
  background: linear-gradient(270deg, #00f0ff, #ff00ff, #00ff99);
  background-size: 600% 600%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: gradientMove 6s ease infinite;
  font-weight: bold;
  text-shadow: 0 0 5px #00f0ff66;
}

@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
</style>
   <!-- 📞 Contact Us Section -->
    <div>
<!-- 📬 Contact Us Section -->
<section id="contact" class="py-5 mt-5 text-white" style="
  background: url('img1/co.webp') no-repeat center center fixed;
  background-size: cover;
  position: relative;
  font-family: 'Orbitron', sans-serif;
  border-top: 2px solid #00ffd1;
  z-index: 1;
  min-height: 100vh;
  padding-bottom: 60px;
">
  <!-- Overlay -->

  <div class="d-flex justify-content-center mb-4">
    <div class="glow-oval text-center">
      <h2 class="oval-heading">
        📞 Contact <span class="highlighted">DriftArena</span> Team
      </h2>
    </div>
  </div>

  <div class="underline-glow mx-auto mb-5"></div>

  <p class="text-center mb-5 text-info fs-5" style="text-shadow: 0 0 5px #00ffd1;">
    Have a question, feedback, or partnership idea? We’d love to hear from you!
  </p>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <form class="glassmorphic-form p-4 rounded-4 shadow-lg animate__animated animate__fadeInUp" method="POST" action="contact.php">
        <div class="mb-3 position-relative">
          <input type="text" class="form-control neon-input ps-5" name="name" placeholder="👤 Your Name" required>
          <i class="bi bi-person-fill position-absolute input-icon"></i>
        </div>
        <div class="mb-3 position-relative">
          <input type="email" class="form-control neon-input ps-5" name="email" placeholder="📧 Your Email" required>
          <i class="bi bi-envelope-fill position-absolute input-icon"></i>
        </div>
        <div class="mb-3">
          <textarea class="form-control neon-input" name="message" rows="4" placeholder="💬 Your Message..." required></textarea>
        </div>
        <div class="text-center mt-4">
          <button type="submit" class="btn neon-btn px-4 py-2 fw-bold">
            🚀 Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<script>
  const form = document.querySelector("form");
  const msg = document.getElementById("successMsg");

  form.addEventListener("submit", function(e) {
    e.preventDefault();

    // 1. Show success message with animation
    msg.classList.add("show");

    // 2. Clear the form inputs
    form.reset();

    // 3. Hide message after 4 seconds
    setTimeout(() => {
      msg.classList.remove("show");
    }, 4000);
  });
</script>





<!-- ✨ Styles -->
<style>

  html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  background: black;
  overflow-x: hidden;
}

  .underline-glow {
    height: 4px;
    width: 120px;
    background: #00ffd1;
    box-shadow: 0 0 10px #00ffd1, 0 0 20px #00ffd1;
    border-radius: 50px;
  }

  .glassmorphic-form {
    background: rgba(0, 0, 0, 0.5);
    border: 2px solid transparent;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 25px rgba(0, 255, 209, 0.2);
    transition: border 0.3s ease-in-out;
  }

  .glassmorphic-form:hover {
    border-color: #00ffd1;
  }

  .neon-input {
    background-color: #000;
    color: #fff;
    border: 2px solid #00ffd1;
    box-shadow: 0 0 6px #00ffd1;
    font-size: 0.95rem;
    padding-left: 2.5rem;
    transition: all 0.3s;
  }

  .neon-input::placeholder {
    color: #99ffff;
    opacity: 0.6;
  }

  .neon-input:focus {
    outline: none;
    background-color: #000;
    box-shadow: 0 0 15px #00ffd1;
  }

  .neon-input:hover {
    box-shadow: 0 0 10px #00ffd1;
  }

  .neon-btn {
    background: linear-gradient(135deg, #00ffd1, #007bff);
    color: black;
    font-weight: bold;
    border-radius: 30px;
    border: none;
    box-shadow: 0 0 15px #00ffd1;
    transition: all 0.4s ease;
  }

  .neon-btn:hover {
    background: linear-gradient(135deg, #00ffd1, #00bbff);
    box-shadow: 0 0 25px #00ffd1;
    transform: scale(1.05);
  }

  .input-icon {
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    color: #00ffd1;
    font-size: 1.2rem;
    pointer-events: none;
  }

  .section-title-glow {
  font-family: 'Orbitron', sans-serif;
  font-size: 2.2rem;
  color: #00ffd1;
  text-shadow: 0 0 10px #00ffd1, 0 0 20px #00ffd1;
  animation: glowText 2s ease-in-out infinite alternate;
}

.neon-text {
  color: #00ffd1;
  letter-spacing: 1px;
}

.highlighted {
  color: #ffffff;
  text-shadow: 0 0 15px #00ffd1;
}

.underline-glow {
  height: 4px;
  width: 140px;
  background: #00ffd1;
  box-shadow: 0 0 10px #00ffd1, 0 0 20px #00ffd1;
  border-radius: 50px;
  animation: underlineGlow 2s infinite alternate;
}

@keyframes glowText {
  from {
    text-shadow: 0 0 5px #00ffd1, 0 0 10px #00ffd1;
  }
  to {
    text-shadow: 0 0 15px #00ffd1, 0 0 25px #00ffd1;
  }
}

@keyframes underlineGlow {
  0% {
    width: 120px;
    box-shadow: 0 0 10px #00ffd1;
  }
  100% {
    width: 160px;
    box-shadow: 0 0 25px #00ffd1;
  }
}
background-size: 105%;
animation: bgZoom 15s ease-in-out infinite alternate;
@keyframes bgZoom {
  from {
    background-size: 105%;
  }
  to {
    background-size: 110%;
  }
}

.glow-oval {
  background: rgba(0, 0, 0, 0.5);
  border: 2px solid #00ffd1;
  padding: 10px 30px;
  border-radius: 50px;
  display: inline-block;
  box-shadow: 0 0 15px #00ffd1, 0 0 30px #00ffd1;
  animation: ovalPulse 2s infinite alternate;
}

.oval-heading {
  font-size: 1.8rem;
  font-family: 'Orbitron', sans-serif;
  color: #00ffd1;
  margin: 0;
  text-shadow: 0 0 10px #00ffd1, 0 0 20px #00ffd1;
}

@keyframes ovalPulse {
  from {
    box-shadow: 0 0 10px #00ffd1;
  }
  to {
    box-shadow: 0 0 20px #00ffd1, 0 0 35px #00ffd1;
  }
}
.custom-success-msg {
  background: rgba(0, 255, 209, 0.1);
  border: 2px solid #00ffd1;
  color: #00ffd1;
  font-family: 'Orbitron', sans-serif;
  font-size: 1rem;
  padding: 15px 25px;
  border-radius: 30px;
  box-shadow: 0 0 15px #00ffd1, 0 0 25px #00ffd1;
  text-shadow: 0 0 5px #00ffd1;
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s ease;
  pointer-events: none;
  position: relative;
}

.custom-success-msg.show {
  opacity: 1;
  transform: translateY(0);
}


</style>
</div>
<!-- 🔗 Bootstrap Icons CDN (for input icons) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">



<?php include('footer.php') ?>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>