<?php

/*
Template Name: Full Charters
*/

get_header();
?>
<?php
$title = get_field('title');
$subtitle = get_field('subtitle');
$image = get_field('image');
$link = get_field('link');
?>
<section class="home-banner">
    <?php if ($image) : ?>
        <div class="bg">
            <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
    <?php endif ?>
    <div class="content-width">
        <div class="content">
            <div class="title-wrap">
                <?php if ($title) : ?>
                    <h1><?php echo $title; ?></h1>
                <?php endif ?>
                <?php if ($subtitle) : ?>
                    <p class="sub-title"><?php echo $subtitle; ?></p>
                <?php endif ?>
            </div>

            <?php if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <div class="btn-wrap-full">
                    <a class="btn-default btn-big" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<?php
$body_menu = get_field('blog_menu', 'option');
if (is_array($body_menu)) :
?>
    <nav class="menu-body">
        <div class="content-width">
            <ul>
                <?php foreach ($body_menu as $item) :
                    $link = $item['link'];
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <li> <a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
<?php endif; ?>
<?php
$title = get_field('content_title');
$text = get_field('text');
$contact_form = get_field('contact_form');
$bg = get_field('background_image');
$title_fo_contact_form = get_field('title_fo_contact_form');
?>

<section class="banner-form pb-30">
    <?php if ($bg) : ?>
        <div class="bg">
            <img src="<?= $bg['url']; ?>" alt="<?= $bg['alt']; ?>">
            <div class="marquee-line">
                <figure>
                    <img src="<?= get_template_directory_uri(); ?>/img/volna_bottom.png" alt="wave">
                </figure>
                <figure>
                    <img src="<?= get_template_directory_uri(); ?>/img/volna_bottom.png" alt="wave">
                </figure>
            </div>
        </div>
    <?php endif; ?>
    <div class="content-width">
        <div class="text-wrap">
            <?php if ($title) : ?>
                <h1><?= $title; ?></h1>
            <?php endif; ?>
            <?php if ($text) : ?>

                <p><?= $text; ?></p>

            <?php endif; ?>
            <div class="form-clearfix">
                <div class="panel panel-default col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">

                    <p class="panel-heading center-block text-center"><?php echo $title_fo_contact_form ? $title_fo_contact_form : ''; ?></p>

                    <div class="panel-body">
                        <?php if ($contact_form) : ?>

                            <?= do_shortcode('[contact-form-7 id="' . $contact_form . '"]'); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
