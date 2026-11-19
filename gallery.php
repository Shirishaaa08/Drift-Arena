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
  
    .section-title {
      font-size: 3rem;
      font-weight: bold;
      text-align: center;
      color: #00f7ff;
      text-shadow: 0 0 10px #00f7ff, 0 0 25px #00f7ff;
    }

    .section-title::after {
      content: '';
      display: block;
      margin: 12px auto 0;
      width: 120px;
      height: 4px;
      background: #00f7ff;
      border-radius: 2px;
      box-shadow: 0 0 10px #00f7ff, 0 0 20px #00f7ff;
    }

    .gallery-img {
      overflow: hidden;
      border-radius: 14px;
      box-shadow: 0 0 15px rgba(0, 255, 209, 0.2);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      cursor: pointer;
    }

    .gallery-img img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 12px;
      transition: transform 0.4s ease;
    }

    .gallery-img:hover {
      transform: scale(1.03);
      box-shadow: 0 0 30px rgba(0, 255, 209, 0.4);
    }

    .gallery-img img:hover {
      transform: scale(1.08);
    }

    .filter-nav .nav-link {
      color: #fff;
      background-color: #1a1a1a;
      border: 1px solid #00ffd1;
      border-radius: 30px;
      margin: 5px;
      padding: 8px 18px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 0 10px #00ffd144;
    }

    .filter-nav .nav-link:hover {
      background-color: #00ffd1;
      color: #000;
      box-shadow: 0 0 15px #00ffd1;
      transform: scale(1.05);
    }

    .filter-nav .nav-link.active {
      background-color: #dc3545;
      color: #fff;
      box-shadow: 0 0 15px #dc3545;
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 2.2rem;
      }
    }
    .gallery-card img:hover {
  transform: scale(1.1);
  transition: transform 0.3s ease;
}
.gallery-card img {
  width: 100%;
  border-radius: 12px;
}
.gallery-card {
  cursor: pointer;
  transition: 0.3s;
}
.gallery-card:hover {
  transform: scale(1.03);
}
/* Hover Zoom on Thumbnails */
    .gallery-card img {
      transition: transform 0.3s ease;
    }

    .gallery-card img:hover {
      transform: scale(1.05);
    }

    /* Modal Zoom Animation */
    .animate-zoom {
      animation: zoomIn 0.5s ease-in-out;
    }

    @keyframes zoomIn {
      from {
        transform: scale(0.6);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    .modal-content {
      background: transparent;
      border: none;
    }
.animated-word {
  display: inline-block;
  animation: glowText 2s infinite alternate;
}

@keyframes glowText {
  0% {
    text-shadow: 0 0 5px #00bfff, 0 0 10px #00bfff;
    color: #00bfff;
  }
  100% {
    text-shadow: 0 0 20px #1e90ff, 0 0 30px #1e90ff;
    color: #fff;
  }
}
.img-wrapper {
  height: 220px; /* 🔁 Set height as per your design */
  overflow: hidden;
  border-radius: 8px;
}

.object-fit-cover {
  object-fit: cover;
  height: 100%;
  width: 100%;
}
.gallery-card {
  cursor: pointer;
  transition: 0.3s;
  border: 2px solid #00ffd1; /* 🔷 Add border */
  border-radius: 14px;
  box-shadow: 0 0 10px #00ffd188; /* Neon glow */
  background-color: #111;
}

.gallery-card:hover {
  transform: scale(1.03);
  box-shadow: 0 0 25px #00ffd1, 0 0 40px #00ffd1; /* Glow on hover */
}


  </style>
</head>
<body>

<!-- 🌌 Gallery Section -->
<section id="gallery" class="py-5 mt-5 text-white position-relative" style="background: url('img1/ll.jpg') no-repeat center center / cover; min-height: 100vh;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.55); z-index: 1;"></div>

  <div class="position-relative z-2">
    <h2 class="text-center mb-3 display-4 fw-bold text-uppercase" style="letter-spacing: 2px; color: #ff4d4d;">
  <span class="animated-word"> 🎮 DriftArena</span> <span class="animated-word">Gallery</span>
</h2>

    <p class="text-center text-muted mb-4">Explore the hottest visuals and action moments from DriftArena.</p>

    <!-- 🔄 Tabs -->
    <ul class="nav justify-content-center filter-nav mb-4" id="galleryTab" role="tablist">
      <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#all">All</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#racing">Racing</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#action">Action</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#horror">Horror</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#adventure">Adventure</a></li>
    </ul>

    <!-- 🖼 Image Gallery Tabs -->
    <div class="container">
      <div class="tab-content">

        <!-- ✅ All Tab with Titles -->
        <div class="tab-pane fade show active" id="all">
          <div class="row g-4">

            <!-- 🏎️ Racing -->
            <!-- 🏎️ Card 1 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/ga1.jpg" alt="Neon Rush" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/ga1.jpg')">
    </div>
    <div class="mt-2">
      <strong>Neon Rush: Turbo Rivals</strong><br>
      <small class="text-muted">Racing</small>
    </div>
  </div>
</div>

<!-- 🏎️ Card 2 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/ga2.jpg" alt="Track Fury GT" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/ga2.jpg')">
    </div>
    <div class="mt-2">
      <strong>Track Fury GT</strong><br>
      <small class="text-muted">Racing</small>
    </div>
  </div>
</div>

<!-- 🏎️ Card 3 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/ga3.avif" alt="Velocity Overdrive" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/ga3.avif')">
    </div>
    <div class="mt-2">
      <strong>Velocity Overdrive</strong><br>
      <small class="text-muted">Racing</small>
    </div>
  </div>
</div>


            <!-- 💥 Action -->
<!-- 💥 Card 4 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/ad1.jpg" alt="StrikeZone" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/ad1.jpg')">
    </div>
    <div class="mt-2">
      <strong>StrikeZone: Ghost Protocol</strong><br>
      <small class="text-muted">Action</small>
    </div>
  </div>
</div>

<!-- 💥 Card 5 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/ad2.jpg" alt="Iron Vengeance" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/ad2.jpg')">
    </div>
    <div class="mt-2">
      <strong>Iron Vengeance</strong><br>
      <small class="text-muted">Action</small>
    </div>
  </div>
</div>

<!-- 💥 Card 6 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/ad3.jpg" alt="Jungle Ops" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/ad3.jpg')">
    </div>
    <div class="mt-2">
      <strong>Jungle Ops: Firefront</strong><br>
      <small class="text-muted">Action</small>
    </div>
  </div>
</div>


            <!-- 👻 Horror -->
            <!-- 👻 Card 7 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src=img1/h3.webp alt="Whispers of the Manor" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/h3.webp')">
    </div>
    <div class="mt-2">
      <strong>Whispers of the Manor</strong><br>
      <small class="text-muted">Horror</small>
    </div>
  </div>
</div>

<!-- 👻 Card 8 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/h4.jpg" alt="Skeleton Siege" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/h4.jpg')">
    </div>
    <div class="mt-2">
      <strong>Skeleton Siege</strong><br>
      <small class="text-muted">Horror</small>
    </div>
  </div>
</div>

<!-- 👻 Card 9 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/h5.jpg" alt="Ashes of the Hollow" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/h5.jpg')">
    </div>
    <div class="mt-2">
      <strong>Ashes of the Hollow</strong><br>
      <small class="text-muted">Horror</small>
    </div>
  </div>
</div>


            <!-- 🧭 Adventure -->
            <!-- 🧭 Card 10 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/a1.jpg" alt="Legends of Aeloria" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/a1.jpg')">
    </div>
    <div class="mt-2">
      <strong>Legends of Aeloria</strong><br>
      <small class="text-muted">Adventure</small>
    </div>
  </div>
</div>

<!-- 🧭 Card 11 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/a2.jpg" alt="Crystal Tomb" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/a2.jpg')">
    </div>
    <div class="mt-2">
      <strong>Crystal Tomb: Echoes of Frost</strong><br>
      <small class="text-muted">Adventure</small>
    </div>
  </div>
</div>

<!-- 🧭 Card 12 -->
<div class="col-md-4">
  <div class="position-relative gallery-card text-center">
    <div class="img-wrapper">
      <img src="img1/a3.jpg" alt="Shadowfall Reign" class="img-fluid w-100"
        data-bs-toggle="modal"
        data-bs-target="#singleImageModal"
        onclick="showSingleImage('img1/a3.jpg')">
    </div>
    <div class="mt-2">
      <strong>Shadowfall Reign</strong><br>
      <small class="text-muted">Adventure</small>
    </div>
  </div>
</div>


          </div>
        </div>
        <!-- ✅ End All Tab -->
         

      <!-- 🎮 Racing Tab -->
<div class="tab-pane fade" id="racing">
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/ga1.jpg" alt="Neon Rush" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/ga1.jpg')">
        </div>
        <div class="mt-2">
          <strong>Neon Rush: Turbo Rivals</strong><br>
          <small class="text-muted">Racing</small>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/ga2.jpg" alt="Track Fury GT" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/ga2.jpg')">
        </div>
        <div class="mt-2">
          <strong>Track Fury GT</strong><br>
          <small class="text-muted">Racing</small>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/ga3.avif" alt="Velocity Overdrive" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/ga3.avif')">
        </div>
        <div class="mt-2">
          <strong>Velocity Overdrive</strong><br>
          <small class="text-muted">Racing</small>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- 🔫 Action Tab -->
<div class="tab-pane fade" id="action">
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/ad1.jpg" alt="StrikeZone" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/ad1.jpg')">
        </div>
        <div class="mt-2">
          <strong>StrikeZone: Ghost Protocol</strong><br>
          <small class="text-muted">Action</small>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/ad2.jpg" alt="Iron Vengeance" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/ad2.jpg')">
        </div>
        <div class="mt-2">
          <strong>Iron Vengeance</strong><br>
          <small class="text-muted">Action</small>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/ad3.jpg" alt="Jungle Ops" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/ad3.jpg')">
        </div>
        <div class="mt-2">
          <strong>Jungle Ops: Firefront</strong><br>
          <small class="text-muted">Action</small>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- 👻 Horror Tab -->
<div class="tab-pane fade" id="horror">
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src=img1/h3.webp alt="Whispers of the Manor" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('iimg1/h3.webp')">
        </div>
        <div class="mt-2">
          <strong>Whispers of the Manor</strong><br>
          <small class="text-muted">Horror</small>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/h4.jpg" alt="Skeleton Siege" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/h4.jpg')">
        </div>
        <div class="mt-2">
          <strong>Skeleton Siege</strong><br>
          <small class="text-muted">Horror</small>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/h5.jpg" alt="Ashes of the Hollow" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/h5.jpg')">
        </div>
        <div class="mt-2">
          <strong>Ashes of the Hollow</strong><br>
          <small class="text-muted">Horror</small>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- 🧭 Adventure Tab -->
<div class="tab-pane fade" id="adventure">
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/a1.jpg" alt="Legends of Aeloria" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/a1.jpg')">
        </div>
        <div class="mt-2">
          <strong>Legends of Aeloria</strong><br>
          <small class="text-muted">Adventure</small>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/a2.jpg" alt="Crystal Tomb" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/a2.jpg')">
        </div>
        <div class="mt-2">
          <strong>Crystal Tomb: Echoes of Frost</strong><br>
          <small class="text-muted">Adventure</small>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="position-relative gallery-card text-center">
        <div class="img-wrapper">
          <img src="img1/a3.jpg" alt="Shadowfall Reign" class="img-fluid w-100"
            data-bs-toggle="modal"
            data-bs-target="#singleImageModal"
            onclick="showSingleImage('img1/a3.jpg')">
        </div>
        <div class="mt-2">
          <strong>Shadowfall Reign</strong><br>
          <small class="text-muted">Adventure</small>
        </div>
      </div>
    </div>

  </div>
</div>


      </div>
    </div>
  </div>
</section> 
<!-- 🖼 Image Modal -->
<div class="modal fade" id="singleImageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0 shadow-none">
      <div class="modal-body text-center p-0">
        <img id="modalImage" src="" class="img-fluid animate-zoom" alt="Full Image" />
      </div>
    </div>
  </div>
</div>


<?php include('footer.php') ?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Image Loader Script -->
<script>
  function showSingleImage(src) {
    const modalImg = document.getElementById("modalImage");
    modalImg.src = src;

    // Reset animation
    modalImg.classList.remove("animate-zoom");
    void modalImg.offsetWidth; // Force reflow
    modalImg.classList.add("animate-zoom");
  }
</script>


</body>
</html>