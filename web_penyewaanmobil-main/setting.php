<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Setting Akun</title>
  <link rel="stylesheet" href="setting.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- Header -->
  <header class="header">
    <a class="logo" href="dasboard.php">Home</a>
    <h1>Selamat Datang Bagas</h1>
    <div class="profile-icon"><i class="fas fa-user"></i> Bagas</div>
  </header>

  <div class="main-container">

    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="profile-card">
        <div class="profile-image">
          <i class="fas fa-user fa-3x"></i>
        </div>
        <p>Bagas</p>
      </div>
      <div class="sidebar-links">
        <button class="active"><i class="fas fa-user-circle"></i> My Account</button>
        <button><i class="fas fa-sign-out-alt"></i> Logout</button>
      </div>
    </aside>

    <!-- Main Content -->
    <section class="content">
      <h2>Setting</h2>
      <div class="tab-nav">
        <span class="active-tab">Account Information</span>
      </div>

      <div class="form-box">
        <h3>Personal Data</h3>
        <form>
  <label>Full Name</label>
  <input type="text" placeholder="Nama Lengkap">

  <div class="form-row">
    <div>
      <label>Email</label>
      <input type="email" placeholder="Email">
    </div>
    <div>
      <label>No. Telepon</label>
      <input type="number" placeholder="No. Telepon">
    </div>
  </div>

  <label>Birthday</label>
  <input type="date" placeholder="DD/MM/YYYY">

  <button type="submit" class="save-btn">Simpan</button>
</form>

          
      </div>
    </section>
  </div>

</body>
</html>
