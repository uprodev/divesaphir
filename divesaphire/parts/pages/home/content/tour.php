<?php
$tour_title = get_field('tour_title');
$tour_text = get_field('tour_text');
$tour_button = get_field('tour_button');
$tour_images = get_field('tour_images');
?>

<section id="tour" class="tour">
    <div class="bg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bg-3.jpg" alt="">
        <div class="marquee-line-top marquee-2">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="">
            </figure>
        </div>

        <div class="marquee-line marquee-2-1">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="">
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="">
            </figure>
        </div>
    </div>
    <div class="content-width">
        <?php if ($tour_title) : ?>
            <h2><?php echo $tour_title; ?></h2>
        <?php endif; ?>
        <?php if ($tour_title) :
            $count = 1;
            $uper = 1; ?>
            <div class="content">
                <?php if ($tour_images) : ?>
                    <div class="board-wrap">
                        <?php foreach ($tour_images as $item) :
                            $ship = $item['ship']; ?>
                            <?php if ($ship) :
                            ?>
                                <?php foreach ($ship as $temp) :
                                    $img = $temp['images'];
                                    $ship_image_ = $temp['ship_image_'];
                                    $image_count = count($img);
                                    $count2 = 1; ?>
                                    <?php if ($count < 3) {
                                        $uper = $count;
                                    } else
                                        $uper++; ?>
                                    <div class="board-item-<?php echo $uper; ?> board-item">

                                        <div class="wrap-link">
                                            <?php for ($i = 0; $i < $image_count; $i++) : ?>
                                                <a href="#" class="dot dot-<?php echo $count2; ?>"></a>
                                            <?php $count2++;
                                            endfor; ?>
                                        </div>

                                        <?php if ($ship_image_) : ?>
                                            <img src="<?php echo wp_get_attachment_image_url($ship_image_, 'full'); ?>" alt="Bourd <?php echo $count; ?>">
                                        <?php endif; ?>
                                        <div class="text-deck"><?php if ($count === 1) {
                                                                    echo 'Lower';
                                                                } elseif ($count === 2) {
                                                                    echo 'Middle';
                                                                } elseif ($count === 3) {
                                                                    echo 'Upper';
                                                                } ?><br>Deck</div>
                                    </div>
                                <?php $count++;
                                endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php if ($tour_text) : ?>
                            <div class="text-wrap">
                                <p><?php echo $tour_text; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if ($tour_images) : ?>
                    <?php foreach ($tour_images as $item) :
                        $ship = $item['ship']; ?>
                        <?php if ($ship) :
                        ?>
                            <div class="slider-wrap">
                                <div class="swiper board-slider">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($ship as $icon) :
                                            $img = $icon['images']; ?>
                                            <?php if ($img) : ?>
                                                <?php foreach ($img as $tempa) : ?>
                                                    <div class="swiper-slide">
                                                        <figure>
                                                            <a href="<?php echo wp_get_attachment_image_url($tempa, 'full'); ?>" data-fancybox="gallery">
                                                                <img src="<?php echo wp_get_attachment_image_url($tempa, 'full'); ?>" alt="image">
                                                            </a>

                                                        </figure>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if ($tour_button) :
                    $link_url = $tour_button['url'];
                    $link_title = $tour_button['title'];
                    $link_target = $tour_button['target'] ? $tour_button['target'] : '_self';
                ?>
                    <div class="bottom">

                        <a class="btn-default btn-big" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                    </div>

                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>