<?php
$testimonials_title = get_field('testimonials_title', 'option');
$testimonials_reviews = get_field('testimonials_reviews', 'option');
$testimonials_bottom_title = get_field('testimonials_bottom_title', 'option');
$testimonials_socials = get_field('testimonials_socials', 'option');
?>
<section class="testimonials">
    <div class="bg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bg-4.jpg" alt="Background image">
        <div class="marquee-line-top marquee-3">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="">
            </figure>
        </div>

        <div class="marquee-line marquee-3-1">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="">
            </figure>
        </div>
    </div>
    <div class="content-width">
        <?php if ($testimonials_title) : ?>
            <h2><?php echo $testimonials_title; ?></h2>
        <?php endif; ?>
        <?php if ($testimonials_reviews) : ?>
            <div class="slider-wrap">
                <div class="swiper testimonials-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials_reviews as $item) :
                            $image = $item['image'];
                            $title = $item['title'];
                            $text = $item['text']; ?>
                            <div class="swiper-slide">
                                <?php if ($image) : ?>
                                    <figure>
                                        <?php echo wp_get_attachment_image($image, 'full'); ?>
                                    </figure>
                                <?php endif; ?>
                                <div class="text">
                                    <?php if ($title) : ?>
                                        <p class="title"><?php echo $title; ?></p>
                                    <?php endif; ?>
                                    <?php if ($text) : ?>
                                        <p class="cut"><?php echo $text; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="nav-wrap nav-wrap-white">
                    <div class="swiper-button-prev testimonials-prev"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-7-1.png" alt="Arrow"></div>
                    <div class="swiper-pagination testimonials-pagination"></div>
                    <div class="swiper-button-next testimonials-next"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-7-2.png" alt="Arrow"></div>
                </div>

            </div>
        <?php endif; ?>
        <?php if ($testimonials_socials) : ?>
            <div class="bottom">
                <?php if ($testimonials_bottom_title) : ?>
                    <p class="h3"><?php echo $testimonials_bottom_title; ?></p>
                <?php endif; ?>
                <ul>
                    <?php foreach ($testimonials_socials as $item) :
                        $link = $item['link'];
                        $image = $item['image']; ?>
                        <li>
                            <a href="<?php echo  $link ?: '#' ?> " target='_blank'>
                                <?php if ($image) : ?>
                                    <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="Socials image">
                                <?php endif; ?>
                            </a>
                        </li>

                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>