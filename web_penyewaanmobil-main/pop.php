<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Setting Akun</title>
  <link rel="stylesheet" href="pop.css">
  <style>
    /* Popup Styles */
    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #4d90fe;
      color: white;
      padding: 40px 20px;
      text-align: center;
      border-radius: 20px;
      z-index: 999;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
      width: 350px;
    }

    .popup h3 {
      margin-bottom: 15px;
    }

    .popup p {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .btn-close {
      padding: 8px 20px;
      background-color: white;
      color: black;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-close:hover {
      background-color: #ddd;
    }

    .hidden {
      display: none;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="header">
    <div class="nav-left">Home</div>
    <div class="nav-center">Selamat Datang Bagas</div>
    <div class="nav-right">👤 Bagas</div>
  </header>

  <!-- Sidebar + Form -->
  <div class="container">
    <aside class="sidebar">
      <div class="profile-card">
        <p>👤 Bagas</p>
      </div>
      <button class="btn">My Account</button>
      <button class="btn logout">Logout</button>
    </aside>

    <main class="main-content">
      <h2>Setting</h2>
      <h4>Account Information</h4>
      <div class="form-box">
        <form method="POST">
          <label>Full Name</label><br>
          <input type="text" name="name"><br><br>
          <label>Birthdate</label><br>
          <input type="text" placeholder="DD" style="width: 50px;">
          <input type="text" placeholder="MM" style="width: 50px;">
          <input type="text" placeholder="YYYY" style="width: 80px;"><br><br>
          <label>No Telepon</label><br>
          <input type="text" name="phone"><br><br>
          <button type="submit" name="save" class="btn-save">Simpan</button>
        </form>
      </div>
    </main>
  </div>

  <!-- Popup Notification -->
  <?php if (isset($_POST['save'])): ?>
  <div class="popup" id="popup">
    <h3>PEMBERITAHUAN</h3>
    <p>DATA ANDA BERHASIL DI UBAH</p>
    <button class="btn-close" onclick="document.getElementById('popup').style.display='none'">Selesai</button>
  </div>
  <?php endif; ?>

  <!-- Footer -->
  <footer class="footer">
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
      <p>Copyright ©2025 Bagas-YouAI</p>
    </div>
  </footer>

</body>
</html>
