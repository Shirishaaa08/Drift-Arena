# DriftArena - Futuristic Gaming & Racing Portal

[![PHP](https://img.shields.io/badge/PHP-7.4%2B%20%7C%208.x-777bb4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)

**Drift Arena** is a futuristic, neon-cyberpunk themed web portal built for gamers and racing enthusiasts. It offers an immersive gaming showcase featuring trending titles, upcoming releases, pre-registrations, media galleries, downloads, and an integrated administrative dashboard.

---

## Key Features

- ** Cyberpunk & Neon UI:** Designed with high-energy neon aesthetics, glowing animations, custom gaming typography (*Orbitron* and *Audiowide*), dynamic particle backgrounds (`particles.js`), and embedded video banners.
- ** Trending Games:** Dynamic showcase of the hottest racing and action titles with real-time descriptions and trailer previews.
- ** Upcoming Releases & Pre-Registration:** Gamers can explore upcoming games and pre-register with instant modal/JSON feedback.
- ** Try & Download:** Dedicated hub for gameplay previews, demo versions, and downloadable packages.
- ** Media Gallery:** Interactive image and video gallery showcasing wallpapers, screenshots, and cinematic gaming clips.
- ** Feedback & Community Reviews:** User rating and enquiry submission system.
- ** Admin Dashboard:**
  - Secure admin login (`admin.php`) and registration (`register_admin.php`).
  - Comprehensive user management with soft delete and restore capabilities (`manage_users.php`).
  - Customer enquiry management (`manage_enquiries.php`).

---

##  Tech Stack

| Component | Technology |
|---|---|
| **Backend** | PHP (Procedural & MySQLi Prepared Statements) |
| **Database** | MySQL / MariaDB |
| **Frontend Framework** | Bootstrap 5.3.3 |
| **Styling & Effects** | Custom CSS3 (Glow & Neon keyframes), Particles.js |
| **Typography & Icons** | Google Fonts (Orbitron, Audiowide, Poppins), Bootstrap Icons |
| **Local Environment** | XAMPP / WampServer / LAMP |

---

##  Project Structure

```plaintext
Drift-Arena/
├── image/                # Game wallpapers, screenshots, background videos (.mp4)
├── img1/                 # Categorized game posters, logos, and UI assets
├── about.php             # About Drift Arena, vision, and team details
├── admin.php             # Admin authentication portal
├── admin_logout.php      # Admin session termination
├── contact.php           # User contact and enquiry page
├── dashboard.php         # Admin control center and analytics overview
├── db.php                # MySQL database connection configuration
├── download.php          # Game download handler
├── footer.php            # Global neon-styled footer component
├── gallery.php           # Game media showcase
├── header.php            # Navigation header component
├── index.php             # Main landing page
├── login.php             # User login endpoint
├── manage_enquiries.php  # Admin enquiry handling
├── manage_users.php      # Admin user management (View, Delete, Restore)
├── pre_register.php      # Game pre-registration API endpoint
├── register_admin.php    # Admin account creation
├── review.php            # Community feedback & reviews
├── style.css             # Global styling and custom neon animations
├── submit_feedback.php   # Feedback handler
├── Trending.php          # Trending games catalog
├── tryanddownload.php    # Game trial and download page
└── upcoming.php          # Upcoming games & pre-registration portal
```

---

##  Getting Started (Local Setup)

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (or any PHP & MySQL local server)
- Git installed on your system
- Modern Web Browser (Chrome, Firefox, Edge)

### Installation Steps

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Shirishaaa08/Drift-Arena.git
   ```

2. **Move to Server Root:**
   Copy the `Drift-Arena` folder into your web server's root directory:
   - For **XAMPP**: `C:/xampp/htdocs/Drift-Arena`
   - For **WampServer**: `C:/wamp64/www/Drift-Arena`

3. **Start Apache & MySQL:**
   Open the XAMPP Control Panel and start both **Apache** and **MySQL** services.

4. **Setup Database:**
   - Open your browser and go to `http://localhost/phpmyadmin/`.
   - Create a new database named:
     ```sql
     driftarena
     ```
   - Create the necessary tables (`login_user`, `pre_register`, `enquiries`, `feedback`).
   - If needed, verify your credentials in [db.php](file:///c:/Users/PRATHA%20MORE/Downloads/proc12/db.php):
     ```php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $db   = "driftarena";
     ```

5. **Run the Project:**
   Visit in your browser:
   ```
   http://localhost/Drift-Arena/
   ```

---

##  Author & Contributor

- **GitHub:** [@Shirishaaa08](https://github.com/Shirishaaa08)

---

##  License

This project is open-source and available under the [MIT License](LICENSE).
