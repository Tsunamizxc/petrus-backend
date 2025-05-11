<?
$breadcrumbs = 'Главная страница';
include 'vendor/components/header.php';?>
<main class="main">
    <!-- Swiper -->
    <div class="swiper mySwiper slidermain">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="mainslider-slide" style="background-image:url('img/bg1.png');">
                    <div class="container">
                        <div class="mainslider__header">
                            <h2 class="mainslider__header_title" data-aos="fade-up" data-aos-duration="600">
                                ПЕТРУС и ПЭТ-индустрия России – 30 лет вместе
                            </h2>
                            <p class="mainslider__header_description" data-aos="fade-down" data-aos-duration="600">
                                Мы стояли у истоков российской индустрии упаковки, начиная свою работу в 1994 году. Сегодня ПЕТРУС — один из ведущих производителей ПЭТ-упаковки в России.
                            </p>
                        </div>
                    </div>
                    <img src="img/whitebg.png" alt="" class="swiper-bg">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="mainslider-slide" style="background-image:url('img/bg2.png');">
                    <div class="container">
                        <div class="mainslider__header">
                            <h2 class="mainslider__header_title" data-aos="fade-up" data-aos-duration="600">
                                ПЕТРУС и ПЭТ-индустрия России – 30 лет вместе
                            </h2>
                            <p class="mainslider__header_description">
                                Мы стояли у истоков российской индустрии упаковки, начиная свою работу в 1994 году. Сегодня ПЕТРУС — один из ведущих производителей ПЭТ-упаковки в России.
                            </p>
                        </div>
                    </div>
                </div>
                <img src="img/whitebg.png" alt="" class="swiper-bg">
            </div>
            <div class="swiper-slide">
                <div class="mainslider-slide" style="background-image:url('img/bg3.png');">
                    <div class="container">
                        <div class="mainslider__header">
                            <h2 class="mainslider__header_title" data-aos="fade-up" data-aos-duration="600">
                                ПЕТРУС и ПЭТ-индустрия России – 30 лет вместе
                            </h2>
                            <p class="mainslider__header_description">
                                Мы стояли у истоков российской индустрии упаковки, начиная свою работу в 1994 году. Сегодня ПЕТРУС — один из ведущих производителей ПЭТ-упаковки в России.
                            </p>
                        </div>
                    </div>
                </div>
                <img src="img/whitebg.png" alt="" class="swiper-bg">
            </div>
            <div class="swiper-slide">
                <div class="mainslider-slide" style="background-image:url('img/bg4.png');">
                    <div class="container">
                        <div class="mainslider__header">
                            <h2 class="mainslider__header_title" data-aos="fade-up" data-aos-duration="600">
                                ПЕТРУС и ПЭТ-индустрия России – 30 лет вместе
                            </h2>
                            <p class="mainslider__header_description">
                                Мы стояли у истоков российской индустрии упаковки, начиная свою работу в 1994 году. Сегодня ПЕТРУС — один из ведущих производителей ПЭТ-упаковки в России.
                            </p>
                        </div>
                    </div>
                </div>
                <img src="img/whitebg.png" alt="" class="swiper-bg">

            </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
        <div class="container">
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="products" id="products">
        <div class="container">
            <div class="products__header">
                <div class="products__header_title">
                    Наша продукция
                </div>
            </div>
            <div class="swiper mySwiperProd">
                <div class="swiper-wrapper">
                     <?
                $products = $link ->query("SELECT * FROM `products`");
                foreach ($products as $key => $value) {?>
                    <div class="swiper-slide">
                        <div class="products__row_item">
                            <img src="img/<?=$value['img']?>" alt="" class="products__item_img">
                            <h3 class="products__item_name"><?=$value['title']?></h3>
                            <p class="products__item_description"><?=$value['description']?></p>
                            <a href="product.php?id=<?=$value['id']?>&name=<?=$value['title']?>" class="products__item_btn">Подробнее ></a>
                        </div>
                    </div>
                    <?}?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="products__row">
                 <?
                $products = $link ->query("SELECT * FROM `products`");
                foreach ($products as $key => $value) {?>
                <div class="products__row_item">
                    <img src="img/<?=$value['img']?>" alt="" class="products__item_img">
                    <h3 class="products__item_name"><?=$value['title']?></h3>
                    <p class="products__item_description"><?=$value['description']?></p>
                    <a href="product.php?id=<?=$value['id']?>&name=<?=$value['title']?>" class="products__item_btn">Подробнее ></a>
                </div>
                <?}?>
            </div>
        </div>
    </div>
    <div class="success">
        <div class="container">
            <div class="success__header">
                <h2 class="success__header_title">
                    Упаковка вашего успеха
                </h2>
            </div>
            <div class="success__row">
                <div class="success__row_item">
                    <img src="img/water.png" alt="" class="success__item_img">
                    <p class="success__item_name">ВОДА</p>
                </div>
                <div class="success__row_item">
                    <img src="img/milk.png" alt="" class="success__item_img">
                    <p class="success__item_name">МОЛОЧНАЯ ПРОДУКЦИЯ
                    </p>
                </div>
                <div class="success__row_item">
                    <img src="img/oil.png" alt="" class="success__item_img">
                    <p class="success__item_name">ПИЩЕВЫЕ МАСЛА
                    </p>
                </div>
                <div class="success__row_item">
                    <img src="img/sauce.png" alt="" class="success__item_img">
                    <p class="success__item_name">СОУСЫ</p>
                </div>
                <div class="success__row_item">
                    <img src="img/drink.png" alt="" class="success__item_img">
                    <p class="success__item_name">НАПИТКИ</p>
                </div>
                <div class="success__row_item">
                    <img src="img/juce.png" alt="" class="success__item_img">
                    <p class="success__item_name">СОКИ</p>
                </div>
                <div class="success__row_item">
                    <img src="img/beer.png" alt="" class="success__item_img">
                    <p class="success__item_name">ПИВО</p>
                </div>
                <div class="success__row_item">
                    <img src="img/himik.png" alt="" class="success__item_img">
                    <p class="success__item_name">БЫТОВАЯ ХИМИЯ И КОСМЕТИКА</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="map__header">
            <h2 class="map__header_title">
                Наши клиенты
            </h2>
        </div>
    </div>

    <div id="map">
        <img src="img/img-top.png" alt="" class="map__img-top">
        <img src="img/img-bottom.png" alt="" class="map__img-bottom">
    </div>

    <div class="press">
        <div class="container">
            <div class="press__header">
                <h2 class="press__header_title">
                    Пресс-центр
                </h2>
            </div>
            <div class="swiper mySwiperPress">
                <div class="swiper-wrapper">
                <? $product = $link ->query("SELECT * FROM `articles`");
                if($product->num_rows === 0){?>
                    <p class="errortext">Записей нету</p>
                <?}?>
                    <?
                    $product = $link ->query("SELECT * FROM `articles` LIMIT 2");
                    foreach ($product as $key => $value){?>
                    <div class="swiper-slide">
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
                                    <?=mb_strimwidth($value['description'],0,109, "...");?>
                                </p>
                                <a href="article.php?id=<?=$value['id'];?>&name=<?=$value['title'];?>" class="press__content_btn">
                                    Подробнее >
                                </a>
                            </div>
                        </div>
                    </div>
                    <?}?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="press__row">
                <? $product = $link ->query("SELECT * FROM `articles`");
                if($product->num_rows === 0){?>
                    <p class="errortext">Записей нету</p>
                <?}?>
                <?
                $product = $link ->query("SELECT * FROM `articles` LIMIT 2");
                foreach ($product as $key => $value){?>
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
                             <?=mb_strimwidth($value['description'],0,109, "...");?>
                        </p>
                        <a href="article.php?id=<?=$value['id'];?>&name=<?=$value['title'];?>" class="press__content_btn">
                        Подробнее >
                    </a>
                    </div>
                </div>
                <?}?>
            </div>
        </div>
        <img src="img/blueitem.png" alt="" class="blue-bg">
    </div>
<?include 'vendor/components/contacts.php';?>
</main>
<?include 'vendor/components/footer.php';?>