<?php
$ad_bg_image = get_field('ad_bg_image');
$ad_title = get_field('ad_title');
$ad_content = get_field('ad_content');
?>
<section class="choose-block">
    <?php if ($ad_bg_image) : ?>
        <div class="bg">
            <?php echo wp_get_attachment_image($ad_bg_image, 'full'); ?>
        </div>
    <?php endif; ?>
    <div class="content-width">
        <?php if ($ad_title) : ?>
            <h2><?php echo $ad_title; ?></h2>
        <?php endif; ?>
        <?php if (is_array($ad_content)) : ?>
            <div class="content">
                <?php foreach ($ad_content as $item) :
                    $image = $item['image'];
                    $text = $item['text']; ?>
                    <div class="item">
                        <?php if ($image) : ?>
                            <figure>
                                <?php echo wp_get_attachment_image($image, 'full'); ?>
                            </figure>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                            <div class="text">
                                <p><?php echo $text; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </div>
</section>