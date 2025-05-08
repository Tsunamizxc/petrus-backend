<?
$breadcrumbs = $_GET['name'];
$blist = [
    'first' => [
        'name' => 'Главная',
        'link' => 'index.php',
        'class' => ''
    ],
    'second' => [
        'name' => '/ ' . $_GET['name'],
        'link' => 'article.php?id=' . $_GET['id'] . '&name='. $_GET['name'],
        'class' => 'active'
    ],
];

include 'vendor/components/header.php';

?>
<main class="main">
    <? include 'vendor/components/breadcrumbs.php'; ?>
            <div class="statec">
                <div class="container">
                    <div class="statec__row">
                        <?
                        $id = $_GET['id'];
                        $article = $link ->query("SELECT * FROM `articles` WHERE `id` = '$id'");
                        foreach ($article as $key => $value) {?>
                        <div class="statec__row_img">
                            <img src="img/upload/<?=$value['detail_img']?>" alt="" class="statec__img_item">
                        </div>
                        <div class="statec__row_content">
                            <h2 class="statec__content_title">
                               <?=$value['title']?>
                            </h2>
                            <p class="statec__content_description">
                                <?=$value['detail_description']?>    
                            </p>
                            <a href="articles.php" class="statec__content_link">
                                < К списку новостей</a>
                        </div>
                        <?}?>
                    </div>
                </div>
                <img src="img/blueitem.png" alt="" class="blue-bg">
            </div>
<?include 'vendor/components/contacts.php';?>
</main>
<?include 'vendor/components/footer.php';?>