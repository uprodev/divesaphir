<?php
$features_title = get_field('why_us_title');
$features_labels = get_field('why_us_labels');
$features_image_gallery = get_field('why_us_image_gallery');
?>
<section class="round-slider-wrap round-item-10">
    <div class="content-width">
        <?php if ($features_title) : ?>
            <h2><?php echo $features_title; ?></h2>
        <?php endif; ?>
        <?php if ($features_labels) :
            $count = 1; ?>
            <div class="slider-wrap">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/circle-1.png" alt="circle" class="img img-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/circle-2.png" alt="circle" class="img img-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/circle-3.png" alt="circle" class="img img-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/circle-4.png" alt="circle" class="img img-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/circle-5.png" alt="circle" class="img img-5">
                </div>

                <div class="text-wrap">
                    <?php foreach ($features_labels as $item) :
                        $text = $item['text'];
                        $icon = $item['icon']; ?>
                        <div class="item item-<?php echo $count; ?>">
                            <a href="#">
                                <?php if ($text) : ?>
                                    <p><?php echo $text; ?></p>
                                <?php endif; ?>
                                <?php if ($icon) : ?>
                                    <figure>
                                        <?php echo wp_get_attachment_image($icon, 'full'); ?>
                                    </figure>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php $count++;
                    endforeach; ?>
                </div>

                <?php if ($features_image_gallery) : ?>
                    <div class="swiper round-slider round-slider-2">
                        <div class="swiper-wrapper">
                            <?php foreach ($features_image_gallery as $img) : ?>
                                <div class="swiper-slide">
                                    <span class="img"><img src="<?php echo wp_get_attachment_image_url($img, 'full'); ?>" alt="image"></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($features_labels) : ?>
            <div class="mob-text">
                <ol>
                    <?php foreach ($features_labels as $item) :
                        $text = strip_tags($item['text']); ?>
                        <li>
                            <p><?php echo $text; ?></p>
                        </li>

                    <?php endforeach; ?>
                </ol>
            </div>
        <?php endif; ?>

    </div>
</section>