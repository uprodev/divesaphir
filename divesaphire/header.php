<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php if (defined('GAU4_KEY')) {  ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo constant("GAU4_KEY"); ?>"></script>
	<script>
 	 window.dataLayer = window.dataLayer || [];
  	 function gtag(){dataLayer.push(arguments);}
  	 gtag('js', new Date());

	 gtag('config', '<?php echo constant("GAU4_KEY"); ?>');
</script>
    <?php	} ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
</head>
<body <?php body_class() ?>>

    <?php

    $logo = get_field('logo', 'options');
    $phones = get_field('phone_numbers', 'options');
    $header_socials = get_field('header_socials', 'options');
    ?>

    <header>
        <div class="top-line">
            <div class="content-width">
                <div class="logo-wrap">
                    <a href="<?= get_home_url(); ?>">
                        <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
                        <span class="text"><?php the_field('tagline', 'options'); ?></span>
                    </a>
                </div>
                <?php if (is_array($header_socials) && $header_socials) : ?>
                    <ul class="soc">
                        <?php foreach ($header_socials as $item) :
                            if ($item['link'] && $item['icon']) :
                        ?>
                                <li><a href="<?php echo $item['link']; ?>" rel="nofollow" target="_blank"><i class="fab <?php echo $item['icon']; ?>"></i></a></li>
                        <?php
                            endif;
                        endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="tel-wrap">
                    <?php if ($phones) : ?>
                        <ul>
                            <?php foreach ($phones as $phone) : ?>
                                <li>
                                    <a href="tel:+<?= phone_clear($phone['phone']); ?>"><i class="fal fa-mobile-android"></i><?= $phone['phone']; ?> <?= $phone['country'] ? '(' . $phone['country'] . ')' : ''; ?></a>
                                    <?php if ($phone['icons']) :
                                        foreach ($phone['icons'] as $ic) : ?>
                                            <div class="icon">
                                                <i class="<?= $ic['icon'] ?>"></i>
                                            </div>
                                    <?php endforeach;
                                    endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
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
        <nav class="top-menu">
            <div class="content-width">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'menu' => 'Header',
                    'container' => false,
                    'echo' => true,
                    'fallback_cb' => 'menu-1',
                    'items_wrap' => '<ul id="%1$s" class="menu">%3$s</ul>',
                    'walker' => new Custom_Walker_Nav_Menu()
                ]);
                ?>
                <!-- <div class="lang-wrap nice">

                    <div class="nice-select" tabindex="0">
                        <img src="img/icon-2.png" alt="">
                        <ul class="list">
                            <li data-value="0" class="option selected"><img src="img/icon-2.png" alt=""></li>
                            <li data-value="1" class="option"><img src="img/icon-2.png" alt=""></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </nav>
    </header>
    <div class="menu-responsive" id="menu-responsive" style="display: none">
        <div class="top">
            <div class="close-menu">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Icon Close Mob Menu"></a>
            </div>
        </div>
        <div class="wrap">
            <div class="logo-wrap">
                <a href="<?= get_home_url(); ?>">
                    <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
                </a>
            </div>
            <nav class="mob-menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'menu' => 'Header',
                    'container' => false,
                    'echo' => true,
                    'fallback_cb' => 'menu-1',
                    'items_wrap' => '<ul id="%1$s" class="menu">%3$s</ul>',
                    'walker' => new Custom_Walker_Nav_Menu()
                ]);
                ?>
            </nav>
            <!-- <div class="lang-wrap nice">

                <div class="nice-select" tabindex="0">
                    <img src="img/icon-2.png" alt="">
                    <ul class="list">
                        <li data-value="0" class="option selected"><img src="img/icon-2.png" alt=""></li>
                        <li data-value="1" class="option"><img src="img/icon-2.png" alt=""></li>
                    </ul>
                </div>
            </div> -->
            <div class="tel-wrap">
                <?php if ($phones) : ?>
                    <ul>
                        <?php foreach ($phones as $phone) : ?>
                            <li>
                                <a href="tel:+<?= phone_clear($phone['phone']); ?>"><i class="fal fa-mobile-android"></i><?= $phone['phone']; ?> <?= $phone['country'] ? '(' . $phone['country'] . ')' : ''; ?></a>
                                <?php if ($phone['icons']) :
                                    foreach ($phone['icons'] as $ic) : ?>
                                        <div class="icon"><i class="<?= $ic['icon'] ?>"></i></div>
                                <?php endforeach;
                                endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <main>
