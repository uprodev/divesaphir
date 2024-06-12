<?php
$mailing_title = get_field('mailing_title');
$mailing_image = get_field('mailing_image');
$mailing_form = get_field('mailing_form');
?>
<section class="send-me">
    <div class="content-width">
        <div class="content">
            <div class="title">
                <?php if ($mailing_title) : ?>
                    <div class="icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-18.png" alt="wave"></div>
                    <h2><?php echo $mailing_title; ?></h2>
                    <div class="icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-18.png" alt="wave"></div>
                <?php endif; ?>
            </div>
            <div class="form-wrap">
                <?php if ($mailing_image) : ?>
                    <figure>
                        <?php echo wp_get_attachment_image($mailing_image, 'full'); ?>
                    </figure>
                <?php endif; ?>
                <?php if ($mailing_form) : ?>
                    <div class="">
                        <?php echo do_shortcode($mailing_form); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>