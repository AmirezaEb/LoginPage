<?php
include 'config/init.php';
?>

<html lang="pt-BR">
    
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>LoginPage</title>
</head>

<body>
  <div class="container" id="container">
    <!-- Sing Up -->
    <div class="form-container sign-up">
      <form method="POST" action="controller/singUp.php">
        <h2>Create Account</h2>
        <span>Use Your Email To Registration</span>
        <input type="text" name="username" placeholder="UserName">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="PassWord">
        <button type="submit" name="singup">Sign Up</button>
      </form>
    </div>
    <!-- Sing In -->
    <div class="form-container sign-in">
      <form method="POST" action="controller/singIn.php">
        <h2>Sign In</h2>
        <div class="social-icons">
          <a href="<?= Instagram ?>" class="icons"><i class="fa-brands fa-instagram"></i></a>
          <a href="<?= Telegram ?>" class="icons"><i class="fa-brands fa-telegram"></i></a>
          <a href="<?= GitHub ?>" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="<?= LinkedIn ?>" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>Use Your Email/PassWord</span>
        <input type="text" name="key" placeholder="UserName / Email">
        <input type="password" name="password" placeholder="PassWord">
        <a href="forgetPassword.php">Forget your Password?</a>
        <div style="display: flex;">
          <button type="submit" name="singin" style="margin-inline: 5px;">Sign In</button>
        </div>
        <?php
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotLogged') {
          echo "<p class='alert alert-danger'>Incorrect Username/Email Or Password</p>";
        }
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotCreated-1') {
          echo "<p class='alert alert-danger'>Please Complete All Fields</p>";
        }
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotCreated-2') {
          echo "<p class='alert alert-danger'>The Desired Email Is Duplicate</p>";
        }
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotCreated-3') {
          echo "<p class='alert alert-danger'>The Desired Username Is Duplicate</p>";
        }
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotCreated-4') {
          echo "<p class='alert alert-danger'>The Desired Password Is Not Secure</p>";
        }
        if (isset($_GET['Message']) && $_GET['Message'] == 'Logged') {
          echo "<p class='alert alert-success'>You Have SuccessFully Logged In</p>";
        }
        if (isset($_GET['Message']) && $_GET['Message'] == 'Created') {
          echo "<p class='alert alert-success'>Account Created SuccessFully</p>";
        }
        if (isset($_GET['Message']) && $_GET['Message'] == 'SendSucceeded') {
          echo "<p class='alert alert-success'>New password sent to email</p>";
        }
        ?>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>