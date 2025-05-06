<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Setting Akun</title>
  <link rel="stylesheet" href="profil.css">
</head>
<body>

  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-left">Home</div>
      <div class="header-center">Selamat Datang Bagas</div>
      <div class="header-right">
        <img src="https://via.placeholder.com/20" alt="icon"> Bagas
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="main-container">
    <aside class="sidebar">
      <div class="profile-card">
        <div class="profile-icon">
          <img src="https://via.placeholder.com/50" alt="Bagas">
        </div>
        <p class="username">Bagas</p>
      </div>
      <button class="btn-account">My Account</button>
      <button class="btn-logout">Logout</button>
    </aside>

    <section class="content">
      <h2 class="title">Setting</h2>
      <div class="tabs">
        <span class="tab-active">Account Information</span>
      </div>
      <div class="form-section">
        <h3>Personal Data</h3>
        <form>
          <label>Full Name</label>
          <input type="text" name="fullname" placeholder="Full Name">

          <label>Birthdate</label>
          <div class="birthdate">
            <input type="text" placeholder="DD">
            <input type="text" placeholder="MM">
            <input type="text" placeholder="YYYY">
          </div>

          <label>ID Number</label>
          <input type="text" name="idnumber" placeholder="ID Number">

          <button type="submit" class="btn-save">Simpan</button>
        </form>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-top">
      <div>
        <h4>Follow us on</h4>
        <p>Instagram<br>Facebook<br>Tiktok</p>
      </div>
      <div>
        <h4>Product</h4>
        <p>Personal Assistant<br>Dashboard<br>Category</p>
      </div>
      <div>
        <h4>Contact</h4>
        <p>+62 812 3456 8910<br>theassistant@gmail.com</p>
      </div>
    </div>
    <div class="footer-apps">
      <img src="https://via.placeholder.com/120x40?text=Google+Play">
      <img src="https://via.placeholder.com/120x40?text=App+Store">
    </div>
    <div class="footer-bottom">
      <p>Copyright © 2025 Bagas-YouAI</p>
    </div>
  </footer>

</body>
</html>
