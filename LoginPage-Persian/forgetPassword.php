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
    <link rel="stylesheet"href="https://fonts.cdnfonts.com/css/iranian-sans">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>فراموشی رمزعبور</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form method="POST" action="controller/resetPassword.php">
                <h3>بازیابی رمزعبور</h3>
                <div class="social-icons">
                    <a href="<?= Instagram ?>" class="icons"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?= Telegram ?>" class="icons"><i class="fa-brands fa-telegram"></i></a>
                    <a href="<?= GitHub ?>" class="icons"><i class="fa-brands fa-github"></i></a>
                    <a href="<?= LinkedIn ?>" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <input type="email" name="email" placeholder="ایمیل خود را وارد کنید">
                <a href="index.php">صفحه ثبت نام</a>
                <div style="display: flex;">
                    <button type="submit" name="sendEmail">ارسال رمز عبور</button>
                </div>
                <?php
                if (isset($_GET['Error']) && $_GET['Error'] == 'NotFoundEmail') {
                    echo "<p class='alert alert-danger'>ایمیل مورد نظر یافت نشد</p>";
                }
                ?>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h3>سلام دوست خوبم</h3>
                    <p>
                        اگر رمز عبور خود را فراموش کردید، می توانید ایمیل خود را وارد کنید تا رمز عبور جدید برایتان ارسال شود
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/script.js"></script>

</html>
