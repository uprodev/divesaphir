<?php
$meet_title = get_field('stuff_title');
$meet_content = get_field('stuff_content');
?>
<section class="item-4n">
    <div class="content-width">
        <?php if ($meet_title) : ?>
            <h2><?php echo $meet_title; ?></h2>
        <?php endif; ?>
        <?php if (is_array($meet_content)) : ?>
            <div class="content">
                <?php foreach ($meet_content as $item) :
                    $image = $item['image'];
                    $title = $item['title'];
                    $sub_title = $item['sub_title'];
                    $text = $item['text'];
                ?>
                    <div class="item">
                        <?php if ($image) : ?>
                            <figure>
                                <?php echo wp_get_attachment_image($image, 'full'); ?>
                            </figure>
                        <?php endif; ?>
                        <div class="text">
                            <?php if ($title) : ?>
                                <p class="name"><?php echo $title; ?></p>
                            <?php endif; ?>
                            <?php if ($sub_title) : ?>
                                <p class="sub-title"><?php echo $sub_title; ?></p>
                            <?php endif; ?>
                            <?php if ($text) : ?>
                                <p><?php echo $text; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>