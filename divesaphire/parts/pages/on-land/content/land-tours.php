<?php
$title = get_field('land_tours_title');
$contents = get_field('land_tours_contents');
$images = get_field('land_tours_image_gallery');
?>

<section class="tabs-wrap">
    <div class="content-width">
        <ul class="breadcrumb">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>

        <?php if ($title) : ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if (is_array($contents)) : $count = 1; ?>
            <div class="tabs">
                <ul class="tabs-menu">
                    <?php foreach ($contents as $item) :
                        $location = $item['location']; ?>
                        <?php if ($location) : ?>
                            <li id="tab-<?php echo $count; ?>"><?php echo $location; ?></li>
                        <?php endif; ?>
                    <?php $count++;
                    endforeach; ?>

                </ul>

                <div class="tab-content">
                    <?php foreach ($contents as $item) :
                        $days = $item['days'];
                        $gallery = $item['land_tours_image_gallery']; ?>
                        <div class="tab-item">
                            <?php if (is_array($days)) : ?>
                                <div class="info-wrap">
                                    <?php foreach ($days as $temp) :
                                        $day = $temp['day'];
                                        $schedules = $temp['schedules']; ?>
                                        <div class="info-item">
                                            <?php if ($day) : ?>
                                                <div class="title"><?php echo $day; ?></div>
                                            <?php endif; ?>
                                            <?php if ($schedules) : ?>
                                                <div class="wrap">
                                                    <?php echo $schedules; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            <?php endif; ?>
                            <?php if (is_array($gallery)) : ?>
                                <div class="slider-wrap">
                                    <div class="swiper slider-3n  slider-3n-1">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($gallery as $img) : ?>
                                                <div class="swiper-slide">
                                                    <figure>
                                                        <a href="<?php echo esc_url($img['url']); ?>" data-fancybox="gallery">
                                                            <img src="<?php echo esc_url($img['url'], 'full'); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                                        </a>

                                                    </figure>

                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                    <div class="swiper-button-prev slider-3n-prev-1"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-1.png" alt="Arrow"></div>
                                    <div class="swiper-pagination slider-3n-pagination-1"></div>
                                    <div class="swiper-button-next slider-3n-next-1"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-2.png" alt="Arrow"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        <?php endif; ?>
    </div>
</section>