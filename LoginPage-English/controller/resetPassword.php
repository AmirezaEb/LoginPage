<?php

include '../config/init.php';

if (isset($_POST['sendEmail'])) {
    try {
        #params
        $email = $_POST['email'];
        $newPassword = newPassword();
        $verifyEmail = emailUser($email);
        if ($verifyEmail == 1 && !empty($email)) {
            resetPassword($email, $newPassword);
            SendEmail(SendBy, $email, $newPassword);
            header('Location: ../index.php?Message=SendSucceeded');
        } else {
            header('Location: ../forgetPassword.php?Error=NotFoundEmail');
        }
    } catch (Exception $e) {
        #NotLogin
        header('Location: ../forgetPassword.php?Error=NotFoundEmail');
    }
}
?>