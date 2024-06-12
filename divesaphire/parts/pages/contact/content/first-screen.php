<?php
$first_background_image = get_field('first_background_image');
$first_title = get_field('first_title');
$first_sub_title = get_field('first_sub_title');
$link = get_field('link');
?>
<section class="home-banner">
    <?php if ($first_background_image) : ?>
        <div class="bg">
            <?php echo wp_get_attachment_image($first_background_image, 'full'); ?>
        </div>
    <?php endif; ?>
    <div class="content-width">
        <div class="content">
            <div class="title-wrap">
                <?php if ($first_title) : ?>
                    <h1><?php echo $first_title; ?></h1>
                <?php endif; ?>
                <?php if ($first_sub_title) : ?>
                    <p class="sub-title"><?php echo $first_sub_title; ?></p>
                <?php endif; ?>
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