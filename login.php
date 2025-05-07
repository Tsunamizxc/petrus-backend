<? include 'vendor/components/header.php'; ?>
<main class="main">

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
                    <?if(!empty($_SESSION['errors']['errorlog'])){
                        echo $_SESSION['errors']['errorlog'];
                    }?>
                <p class="form__buttons_text">
                    Нет аккаунта?<a href="reg.php" class="form__buttons_link">Зарегистрируйтесь</a>
                </p>
            </div>
        </form>
        <img src="img/blueitem.png" alt="" class="blue-bg">

    </div>
    <div class="contacts" id="contacts">
        <div class="container">
            <div class="contacts__row">
                <div class="contacts__row_content">
                    <h2 class="contacts__content_title">
                        Контакты
                    </h2>
                    <p class="contacts__content_city">
                        Омск
                    </p>
                    <p class="contacts__content_name">
                        АО «ПЕТРУС»
                    </p>
                    <a href="#" class="contacts__content_number">
                        +7(999) 999 99-99
                    </a>
                    <p class="contacts__content_adress">
                        мкр. Береговой, ул. Иртышская, 1А,
                        Омск, Омская область, 644901 <a href="#" class="contacts__content_link">(На карте)</a>
                    </p>
                </div>
                <div class="contacts__row_forms">
                    <h2 class="contacts__forms_title">
                        Связаться с нами
                    </h2>
                    <form action="" method="post" class="contacts__forms_form">
                        <div class="contacts__form_row">
                            <div class="contacts__row_item">
                                <label for="" class="contacts__row_label">
                                    Имя*
                                </label>
                                <input type="text" class="contacts__row_input">
                            </div>
                            <div class="contacts__row_item">
                                <label for="" class="contacts__row_label">
                                    Компания*
                                </label>
                                <input type="text" class="contacts__row_input">
                            </div>
                        </div>
                        <div class="contacts__form_row">
                            <div class="contacts__row_item">
                                <label for="" class="contacts__row_label">
                                    Телефон*
                                </label>
                                <input type="text" class="contacts__row_input">
                            </div>
                            <div class="contacts__row_item">
                                <label for="" class="contacts__row_label">
                                    E-mail*
                                </label>
                                <input type="email" class="contacts__row_input">
                            </div>
                        </div>
                        <div class="contacts__form_textarea">
                            <label for="" class="contacts__textarea_name">Сообщение</label>
                            <textarea name="" id="" class="contacts__textarea_item"></textarea>
                        </div>
                        <button type="submit" class="contacts__textarea_btn">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
<? include 'vendor/components/footer.php'; ?>