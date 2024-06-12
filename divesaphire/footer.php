</main>
<?php
$video_title = get_field('video_title', 'options');
$video_links_to_video = get_field('video_links_to_video', 'options');
?>

<?php if (!is_page(8)): ?>
    <section class="video-slider-wrap">
        <div class="content-width">
            <?php if ($video_title) : ?>
                <h2><?php echo $video_title; ?></h2>
            <?php endif; ?>
            <?php if ($video_links_to_video) : ?>
                <div class="slider-wrap">
                    <div class="swiper video-slider video-slider-1">
                        <div class="swiper-wrapper">
                            <?php foreach ($video_links_to_video as $item) :
                                $iframe = $item['iframe'];
                                $title_for_video = $item['title_for_video']; ?>
                                <?php if ($iframe) : ?>
                                    <div class="swiper-slide">
                                        <div class="iframe-wrap">
                                            <?php echo $iframe; ?>
                                        </div>
                                        <?php if ($title_for_video) : ?>
                                            <div class="title"><?php echo $title_for_video; ?></div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-button-prev video-prev"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-1.png" alt=""></div>
                    <div class="swiper-pagination video-pagination"></div>
                    <div class="swiper-button-next video-next"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-2.png" alt=""></div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
    $photo_title = get_field('photo_title', 'options');
    $photographs = get_field('photographs', 'options');
    ?>
    <section class="inst-slider-wrap">
    <!-- <div class="content-width">
        <?php if ($photo_title) : ?>
            <h2><?php echo $photo_title; ?></h2>
        <?php endif; ?>
        <?php if ($photographs) : ?>
            <div class="slider-wrap">
                <div class="swiper inst-slider ">
                    <div class="swiper-wrapper">
                        <?php foreach ($photographs as $item) :
                            $image = $item['image']; ?>
                            <div class="swiper-slide">
                                <figure>
                                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                                </figure>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="swiper-button-prev inst-prev"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-1.png" alt=""></div>
                <div class="swiper-pagination inst-pagination"></div>
                <div class="swiper-button-next inst-next"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-10-2.png" alt=""></div>
            </div>
        <?php endif; ?>
    </div> -->
    <div class="content-width"> <?php echo do_shortcode('[instagram-feed feed=1]'); ?></div>
</section>
<?php
$social_title = get_field('social_title', 'options');
$socials_media = get_field('socials_media', 'options');
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
<?php
$bg = get_field('bg-contact-us', 'options');
$title = get_field('title_contact', 'options');
$content = get_field('text_contact', 'options');
$teams = get_field('team_items', 'options');
$form_title = get_field('form_title', 'options');
$form_shortcode = get_field('form_shortcode', 'options');
?>
<section class="contact">
    <div class="bg">
        <?php if ($bg) :
            echo wp_get_attachment_image($bg, 'full');
            ?>
        <?php endif; ?>
        <div class="marquee-line-top marquee-4">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="Wave" />
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="Wave" />
            </figure>
        </div>

        <div class="marquee-line marquee-4-1">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="Wave" />
            </figure>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="Wave" />
            </figure>
        </div>
    </div>
    <div class="content-width">
        <?php if ($title) : ?>
            <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($content) : ?>
            <div class="top">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>
        <div class="content">
            <?php if (is_array($teams)) : ?>
                <div class="info-wrap">
                    <?php foreach ($teams as $item) :
                        $image = $item['image'];
                        $name = $item['name'];
                        $position = $item['position'];
                        $subtitle = $item['subtitle'];
                        $phone = $item['phone'];
                        $time_zone = $item['time_zone'];
                        $email = $item['email'];
                        ?>
                        <div class="item">
                            <div class="img-wrap">
                                <?php if ($content) : ?>
                                    <figure>
                                        <?php echo wp_get_attachment_image($image, 'full'); ?>
                                    </figure>
                                <?php endif; ?>
                                <?php if ($name) : ?>
                                    <p class="name"><?php echo $name; ?></p>
                                <?php endif; ?>
                                <?php if ($position) : ?>
                                    <p><?php echo $position; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="info-wrap">
                                <?php if ($subtitle) : ?>
                                    <p class="sub-title"><?php echo $subtitle; ?></p>
                                <?php endif; ?>
                                <div class="icon-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-11.png" alt="Wave" />
                                </div>
                                <ul>
                                    <?php if ($phone) : ?>
                                        <li>
                                            <a href="tel:<?php echo preg_replace("/[^0-9]/", "",  $phone); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-12-1.png" alt="Phone" /><?php echo $phone; ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($time_zone) : ?>
                                        <li>
                                            <p><img src="<?php echo get_template_directory_uri(); ?>/img/icon-12-2.png" alt="Time" /><?php echo $time_zone; ?></p>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($email) : ?>
                                        <li>
                                            <a href="mailto:<?php echo $email; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-12-3.png" alt="Email" /><?php echo $email; ?></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if ($form_shortcode) : ?>
                <div class="form-wrap">
                    <?php if ($form_title) : ?>
                        <div class="title"><?php echo $form_title; ?></div>
                    <?php endif; ?>
                    <div class="icon-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-13.png" alt="Form Title" />
                    </div>
                    <div class="">
                        <?php echo do_shortcode($form_shortcode); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="btn-top">
    <a href="#">
        <i class="fal fa-long-arrow-up"></i>
        <img src="<?= get_template_directory_uri(); ?>/img/icon-3.png" alt="">
        <span class="text"><?php the_field('button_up_text', 'options'); ?></span>
    </a>
</div>
<?php endif ?>

<footer>

    <?php

    $contacts_footer = get_field('contacts_footer', 'options');
    $socials = get_field('socials', 'options');
    $site_devepopment_text = get_field('site_devepopment_text', 'options');
    $link_bottom_footer = get_field('link-bottom-footer', 'options');
    $copyright = get_field('copyright', 'options');
    ?>
    <div class="content-width">
        <?php if ($contacts_footer) :
            foreach ($contacts_footer as $cf) : ?>
                <div class="item">
                    <figure>
                        <img src="<?= $cf['icon']['url']; ?>" alt="<?= $cf['icon']['alt']; ?>">
                    </figure>
                    <div class="text">
                        <p><?= $cf['name']; ?></p>
                        <?php $link = $cf['link'];

                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <p><a class="" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach;
        endif; ?>

    </div>
    <?php if (is_array($socials)) : ?>
        <section class="soc-block">
            <div class="content-width">
                <ul class="soc">
                    <?php foreach ($socials as $item) :
                        if ($item['link'] && $item['social_icon']) :
                            ?>
                            <li><a href="<?php echo $item['link']; ?>" rel="nofollow" target="_blank"><i class="fab <?php echo $item['social_icon']; ?>"></i></a></li>
                            <?php
                        endif;
                    endforeach; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>
    <section class="cookies cookies_boxs">
        <div class="content-width">
            <p>This website uses cookies to provide a better user experience</p>
            <div class="btn-wrap">
                <a href="#" id="cookieAcceptBtn" class="btn-default btn-ok btn-white">AGREE</a>
                <a href="#" class="btn-default btn-not btn-white">disAGREE</a>
            </div>
        </div>
    </section>
    <div class="bottom">
        <div class="content-width">
            <?php if ($site_devepopment_text) : ?>
                <div class="">
                    <?php echo $site_devepopment_text; ?>
                </div>
            <?php endif; ?>
            <?php if ($link_bottom_footer) :
                $link_url = $link_bottom_footer['url'];
                $link_title = $link_bottom_footer['title'];
                $link_target = $link_bottom_footer['target'] ? $link_bottom_footer['target'] : '_self';
                ?>
                <div class="btn-wrap">
                    <a class="btn-default btn-oks btn-white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                </div>
            <?php endif; ?>
            <?php if ($copyright) : ?>
                <p class="info"> <?php echo $copyright; ?></p>
            <?php endif; ?>
        </div>
    </div>
</footer>

<div id="default-popup " style="display:none;">
    <div class="popup-main">
    </div>
</div>


<div class="cursor">
    <span><img src="<?php echo get_template_directory_uri(); ?>/img/cursor.png" alt="Cursor"></span>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var isCookieAccepted = Cookies.get("cookieAccepted");
        var cookiesBlock = document.querySelector(".cookies_boxs");
        var cookieAcceptBtn = document.getElementById("cookieAcceptBtn");
        console.log("isCookieAccepted:", isCookieAccepted);
        if (isCookieAccepted !== "true") {
            cookiesBlock.style.display = "block";

            cookieAcceptBtn.addEventListener("click", function(e) {
                e.preventDefault();

                Cookies.set("cookieAccepted", "true", {
                    expires: 7,
                });

                cookiesBlock.style.display = "none";
            });
        }
    });
</script>

<?php wp_footer(); ?>
</body>

</html>