<?php
$fs_bg_image = get_field('fs_bg_image');
$fs_content_left = get_field('fs_content_left');
$content_right = get_field('content_right');
?>
<section class="text-2x">
    <?php if ($fs_bg_image) : ?>
        <div class="bg">
            <?php echo wp_get_attachment_image($fs_bg_image, 'full'); ?>
        </div>
    <?php endif; ?>
    <div class="content-width">
        <div class="content">
            <?php if ($fs_content_left) :
                $title = $fs_content_left['title'];
                $image_first = $fs_content_left['image_first'];
                $text_first = $fs_content_left['text_first'];
                $list_title = $fs_content_left['list_title'];
                $list = $fs_content_left['list'];
                $image_second = $fs_content_left['image_second'];
                $text_second = $fs_content_left['text_second'];
                $image_logo = $fs_content_left['image_logo'];
                $button = $fs_content_left['button'];
            ?>

                <div class="item item-1">
                    <?php if ($title) : ?>
                        <h2><?php echo $title ?></h2>
                    <?php endif; ?>
                    <div class="wrap">
                        <?php if ($image_first) : ?>
                            <?php echo wp_get_attachment_image($image_first, 'full'); ?>
                        <?php endif; ?>
                        <?php if ($text_first) : ?>
                            <p><?php echo $text_first ?></p>
                        <?php endif; ?>
                        <?php if ($list_title) : ?>
                            <p><?php echo $list_title ?></p>
                        <?php endif; ?>
                        <?php if ($list) : ?>
                            <?php echo $list ?>
                        <?php endif; ?>
                        <?php if ($image_second) : ?>
                            <?php echo wp_get_attachment_image($image_second, 'full'); ?>
                        <?php endif; ?>
                        <?php if ($text_second) : ?>
                            <p><?php echo $text_second ?></p>
                        <?php endif; ?>
                        <?php if ($image_logo) : ?>
                            <div class="icon-wrap">
                                <?php echo wp_get_attachment_image($image_logo, 'full'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($button) :
                            $link_url = $button['url'];
                            $link_title = $button['title'];
                            $link_target = $button['target'] ? $button['target'] : '_self'; ?>
                            <div class="btn-wrap">
                                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class=" btn-default"><?php echo esc_html($link_title); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($content_right) :
                $title = $content_right['title'];
                $text = $content_right['text'];
                $list_title = $content_right['list_title'];
                $image = $content_right['image'];
                $list = $content_right['list'];
                $button_name = $content_right['button_name']; ?>
                <div class="item item-2">
                    <?php if ($title) : ?>
                        <h2><?php echo $title ?></h2>
                    <?php endif; ?>
                    <div class="wrap">
                        <?php if ($text) : ?>
                            <p><?php echo $text ?></p>
                        <?php endif; ?>
                        <?php if ($list_title) : ?>
                            <p><?php echo $list_title ?></p>
                        <?php endif; ?>
                        <?php if ($image) : ?>
                            <?php echo wp_get_attachment_image($image, 'full'); ?>
                        <?php endif; ?>
                        <?php if ($list) : ?>
                            <?php echo $list ?>
                        <?php endif; ?>
                        <?php if ($button_name) : ?>
                            <div class="btn-wrap scroll">
                                <a href="#video-block" class="btn-default"><?php echo $button_name ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>