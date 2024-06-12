<?php
$services_title = get_field('services_title');
$services_sub_title = get_field('services_sub_title');
$services_include = get_field('services_include');
$services_text = get_field('services_text');
$services_plan_trip = get_field('services_plan_trip');
?>
<section class="services">
    <div class="content-width">
        <ul class="breadcrumb">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>

        <?php if ($services_title) : ?>
            <h2><?php echo $services_title; ?></h2>
        <?php endif; ?>
        <?php if ($services_sub_title) : ?>
            <div class="sub-title"><?php echo $services_sub_title; ?></div>
        <?php endif; ?>
        <?php if (is_array($services_include)) : ?>
            <ul class="check">
                <?php foreach ($services_include as $item) :
                    $image = $item['image'];
                    $text = $item['text']; ?>
                    <li>
                        <?php if ($image) : ?>
                            <figure>
                                <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="Include">
                            </figure>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                            <p><?php echo $text; ?></p>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if ($services_text) : ?>
            <div class="text">
                <?php echo $services_text; ?>

            </div>
        <?php endif; ?>
        <?php if (is_array($services_plan_trip)) : ?>
            <ul class="accordion accordion-services">
                <?php foreach ($services_plan_trip as $item) :
                    $title = $item['title'];
                    $sub_title = $item['sub_title'];
                    $map_image = $item['map_image'];
                    $content = $item['content']; ?>
                    <li class="accordion-item ">
                        <?php if ($title) : ?>
                            <div class="accordion-thumb">
                                <p><?php echo $title; ?></p>
                            </div>
                        <?php endif; ?>
                        <div class="accordion-panel">
                            <div class="wrap">
                                <div class="text-wrap">
                                    <?php if ($sub_title) : ?>
                                        <div class="title"><?php echo $sub_title; ?></div>
                                    <?php endif; ?>
                                    <?php if (is_array($content)) : $count = 1; ?>
                                        <ol>
                                            <?php foreach ($content as $temp) :
                                                $text = $temp['text'];
                                                $image = $temp['image'];
                                                $day_event = $temp['day_event'];
                                                $pdf_file_main = $temp['pdf_file_main']; ?>
                                                <?php if ($text) : ?>
                                                    <li>

                                                        <p class="day-trip">Day <?php echo $count; ?></p>
                                                        <div>
                                                            <a href="<?php if ($image) echo wp_get_attachment_image_url($image, 'full'); ?>" data-fancybox="image"><?php echo $text; ?></a>
                                                            <?php if ($pdf_file_main) : ?>
                                                                <div class="btn-wrap">
                                                                    <a href="<?php echo $pdf_file_main['url']; ?>" data-fancybox data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "600px"}}}' class="btn-default">Read More</a>

                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <?php if (is_array($day_event)) :  ?>
                                                            <?php foreach ($day_event as $trip) :
                                                                $file = $trip['pdf_file'];
                                                                $img = $trip['day_trip_img'];
                                                                $title = $trip['day_trip_title'];
                                                            ?>
                                                                <?php if ($img) : ?>
                                                                    <div>
                                                                        <a href="<?php if ($img) echo wp_get_attachment_image_url($img, 'full'); ?>" data-fancybox="image">
                                                                            <div class="text-color"><?php echo $title ? $title : 'Day Trip'; ?></div>
                                                                        </a>
                                                                        <?php if ($file) : ?>
                                                                            <div class="btn-wrap">
                                                                                <a href="<?php echo $file['url']; ?>" data-fancybox data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "600px"}}}' class="btn-default">Read More</a>

                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php $link_title = null;
                                                                $link_url = null;
                                                                $link_target = null;

                                                            endforeach; ?>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endif; ?>
                                            <?php $count++;
                                            endforeach; ?>
                                        </ol>
                                    <?php endif; ?>
                                </div>
                                <?php if ($map_image) : ?>
                                    <figure>
                                        <a href="<?php echo wp_get_attachment_image_url($map_image, 'full'); ?>" data-fancybox=""><img src="<?php echo wp_get_attachment_image_url($map_image, 'full'); ?>" alt=""></a>
                                    </figure>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>



            </ul>
        <?php endif; ?>
    </div>
</section>