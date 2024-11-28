<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SDN Harapan Jaya 18</title>
  <style>
    /* Reset beberapa elemen untuk konsistensi */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Setel font dasar */
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg, #f4f4f9, #e0e0e0);
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 20px;
      margin: 0;
      flex-direction: column;
    }

    /* Styling header */
    .header {
      text-align: center;
      padding: 30px;
      margin-bottom: 30px;
    }

    .header h1 {
      font-size: 36px;
      font-weight: bold;
      color: #003366;
    }

    .header .tagline {
      font-size: 18px;
      margin-top: 5px;
      color: #555;
    }

    /* Styling kontainer login */
    .login-container {
      width: 100%;
      max-width: 400px;
      padding: 30px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .login-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 18px 36px rgba(0, 0, 0, 0.15);
    }

    .login-container h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
      color: #003366;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-size: 14px;
      color: #555;
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 6px;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #003366;
      outline: none;
      box-shadow: 0 0 8px rgba(0, 51, 102, 0.2);
    }

    button[type="submit"] {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      background-color: #003366;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.3s;
    }

    button[type="submit"]:hover {
      background-color: #005bb5;
      transform: translateY(-2px);
    }

    /* Styling footer */
    footer {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #555;
    }

    footer a {
      color: #003366;
      text-decoration: none;
      font-weight: bold;
      transition: text-decoration 0.3s;
    }

    footer a:hover {
      text-decoration: underline;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
      .login-container {
        padding: 20px;
      }

      .header h1 {
        font-size: 28px;
      }

      .login-container h2 {
        font-size: 24px;
      }
    }

    @media (max-width: 480px) {
      .header h1 {
        font-size: 24px;
      }

      .login-container h2 {
        font-size: 20px;
      }

      input[type="text"],
      input[type="password"],
      button[type="submit"] {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>
  <!-- Header Title -->
  <div class="header">
    <h1>SDN HARAPAN JAYA 18</h1>
    <p class="tagline">Selamat datang, silakan login untuk melanjutkan.</p>
  </div>

  <div class="login-container">
    <h2>Login</h2>

    <!-- Form action is now pointing to login.php -->
    <form action="cek_login.php" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>

    <!-- Display error message if login fails -->
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
      <p style="color: red; text-align: center;">Username atau Password salah!</p>
    <?php endif; ?>

    <footer>
      <p>Belum punya akun? <a href="#">Daftar sekarang</a></p>
    </footer>
  </div>
</body>

</html>