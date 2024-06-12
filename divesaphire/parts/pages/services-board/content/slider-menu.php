<?php
$slider_menu_title = get_field('slider_menu_title');
$slider_menu_gallery = get_field('slider_menu_gallery');
?>
<section class="slider-menu-block">
    <div class="content-width">
        <?php if ($slider_menu_title) : ?>
            <h2><?php echo $slider_menu_title; ?></h2>
        <?php endif; ?>
        <?php if ($slider_menu_gallery) : ?>
            <div class="swiper slider-menu">
                <div class="swiper-wrapper">
                    <?php foreach ($slider_menu_gallery as $img) : ?>
                        <?php if ($img) : ?>
                            <div class="swiper-slide">
                                <a href="<?php echo wp_get_attachment_image_url($img, 'full'); ?>" data-fancybox="menu">
                                    <img src="<?php echo esc_url($img['url']); ?>" alt="menu">
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>
        <?php endif; ?>
    </div>
</section>