<?php
$bg = get_field('bg-contact-us', 'options');
$title = get_field('title_contact', 'options');
$content = get_field('text_contact', 'options');
$teams = get_field('team_items', 'options');
$form_title = get_field('form_title', 'options');
$form_shortcode = get_field('cp_contact_form');
$bottom_contact = get_field('contacts_footer', 'options');
?>
<section class="contact contact-block">
    <div class="content-width">
        <ul class="breadcrumb">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <div class="wrap">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-11.png" alt="Wave">
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
                        <?php if ($bg) : ?>
                            <div class="bg">
                                <?php echo wp_get_attachment_image($bg, 'full'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="wrap">
                            <?php if ($form_title) : ?>
                                <div class="title"><?php echo $form_title; ?></div>
                            <?php endif; ?>
                            <div class="icon-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-14.png" alt="">
                            </div>
                            <div class="">
                                <?php echo do_shortcode('[contact-form-7 id="' . $form_shortcode . '" title="Contact Page"]'); ?>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if (is_array($bottom_contact)) : ?>
            <div class="bottom">
                <?php foreach ($bottom_contact as $item) :
                    $icon = $item['icon'];
                    $title = $item['name'];
                    $contact = $item['link']; ?>
                    <div class="item">
                        <?php if ($icon) : ?>
                            <figure>
                                <img src="<?= $item['icon']['url']; ?>" alt="<?= $item['icon']['alt']; ?>">
                            </figure>
                        <?php endif; ?>
                        <div class="text">
                            <?php if ($title) : ?>
                                <p><?php echo $title; ?></p>
                            <?php endif; ?>
                            <?php if ($contact) :
                                $link_url = $contact['url'];
                                $link_title = $contact['title'];
                                $link_target = $contact['target'] ? $contact['target'] : '_self'; ?>
                                <p><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </div>
</section>