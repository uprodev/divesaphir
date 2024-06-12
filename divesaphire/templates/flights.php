<?php

/*
Template Name: Flight
*/

get_header();

$title = get_field('flight_title');
$flight_table = get_field('flight_table');

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

<section class="about about-text title-mt-2">
    <div class="content-width">
        <div class="row content__row">
            <div class="col-xs-12">
                <div class="hidden-xs">
                    <ul class="breadcrumb">
                        <?php if (function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </ul>
                </div>
                <div class="col-xs-12">
                    <div class="content__content-text content-text flights">
                        <?php if ($title) : ?>
                            <div class="content-text__header center-block text-center">
                                <h2> <?= $title; ?></h2>
                            </div>
                        <?php endif; ?>
                        <div class="content-text__description decor-link">

                            <?php if ($flight_table) : ?>

                                <?= $flight_table; ?>

                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer();
