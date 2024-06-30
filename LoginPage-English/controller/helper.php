<?php

# Send New Password Email
function SendEmail($sendBy, $sendTo, $newPassword)
{
    $subject = "New Password";
    $message = "
    <html>
    <head>
        <title>HTML email</title>
        <style>
            b {
                display: block;
                width: 50%;
                text-align: center;
                padding: 1rem;
                margin-top: .5rem;
                border: 1px solid #b97dcf;
                background-color: #f6cef9;
                font-size: 1.2rem;
                border-radius: .5rem;
                cursor: pointer;
            }
            a {
                color: #a61fd7;
            }
            p {
                margin: 0;
            }
        </style>
    </head>
    <body>
        <h2>welcome dear,</h2>
        <h4>Your New Password is : <b class='password'>$newPassword</b></h4>
        <a href='https://t.me/HeroExpert_ir'>Chanell Telegram</a>
    </body>
    </html>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$sendBy>" . "\r\n";
    mail($sendTo, $subject, $message, $headers);
}

# Generate New Password
function newPassword($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#-_&!?*';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

# Add New User To DataBase
function addUser($userName, $passWord, $email)
{
    global $connect;
    $sql = "INSERT INTO users (username,password,email) VALUES (:username,:password,:email);";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':username', $userName,PDO::PARAM_STR);
    $stmt->bindParam(':password', $passWord,PDO::PARAM_STR);
    $stmt->bindParam(':email', $email,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    return $result;
}

# Recevr User Information
function receiveUser($key, $passWord)
{
    global $connect;
    $sql = "SELECT * FROM users WHERE (username = :username OR email = :email) AND (password = :password);";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':username', $key,PDO::PARAM_STR);
    $stmt->bindParam(':email', $key,PDO::PARAM_STR);
    $stmt->bindParam(':password', $passWord,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    return $result;
}

# Search And Find Email User
function emailUser($email)
{
    global $connect;
    $sql = "SELECT * FROM users WHERE (email = :email);";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':email', $email,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    return $result;
}

# Search And Find UserName User
function userNameUser($Username)
{
    global $connect;
    $sql = "SELECT * FROM users WHERE (username = :username);";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':username', $Username,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    return $result;
}

# Check Password Strength
function passwordUser($passWord)
{
    $hero = 0;
    $size = strlen($passWord);
    foreach (count_chars($passWord, 1) as $v) {
        $p = $v / $size;
        $hero -= $p * log($p) / log(2);
    }
    $strength = ($hero / 3.2) * 100;
    if ($strength > 100) {
        $strength = 100;
    }
    if (!preg_match("#[0-9]+#", $passWord)) {
        return 1;
    }
    if (!preg_match("#[A-Z]+#", $passWord)) {
        return 1;
    }
    if ($strength < 60) {
        return 1;
    }
    return 0;
}

# Add New PassWord User To DataBase
function resetPassword($email, $NewPassword)
{
    global $connect;
    $sql = "UPDATE users SET password=:passWord WHERE (email = :email);";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':email', $email,PDO::PARAM_STR);
    $stmt->bindParam(':passWord', $NewPassword,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->rowCount();
    return $result;
}
?>