<?php
$service_info_title = get_field('service_info_title');
$service_info_sub_title = get_field('service_info_sub_title');
$service_info_content = get_field('service_info_content');
?>
<section class="services-info">
    <div class="content-width">
        <ul class="breadcrumb">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <?php if ($service_info_title) : ?>
            <h2><?php echo $service_info_title; ?></h2>
        <?php endif; ?>
        <?php if ($service_info_sub_title) : ?>
            <div class="sub-title"><?php echo $service_info_sub_title; ?></div>
        <?php endif; ?>
        <?php if (is_array($service_info_content)) : ?>
            <div class="list-item">
                <?php foreach ($service_info_content as $item) :
                    $image = $item['image'];
                    $title = $item['title'];
                    $advantages = $item['advantages']; ?>
                    <div class="item">
                        <?php if ($title) : ?>
                            <div class="item-title">
                                <img src="<?php if ($image) {
                                                echo wp_get_attachment_image_url($image, 'full');
                                            } ?>" alt="">
                                <?php echo $title; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($advantages) : ?>
                            <?php echo $advantages; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </div>
</section>