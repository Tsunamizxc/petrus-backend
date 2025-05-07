<div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__line">
            <?
            foreach ($blist as $key => $value) {?>
                 <li class="breadcrumbs__line_item">
                    <a href="<?=$value['link'];?>" class="breadcrumbs__line_link <?=$value['class'];?>"><?=$value['name'];?></a>
                </li>
            <?}?>
            </ul>



            <div class="breadcrumbs__header">
                <div class="breadcrumbs__header_title">
                    <h1 class="breadcrumbs__title_item">
                        <?=$breadcrumbs?>
                    </h1>
                </div>
            </div>
        </div>
    </div>