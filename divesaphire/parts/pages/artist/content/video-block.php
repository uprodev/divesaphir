<?php
$vb_title = get_field('vb_title');
$vb_content = get_field('vb_content');
?>
<section class="video-3x" id="video-block">
    <div class="content-width">
        <?php if ($vb_title) : ?>
            <h2><?php echo $vb_title; ?></h2>
        <?php endif; ?>
        <?php if ($vb_content) : ?>
            <div class="content">
                <?php foreach ($vb_content as $item) :
                    $link_to_video = $item['link_to_video'];
                    $preview_image = $item['preview_image'];
                    $text = $item['text']; ?>
                    <div class="item">
                        <?php if ($link_to_video) : ?>
                            <a data-fancybox href="<?php echo $link_to_video; ?>">
                                <?php if ($preview_image) : ?>
                                    <?php echo wp_get_attachment_image($preview_image, 'full'); ?>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                            <p><?php echo $text; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </div>
</section>