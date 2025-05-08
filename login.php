<?
$breadcrumbs = 'Авторизация';
$blist = [
    'first' => [
        'name' => 'Главная',
        'link' => 'index.php',
        'class' => ''
    ],
    'second' => [
        'name' => '/ Авторизация',
        'link' => 'login.php',
        'class' => 'active'
    ],

];


include 'vendor/components/header.php'; ?>
<main class="main">
    <? include 'vendor/components/breadcrumbs.php'; ?>
    <div class="form-container">
        <form action="vendor/functions/logincode.php" method="POST" class="form">
            <div class="form__line">
                <label for="" class="form__line_label">Логин</label>
                <input type="text" class="form__line_input" name="login">
            </div>
            <div class="form__line">
                <label for="" class="form__line_label">Пароль</label>
                <input type="text" class="form__line_input" name="password">
            </div>
            <div class="form__buttons">
                <button type="submit" class="form__buttons_button" name="button-login">
                    Вход
                </button>
                  
                <p class="form__buttons_text">
                    Нет аккаунта?<a href="reg.php" class="form__buttons_link">Зарегистрируйтесь</a>
                </p>
            </div>
              <?if(!empty($_SESSION['errors']['errorlog'])){?>
                    
                <p class="errortext"><?=$_SESSION['errors']['errorlog'];?></p>
           
               <? }?>
        </form>
        <img src="img/blueitem.png" alt="" class="blue-bg">

    </div>
<?include 'vendor/components/contacts.php';?>
</main>
<?include 'vendor/components/footer.php';?>