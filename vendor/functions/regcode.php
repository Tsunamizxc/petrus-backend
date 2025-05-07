<?
include 'core.php';

if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
        if ($key != 'reg-btn') {
            if ($value == '') {
                $_SESSION['error']['reg'] = 'Не все поля заполнены';
                header('location:../../reg.php');
            } else {
                $_SESSION['error']['reg'] = '';
            }
        }
    }
    if (empty($_SESSION['error']['reg'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $check_password = $_POST['check_password'];
        $email = $_POST['email'];
        if ($password == $check_password) {
            $_SESSION['error']['reg'] = '';
            $reg = $link->query("INSERT INTO `users`(`password`, `login`, `email`) 
        VALUES ('$password','$login','$email')");
            header('location:../../reg.php');
        } else {
            $_SESSION['error']['reg'] = 'Пароль не совпадает';
            header('location:../../reg.php');
        }
    }
}
