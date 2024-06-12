<?php
$social_title = get_field('social_title');
$socials_media = get_field('socials_media');
?>
<section class="soc-block">
    <div class="content-width">
        <?php if ($social_title) : ?>
            <h2><?php echo $social_title; ?></h2>

        <?php endif; ?>
        <?php if ($socials_media) : ?>
            <ul class="soc">
                <?php foreach ($socials_media as $item) :
                    $link = $item['link'];
                    $icon = $item['icon']; ?>
                    <?php if ($icon) : ?>
                        <li><a href="<?php echo  $link ?: '#' ?>" target='_blank'><i class="fab <?php echo $icon; ?>"></i></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>