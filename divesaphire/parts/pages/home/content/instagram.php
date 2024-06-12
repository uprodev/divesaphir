<?php
$photo_title = get_field('photo_title');
$photographs = get_field('photographs');
?>
<section class="inst-slider-wrap">
    <div class="content-width">
        <?php if ($photo_title) : ?>
            <h2><?php echo $photo_title; ?></h2>
        <?php endif; ?>
        <?php if ($photographs) : ?>
            <div class="slider-wrap">
                <div class="swiper inst-slider ">
                    <div class="swiper-wrapper">
                        <?php foreach ($photographs as $item) :
                            $image = $item['image']; ?>
                            <div class="swiper-slide">
                                <figure>
                                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                                </figure>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="swiper-button-prev inst-prev"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-1.png" alt=""></div>
                <div class="swiper-pagination inst-pagination"></div>
                <div class="swiper-button-next inst-next"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-2.png" alt=""></div>
            </div>
        <?php endif; ?>
    </div>


</section>