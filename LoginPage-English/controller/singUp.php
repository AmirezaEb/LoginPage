<?php include '../config/init.php';

if (isset($_POST['singup'])) {
    try {
        #params
        $userName = $_POST['username'];
        $passWord = $_POST['password'];
        $email = $_POST['email'];
        $EmailVr = emailUser($email);
        $UserVr = userNameUser($userName);
        $PassVr = passwordUser($passWord);

        if (empty($userName) || empty($email) || empty($passWord)) {
            throw new Exception('NotCreated-1');
        }

        # Duplicate Email
        if ($EmailVr == 1) {
            throw new Exception('NotCreated-2');
        }

        # Duplicate Username
        if ($UserVr == 1) {
            throw new Exception('NotCreated-3');
        }

        # Duplicate Username
        if ($PassVr == 1) {
            throw new Exception('NotCreated-4');
        }

        $addUser = addUser($userName, $passWord, $email);
        header('Location: ../index.php?Message=Created');
    } catch (Exception $e) {
        header('Location: ../index.php?Error=' . $e->getMessage());
    }
}
