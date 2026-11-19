<!-- ✅ Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
  /* 🐉 Dragon Glow Shadow */
  .shadow-dragon {
    box-shadow: 0 0 12px crimson, 0 0 24pxrgb(46, 255, 238);
  }

  /* 🐉 Dragon Red Text */
  .dragon-red {
    color:rgb(46, 255, 231);
    text-shadow: 2px 2px 8px black;
  }

  /* 🐉 Footer Base Style */
  footer.slim-footer {
    background: linear-gradient(90deg, #1a001a, #000);
    color: white;
    font-size: 0.9rem;
    border-top: 1px solid crimson;
    box-shadow: 0 -2px 10px rgb(0, 255, 247);
    padding: 20px 0;
    width: 100%;
    z-index: 1;
  }

  /* 🔗 Footer Navigation Links */
  .footer-links a {
    color:rgb(153, 255, 250);
    text-decoration: none;
    transition: 0.3s;
  }

  .footer-links a:hover {
    color:rgb(46, 255, 234);
    text-decoration: underline;
  }

  /* 🐲 Brand Title */
  .footer-brand {
    font-weight: bold;
    font-size: 1.2rem;
    color: crimson;
    letter-spacing: 1px;
  }

  /* 📜 Legal Links */
  .footer-legal a {
    color:rgb(119, 246, 255);
    font-weight: 500;
    text-decoration: none;
  }

  .footer-legal a:hover {
    text-decoration: underline;
    color:rgb(46, 255, 227);
  }

  /* 📱 Responsive Adjustments */
  @media (max-width: 768px) {
    .slim-footer .container {
      flex-direction: column !important;
      align-items: center !important;
      text-align: center !important;
    }

    .footer-links {
      padding: 0;
      margin: 12px 0;
    }

    .footer-links li {
      display: block;
      margin: 6px 0;
    }

    .footer-legal {
      margin-top: 10px;
    }
  }
</style>



<!-- 🔻 FOOTER SECTION -->
<footer class="slim-footer">
  <div class="container">
    <div class="row align-items-start">

      <!-- 🔹 Logo + About -->
      <div class="col-md-4 mb-3">
        <div class="d-flex align-items-center mb-2">
          <img src="image/rl.png" alt="DriftArena Logo" style="height: 50px; border-radius: 10px;" class="me-2">
          <h5 class="mb-0">DriftArena</h5>
        </div>
        <p class="small text-light-emphasis mb-2">
          Explore, play & download the best games. Your gaming journey starts here — at DriftArena.
        </p>
      </div>

      <!-- 🔹 Quick Links -->
      <div class="col-md-4 mb-3">
        <h6 class="text-uppercase mb-2">Quick Links</h6>
        <ul class="nav flex-column small">
          <li class="nav-item"><a href="index.php" class="nav-link px-0 text-white-50">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link px-0 text-white-50">About</a></li>
          <li class="nav-item"><a href="trending.php" class="nav-link px-0 text-white-50">Trending</a></li>
          <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal" class="nav-link px-0 text-white-50">Privacy</a></li>
          <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal" class="nav-link px-0 text-white-50">Terms</a></li>
        </ul>
      </div>

      <!-- 🔹 Contact -->
      <div class="col-md-4 mb-3">
        <h6 class="text-uppercase mb-2">Contact</h6>
        <p class="small mb-1">📧 support@driftarena.com</p>
        <p class="small mb-2">📞 +91-9876543210</p>
        <div class="d-flex gap-2">
          <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>

    </div>

    <!-- 🔹 Bottom -->
    <div class="text-center border-top border-secondary mt-3 pt-2">
      <p class="mb-0 text-secondary small">&copy; 2025 DriftArena. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- 🔻 MODALS (OUTSIDE FOOTER) -->

<!-- Privacy Modal -->
<div class="modal fade" id="privacyModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content bg-dark text-white border border-secondary rounded-3">
      <div class="modal-header">
        <h5 class="modal-title">Privacy Policy</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body small">
        <p><strong>1.</strong> We respect your privacy and never share personal data.</p>
        <p><strong>2.</strong> Cookies may be used for a better experience.</p>
        <p><strong>3.</strong> All data is stored securely. By using DriftArena, you accept these terms.</p>
      </div>
    </div>
  </div>
</div>

<!-- Terms Modal -->
<div class="modal fade" id="termsModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content bg-dark text-white border border-secondary rounded-3">
      <div class="modal-header">
        <h5 class="modal-title">Terms & Conditions</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body small">
        <p><strong>1.</strong> Use DriftArena only for legal, personal gaming.</p>
        <p><strong>2.</strong> Do not redistribute downloaded content.</p>
        <p><strong>3.</strong> By continuing, you agree to follow all rules.</p>
      </div>
    </div>
  </div>
</div>

<!-- ✅ Bootstrap JS (Needed for modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
