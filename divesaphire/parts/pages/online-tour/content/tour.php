<?php
$tour_title = get_field('tour_title');
$tour_text = get_field('tour_text');
$tour_parahraph = get_field('tour_parahraph');
$tour_images = get_field('tour_images');
?>

<section class="tour tour-info">

    <div class="content-width">
        <ul class="breadcrumb">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
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
                                    $count2 = 1;
                                    if ($count <= 3) {
                                        $uper = $count;
                                    } else
                                        $uper = 2; ?>
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
                                        <div class="text-deck text-black"><?php if ($count === 1) {
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
                <?php if ($tour_parahraph) : ?>
                    <div class="bottom">
                        <?php echo $tour_parahraph; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>