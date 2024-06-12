<?php
$why_us_title = get_field('why_us_title');
$why_us_labels = get_field('why_us_labels');
$why_us_image_gallery = get_field('why_us_image_gallery');
?>
<section class="round-slider-wrap round-item-8">
    <div class="content-width">
        <?php if ($why_us_title) : ?>
            <h2><?php echo $why_us_title; ?></h2>
        <?php endif; ?>
        <div class="slider-wrap">
            <div class="circle">
                <img src="<?php echo get_template_directory_uri(); ?>/img/circle-1.png" alt="" class="img img-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/circle-2.png" alt="" class="img img-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/circle-3.png" alt="" class="img img-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/circle-4.png" alt="" class="img img-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/circle-5.png" alt="" class="img img-5">
            </div>
            <?php if ($why_us_labels) :
                $count = 1; ?>
                <div class="text-wrap">
                    <?php foreach ($why_us_labels as $item) :
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
            <?php endif; ?>
            <?php if ($why_us_image_gallery) : ?>
                <div class="swiper round-slider round-slider-1">
                    <div class="swiper-wrapper">
                        <?php foreach ($why_us_image_gallery as $img) : ?>
                            <div class="swiper-slide">
                                <span class="img"><img src="<?php echo wp_get_attachment_image_url($img, 'full'); ?>" alt="image"></span>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($why_us_labels) : ?>
            <div class="mob-text">
                <ol>
                    <?php foreach ($why_us_labels as $item) :
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