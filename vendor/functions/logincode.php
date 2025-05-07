<?
include 'core.php';

if (isset($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $users = $link->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if ($users->num_rows > 0) {
        $user = $users->fetch_assoc();
        $_SESSION['user'] = [
            'id' => $user['id'],
            'login' => $user['id'],
            'email' => $user['id']

        ];
        $_SESSION['errors']['errorlog'] = '';
        header('location:../../admin.php');
    } else {
        $_SESSION['errors']['errorlog'] = 'Ошибка входа';
        header('location:../../login.php');
    }
}
