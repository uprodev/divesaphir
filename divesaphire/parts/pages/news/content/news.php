<?php
$blog_title = get_field('blog_title');
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
);
$custom_query = new WP_Query($args); ?>

<section class="news">
    <div class="content-width">
        <ul class="breadcrumb">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </ul>
        <?php if ($blog_title) : ?>
            <h2><?php echo $blog_title; ?></h2>
        <?php endif; ?>
        <div class="content">

            <?php
            if ($custom_query->have_posts()) :
                while ($custom_query->have_posts()) : $custom_query->the_post();

                    $permalink = get_permalink();
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $post_date = get_the_date('d,m,Y');
            ?>
                    <div class="item">
                        <figure>
                            <a href="<?php echo esc_url($permalink); ?>">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="date"><?php echo esc_html($post_date); ?></p>
                            <div class="title">
                                <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                            </div>
                            <p class="text"><?php echo esc_html($excerpt); ?></p>
                            <div class="more">
                                <a href="<?php echo esc_url($permalink); ?>">READ MORE</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>


        </div>
    </div>
</section>