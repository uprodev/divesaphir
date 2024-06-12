<?php
$title = get_field('photo_our_guests_title');
$image = get_field('photo_our_guests_image_');
?>
<section class="inst-slider-wrap guests-block">
    <div class="content-width">
        <?php if ($title) : ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($image) : ?>
            <div class="slider-wrap">
                <div class="swiper guests-slider ">
                    <div class="swiper-wrapper">
                        <?php foreach ($image as $img) : ?>
                            <div class="swiper-slide">
                                <figure>
                                    <?php echo wp_get_attachment_image($img, 'full'); ?>
                                </figure>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="swiper-button-prev guests-prev"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-1.png" alt="Arrow"></div>
                <div class="swiper-pagination guests-pagination"></div>
                <div class="swiper-button-next guests-next"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-2.png" alt="Arrow"></div>
            </div>
        <?php endif; ?>
    </div>
</section>