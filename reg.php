<?
$breadcrumbs = 'Регистрация';
$blist = [
    'first' => [
        'name' => 'Главная',
        'link' => 'index.php',
        'class' => ''
    ],
    'second' => [
        'name' => '/ Регистрация',
        'link' => 'reg.php',
        'class' => 'active'
    ],

];

include 'vendor/components/header.php';

?>
<main class="main">
    <? include 'vendor/components/breadcrumbs.php'; ?>
    <div class="form-container">
        <form action="vendor/functions/regcode.php" method="post" class="form">
            <div class="form__line">
                <label for="" class="form__line_label">Почта</label>
                <input type="email" class="form__line_input" name="email">
            </div>
            <div class="form__line">
                <label for="" class="form__line_label">Логин</label>
                <input type="text" class="form__line_input" name="login">
            </div>
            <div class="form__line">
                <label for="" class="form__line_label">Пароль</label>
                <input type="password" class="form__line_input" name="password">
            </div>
            <div class="form__line">
                <label for="" class="form__line_label">Повторите пароль</label>
                <input type="password" class="form__line_input" name="check_password">
            </div>
            <div class="form__buttons">
                <button type="submit" class="form__buttons_button reg" name="reg-btn">
                    Зарегистрироваться
                </button>

                <p class="form__buttons_text">
                    Есть аккаунт?<a href="login.php" class="form__buttons_link">Войдите</a>
                </p>
            </div>
            <? if (isset($_SESSION['error']['reg'])) {?>
                <p class="errortext"><?=$_SESSION['error']['reg'];?></p>
            <?} ?>
        </form>
        <img src="img/blueitem.png" alt="" class="blue-bg">

    </div>
<?include 'vendor/components/contacts.php';?>
</main>
<?include 'vendor/components/footer.php';?>