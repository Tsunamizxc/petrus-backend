<?
session_start();
if(!isset($_SESSION['user'])){
    header('location:index.php');
    
}
if($_SESSION['user']['role'] == '0'){
    header('location:index.php');
}
$breadcrumbs = 'Админ панель';
$blist = [
    'first' => [
        'name' => 'Главная',
        'link' => 'index.php',
        'class' => ''
    ],
    'second' => [
        'name' => '/ Админ панель',
        'link' => 'admin.php',
        'class' => 'active'
    ],

];

include 'vendor/components/header.php';


?>
<main class="main">
    <? include 'vendor/components/breadcrumbs.php'; ?>
            <div class="adminp">
                <div class="container">
                    <a href="logout.php" class="admnip__logout">Выйти из учетной записи</a>
                    <div class="adminp__row">
                        <div class="adminp__row_article">
                            <div class="adminp__article_header">
                                <h2 class="adminp__header_title">
                                    Добавление статей
                                </h2>
                            </div>
                            <div class="adminp__article_form">
                                <form action="vendor/functions/admincode.php" method="post" class="adminp__form" enctype="multipart/form-data">
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Выберите раздел
                                        </label>
                                        <select name="sticker" id="">
                                            <option value="article">Статья</option>
                                            <option value="news">Новость</option>
                                        </select>
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Добавить картинку
                                        </label>
                                        <input type="file" class="adminp__line_input" name="image">
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Добавить детальную картинку
                                        </label>
                                        <input type="file" class="adminp__line_input" name="imagedet">
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Добавить заголовок
                                        </label>
                                        <input type="text" class="adminp__line_input" name="title">
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label" >
                                            Добавить описание
                                        </label>

                                        <textarea id="" class="adminp__line_textarea" name="description"></textarea>
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label" >
                                            Добавить детально описание
                                        </label>

                                        <textarea id="" class="adminp__line_textarea" name="descriptiondet"></textarea>
                                    </div>
                                    <div class="adminp__form_btns">
                                        <button class="adminp__btns_btn" type="submit" name="article-btn">
                                            Отправить
                                        </button>
                                    </div>
                                    <? if (isset($_SESSION['error']['admin'])) {?>
                                        <p class="errortext"><?=$_SESSION['error']['admin'];?></p>
                                    <?} ?>
                                </form>
                                <div class="adminp__delarticle_form">
                                    <form action="vendor/functions/delarticlescode.php" method='POST' class="adminp__form">
                                        <div class="adminp__form_line">
                                            <div class="adminp__article_header">
                                                <h2 class="adminp__header_title">
                                                    Удаление статей
                                                </h2>
                                            </div>
                                            <label for="" class="adminp__line_label">
                                                Удалить запись пресс-центра:
                                            </label>
                                            <? $articlesDel = $link ->query("SELECT * FROM `articles`");
                                            if($articlesDel->num_rows === 0){?>
                                                <p class="errortext">Записей нету</p>
                                            <?}?>
                                            <select name="delArticlesItem" id="">
                                                <?foreach ($articlesDel as $key => $value) {?>
                                                    <option value="<?=$value['id']?>">
                                                        <?=$value['title']?>
                                                    </option>
                                                <?}?>
                                            </select>
                                        </div>
                                        <div class="adminp__form_btns">
                                            <button class="adminp__btns_btn" type="submit" name="article-del">
                                                Удалить
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="adminp__row_contacts">
                            <div class="adminp__contacts_header">
                                <h2 class="adminp__header_title">
                                    Просмотр заявок
                                </h2>
                            </div>
                            <div class="adminp__contacts_form">
                                <?
                                $contacts = $link ->query("SELECT * FROM `contacts`");
                                if($contacts->num_rows === 0){?>
                                    <p class="errortext">Таблица записей пуста</p>
                                <?}?>
                                <?
                                
                                foreach ($contacts as $key => $value) {?>
                                <form action="vendor/functions/delcontactscode.php" method="POST" class="adminp__form contactsf">
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Имя:
                                        </label>
                                        <p class="adminp__line_text">
                                           <?=$value['name'];?>
                                        </p>
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Телефон:
                                        </label>
                                        <p class="adminp__line_text">
                                            <?=$value['phone'];?>
                                        </p>
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Компания:
                                        </label>
                                        <p class="adminp__line_text">
                                            <?=$value['company'];?>
                                        </p>
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Почта:
                                        </label>
                                        <p class="adminp__line_text">
                                            <?=$value['email'];?>
                                        </p>
                                    </div>
                                    <div class="adminp__form_line">
                                        <label for="" class="adminp__line_label">
                                            Вопрос:
                                        </label>
                                        <p class="adminp__line_text">
                                            <?=$value['message'];?>
                                        </p>
                                    </div>
                                    <input type="hidden" value='<?=$value['id'];?>' name="delitem">
                                    <div class="adminp__form_btns">
                                        <button class="adminp__btns_btn red" name='delbtn' type="submit">
                                            Удалить
                                        </button>
                                    </div>
                                </form>
                            <?}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<? include 'vendor/components/footer.php'; ?>