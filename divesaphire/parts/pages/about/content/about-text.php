<?php
$about_title = get_field('about_title');
$about_contents = get_field('about_contents');
?>
<section class="about about-text">
    <div class="content-width">
        <ul class="breadcrumb">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <?php if ($about_title) : ?>
            <h2><?php echo $about_title; ?></h2>
        <?php endif; ?>
        <?php if (is_array($about_contents)) : ?>
            <div class="text-wrap">
                <?php foreach ($about_contents as $item) :
                    $image = $item['image'];
                    $side_of_the_image = $item['side_of_the_image'];
                    $text = $item['text'];
                ?>
                    <?php if ($image) : ?>
                        <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="" class="<?php echo $side_of_the_image ? 'alignright' : 'alignleft'; ?>">
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <?php echo $text; ?>
                    <?php endif; ?>

                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>