<?php
$first_background_image = get_field('first_screen_image');
$first_title = get_field('first_screen_title');
$first_sub_title = get_field('first_screen_text');
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


            <div class="btn-wrap-full">
                <!--<a href="#" class="btn-default btn-big">download brochure</a>-->
            </div>

        </div>
    </div>
</section>