<?php
require_once './my-config.php';

if (isset($_POST['connect'])) {
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        if (array_key_exists($login, $users)) {
            if(password_verify($password, $users[$login]['pwd'])) {
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['quota'] = $users[$login]['quota'];
                header('Location: views/dashboard.php');
            } else {
                echo 'Mot de passe incorrect';
            }
        } else {
            echo 'Login ou mot de passe incorrect';
        }
    }
}
