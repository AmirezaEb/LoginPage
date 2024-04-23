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
  <title>صفحه ورود</title>
</head>

<body>
  <div class="container" id="container">
    <!-- Sing Up -->
    <div class="form-container sign-up">
      <form method="POST" action="controller/singUp.php">
        <h2>ساخت حساب کاربری</h2>
        <span>لطفا ایمیل خود را وارد کنید</span>
        <input type="text" name="username" placeholder="نام کاربری">
        <input type="email" name="email" placeholder="ایمیل">
        <input type="password" name="password" placeholder="رمزعبور">
        <button type="submit" name="singup">ثبت نام</button>
      </form>
    </div>
    <!-- Sing In -->
    <div class="form-container sign-in">
      <form method="POST" action="controller/singIn.php">
        <h2>ورود به حساب کاربری</h2>
        <div class="social-icons">
          <a href="<?= Instagram ?>" class="icons"><i class="fa-brands fa-instagram"></i></a>
          <a href="<?= Telegram ?>" class="icons"><i class="fa-brands fa-telegram"></i></a>
          <a href="<?= GitHub ?>" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="<?= LinkedIn ?>" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>لطفا ایمیل و رمزعبور خود را وارد کنید</span>
        <input type="text" name="key" placeholder="نام کاربری / ایمیل">
        <input type="password" name="password" placeholder="رمزعبور">
        <a href="forgetPassword.php">رمزعبورم را فراموش کردم</a>
        <div style="display: flex;">
          <button type="submit" name="singin" style="margin-inline: 5px;">ورود</button>
        </div>
        <?php
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotLogged') {
          echo "<p class='alert alert-danger'>نام کاربری / ایمیل یا رمزعبور اشتباه است</p>";
        }
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotCreated-1') {
          echo "<p class='alert alert-danger'>لطفا تمامی مشخصات خود را وارد کنید</p>";
        }
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotCreated-2') {
          echo "<p class='alert alert-danger'>ایمیل مورد نظر تکراری میباشد</p>";
        }
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotCreated-3') {
          echo "<p class='alert alert-danger'>نام کابری مورد نظر تکراری میباشد</p>";
        }
        if (isset($_GET['Error']) && $_GET['Error'] == 'NotCreated-4') {
          echo "<p class='alert alert-danger'>لطفا رمز عبور قوی تری وارد کنید</p>";
        }
        if (isset($_GET['Message']) && $_GET['Message'] == 'Logged') {
          echo "<p class='alert alert-success'>شما با موفقیت وارد شدید</p>";
        }
        if (isset($_GET['Message']) && $_GET['Message'] == 'Created') {
          echo "<p class='alert alert-success'>حساب کاربری با موفقیت ایجاد شد</p>";
        }
        if (isset($_GET['Message']) && $_GET['Message'] == 'SendSucceeded') {
          echo "<p class='alert alert-success'>رمز عبور جدید به ایمیل شما ارسال شد</p>";
        }
        ?>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>خوش آمدید</h1>
          <p>برای استفاده از تمامی امکانات سایت، مشخصات شخصی خود را وارد کنید</p>
          <button class="hidden" id="login">ورود</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>سلام دوست من</h1>
          <p>
              با مشخصات شخصی خود ثبت نام کنید تا از همه ویژگی های سایت استفاده کنید
          </p>
          <button class="hidden" id="register">ثبت نام</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>