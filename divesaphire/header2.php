<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>
		<?php wp_head();?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class() ?>>

<?php

$logo = get_field('logo', 'options');
$phones = get_field('phone_numbers', 'options');

?>

<header>
    <div class="top-line">
        <div class="content-width">
            <div class="logo-wrap">
                <a href="<?= get_home_url();?>">
                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                    <span class="text"><?php the_field('tagline', 'options');?></span>
                </a>
            </div>
            <div class="tel-wrap">
                <?php if($phones):?>
                    <ul>
                        <?php foreach ($phones as $phone):?>
                            <li>
                                <a href="tel:+<?= phone_clear($phone['phone']);?>"><i class="fal fa-mobile-android"></i><?= $phone['phone'];?> <?= $phone['country']?'('.$phone['country'].')':'';?></a>
                                <?php if($phone['icons']):
                                    foreach ($phone['icons'] as $ic):?>
                                        <div class="icon"><img src="<?= $ic['icon']['url'];?>" alt="<?= $ic['icon']['alt'];?>"></div>
                                    <?php endforeach;
                                endif;?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
                <div class="open-menu">
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!--    <nav class="top-menu">-->
<!--        <div class="content-width">-->
<!--            <ul class="menu">-->
<!--                <li><a href="#">Home</a></li>-->
<!--                <li><a href="#">Calendar</a></li>-->
<!--                <li>-->
<!--                    <a href="#">Liveaboard<i class="far fa-chevron-down"></i></a>-->
<!--                    <ul class="sub-menu">-->
<!--                        <li><a href="#">Liveaboard 1</a></li>-->
<!--                        <li><a href="#">Liveaboard 2</a></li>-->
<!--                        <li><a href="#">Liveaboard 3</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Safaris<i class="far fa-chevron-down"></i></a>-->
<!--                    <ul class="sub-menu">-->
<!--                        <li><a href="#">Safaris 1</a></li>-->
<!--                        <li><a href="#">Safaris 2</a></li>-->
<!--                        <li><a href="#">Safaris 3</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">Kitesurfing</a></li>-->
<!--                <li>-->
<!--                    <a href="#">On-land<i class="far fa-chevron-down"></i></a>-->
<!--                    <ul class="sub-menu">-->
<!--                        <li><a href="#">On-land 1</a></li>-->
<!--                        <li><a href="#">On-land 2</a></li>-->
<!--                        <li><a href="#">On-land 3</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">Itineraries</a></li>-->
<!--                <li><a href="#">FAQ</a></li>-->
<!--                <li><a href="#">New</a></li>-->
<!--            </ul>-->
<!--            <div class="lang-wrap nice">-->
<!---->
<!--                <div class="nice-select" tabindex="0">-->
<!--                    <img src="--><?//= get_template_directory_uri();?><!--/img/icon-2.png" alt="">-->
<!--                    <ul class="list">-->
<!--                        <li data-value="0" class="option selected"><img src="--><?//= get_template_directory_uri();?><!--/img/icon-2.png" alt=""></li>-->
<!--                        <li data-value="1" class="option"><img src="--><?//= get_template_directory_uri();?><!--/img/icon-2.png" alt=""></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
</header>

<div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="top">
        <div class="close-menu">
            <a href="#"><img src="<?= get_template_directory_uri();?>/img/close.svg" alt=""></a>
        </div>
    </div>
    <div class="wrap">
        <div class="logo-wrap">
            <a href="<?= get_home_url();?>">
                <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                <span class="text"><?php the_field('tagline', 'options');?></span>
            </a>
        </div>
<!--        <nav class="mob-menu">-->
<!--            <ul class="menu">-->
<!--                <li><a href="#">Home</a></li>-->
<!--                <li><a href="#">Calendar</a></li>-->
<!--                <li>-->
<!--                    <a href="#">Liveaboard</a><span><i class="far fa-chevron-down"></i></span>-->
<!--                    <ul class="sub-menu">-->
<!--                        <li><a href="#">Liveaboard 1</a></li>-->
<!--                        <li><a href="#">Liveaboard 2</a></li>-->
<!--                        <li><a href="#">Liveaboard 3</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Safaris</a><span><i class="far fa-chevron-down"></i></span>-->
<!--                    <ul class="sub-menu">-->
<!--                        <li><a href="#">Safaris 1</a></li>-->
<!--                        <li><a href="#">Safaris 2</a></li>-->
<!--                        <li><a href="#">Safaris 3</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">Kitesurfing</a></li>-->
<!--                <li>-->
<!--                    <a href="#">On-land</a><span><i class="far fa-chevron-down"></i></span>-->
<!--                    <ul class="sub-menu">-->
<!--                        <li><a href="#">On-land 1</a></li>-->
<!--                        <li><a href="#">On-land 2</a></li>-->
<!--                        <li><a href="#">On-land 3</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">Itineraries</a></li>-->
<!--                <li><a href="#">FAQ</a></li>-->
<!--                <li><a href="#">New</a></li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--        <div class="lang-wrap nice">-->
<!---->
<!--            <div class="nice-select" tabindex="0">-->
<!--                <img src="--><?//= get_template_directory_uri();?><!--/img/icon-2.png" alt="">-->
<!--                <ul class="list">-->
<!--                    <li data-value="0" class="option selected"><img src="--><?//= get_template_directory_uri();?><!--/img/icon-2.png" alt=""></li>-->
<!--                    <li data-value="1" class="option"><img src="--><?//= get_template_directory_uri();?><!--/img/icon-2.png" alt=""></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
        <div class="tel-wrap">
            <?php if($phones):?>
            <ul>
                <?php foreach ($phones as $phone):?>
                    <li>
                        <a href="tel:+<?= phone_clear($phone['phone']);?>"><i class="fal fa-mobile-android"></i><?= $phone['phone'];?> <?= $phone['country']?'('.$phone['country'].')':'';?></a>
                        <?php if($phone['icons']):
                            foreach ($phone['icons'] as $ic):?>
                                <div class="icon"><img src="<?= $ic['icon']['url'];?>" alt="<?= $ic['icon']['alt'];?>"></div>
                            <?php endforeach;
                        endif;?>
                    </li>
                <?php endforeach;?>
            </ul>
            <?php endif;?>
        </div>
    </div>
</div>

<main>