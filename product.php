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
        'link' => 'product.php?id=' . $_GET['id'] . '&name='. $_GET['name'],
        'class' => 'active'
    ],
];

include 'vendor/components/header.php';

?>
<main class="main">
    <? include 'vendor/components/breadcrumbs.php'; ?>
            <div class="pcontent">
                <div class="container">
                    <div class="pcontent__column">
                        <?
                $product = $link ->query("SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'");
                foreach ($product as $key => $value) {?>
                        <p class="pcontent__column_title">
                            <?=$value['detail_title']?>
                        </p>
                        <p class="pcontent__column_description">
                        <?=$value['detail_description']?>
                        </p>
                        <?}?>
                        <ul class="pcontent__column_list">
                            <?$allProducts = $link ->query("SELECT * FROM `productlistitems`
                             WHERE `product_id` = '{$_GET['id']}'");
                                foreach ($allProducts as $key => $value) {?>
                                    <li class="pcontent__list_item"><?=$value['listitem']?></li>
                            <?}?>
                        </ul>
                    </div>
                </div>
            </div>
<?include 'vendor/components/contacts.php';?>
</main>
<?include 'vendor/components/footer.php';?>