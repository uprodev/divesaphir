<?php

/*
Template Name: Registration
*/

get_header();

$title = get_field('title');
$logo = get_field('logo');
$form_id = get_field('form_id');
$bg = get_field('background_image');

?>

    <section class="banner-form">
        <?php if($bg):?>
            <div class="bg">
                <img src="<?= $bg['url'];?>" alt="<?= $bg['alt'];?>">
                <div class="marquee-line">
                    <figure>
                        <img src="<?= get_template_directory_uri();?>/img/volna_bottom.png" alt="">
                    </figure>
                    <figure>
                        <img src="<?= get_template_directory_uri();?>/img/volna_bottom.png" alt="">
                    </figure>
                </div>
            </div>
        <?php endif;?>
        <div class="content-width">
            <div class="form-wrap">
                <?php if($title):?>
                    <h1><?= $title;?></h1>
                <?php endif;?>
                <?php if($logo):?>
                    <div class="img-wrap">
                        <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                    </div>
                <?php endif;?>
                <?php if($form_id):?>
                    <div class="form-default">
                        <?= do_shortcode('[contact-form-7 id="'.$form_id.'"]');?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>

<?php get_footer();
