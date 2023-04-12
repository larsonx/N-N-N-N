<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width, initial-scale 1.0" />
  <link rel="stylesheet" href="style.css" />
  <script src="script.js" defer></script>
  <title>GameHub</title>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="brand-title">GameHub</div>
      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="navbar-links">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="games.php">Games</a></li>
          <li><a href="registreren.php">Registreren</a></li>
          <li><a href="inloggen.php">Inloggen</a></li>
        </ul>
    </nav>
    </div>
  </header>
<div class="wrapper">
<div class="form-box">
  <h2>Login</h2>
  <form action="#">
    <div class="input-box">
      <span class="icon"><ion-icon name="mail-outline"></ion-icon></ion-icon></span>
      <input type="email" required>
      <label>Email</label>
    </div>
    <div class="input-box">
      <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></ion-icon></span>
      <input type="password" required>
      <label>Password</label>
    </div>
    <div class="remember-forgot">
      <label><input type="checkbox">
      Remember me</label>
      <a href="#">Forgot Password?</a>
    </div>
    <button type="submit" class="login-button">Login
    </button>
    <div class="login-register">
      <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
    </div>
  </form>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>