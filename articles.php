<?
$breadcrumbs = 'Пресс-центр';
$blist = [
    'first' => [
        'name' => 'Главная',
        'link' => 'index.php',
        'class' => ''
    ],
    'second' => [
        'name' => '/ Пресс-центр',
        'link' => 'articles.php',
        'class' => 'active'
    ],

];

include 'vendor/components/header.php';

?>
<main class="main">
    <? include 'vendor/components/breadcrumbs.php'; ?>
            <div class="states">
                <div class="container">
                    <div class="states__row">
                        <div class="states__row_menu">
                            <ul class="states__menu">
                                <li class="states__menu_item"><a href="articles.php" class="states__menu_link">Все</a></li>
                                <li class="states__menu_item"><a href="articles.php?sticker=news" class="states__menu_link">Новости</a></li>
                                <li class="states__menu_item"><a href="articles.php?sticker=article" class="states__menu_link">Статьи</a></li>
                            </ul>
                        </div>
                        <div class="states__row_items">
                        <?
                        if(isset($_GET['sticker'])){
                            if($_GET['sticker'] == 'news'){
                                $articles = $link ->query("SELECT * FROM `articles` WHERE `sticker` = 'news'");
                            }elseif ($_GET['sticker'] == 'article') {
                                $articles = $link ->query("SELECT * FROM `articles` WHERE `sticker` = 'article'");
                            }
                        }else{
                            $articles = $link ->query("SELECT * FROM `articles`");
                        }
                        
                        foreach ($articles as $key => $value) {?>
                           <div class="press__row_item">
                                <div class="press__item_img">
                                    <img src="img/upload/<?=$value['img']?>" alt="" class="press__img_item">
                                </div>
                                <div class="press__row_content">
                                    <div class="press__content_icon">
                                       <?if($value['sticker'] == 'news'){
                                            echo 'Новости';
                                        }elseif($value['sticker'] == 'article') {
                                            echo 'Статьи';
                                        }?>
                                        
                                    </div>
                                    <h3 class="press__content_name">
                                        <?=$value['title']?>
                                    </h3>
                                    <p class="press__content_descripton">
                                        <?=mb_strimwidth($value['description'],0,109, "...")?>
                                    </p>
                                    <a href="article.php?id=<?=$value['id'];?>&name=<?=$value['title'];?>" class="press__content_btn">
                                        Подробнее >
                                    </a>
                                </div>
                            </div>
                        <?}?>
                            
                            

                        </div>
                    </div>
                </div>
            </div>
<?include 'vendor/components/contacts.php';?>
</main>
<?include 'vendor/components/footer.php';?>