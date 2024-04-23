<?php 

include '../config/init.php';

if (isset($_POST['singin'])) {
    try {
        #params
        $key = $_POST['key'];
        $password = $_POST['password'];
        $user = receiveUser($key, $password);
        if ($user == 1) {
            #Login
            header('Location: ../index.php?Message=Logged');
        } else {
            throw new Exception('');
        }
    } catch (Exception $e) {
        #NotLogin
        header('Location: ../index.php?Error=NotLogged');
    }
}
