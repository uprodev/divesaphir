<?php
$title = get_field('title-about');
$gallery = get_field('gallery-about');
$gallery_text = get_field('gallery_text');
$content_about = get_field('content_about');
?>
<section class="about">
  <div class="content-width">
    <ul class="breadcrumb">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </ul>
    <?php if ($title) : ?>
      <h2><?php echo $title; ?></h2>
    <?php endif; ?>
    <div class="text-wrap">
      <?php if (is_array($gallery)) : ?>
        <div class="slider-wrap">
          <div class="swiper slider-img slider-img-1">
            <div class="swiper-wrapper">
              <?php foreach ($gallery as $logo) : ?>
                <div class="swiper-slide">
                  <figure>
                    <?php echo wp_get_attachment_image($logo, 'full') ?>
                  </figure>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="nav-wrap">
              <div class="swiper-button-prev prev-img-1"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-5-1.png" alt="Slider Arrow" /></div>
              <div class="wrap-dot">
                <div class="swiper-pagination pagination-img-1"></div>
              </div>
              <div class="swiper-button-next next-img-1"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-5-2.png" alt="Slider Arrow" /></div>
            </div>
            <?php if ($gallery_text) : ?>
              <p><i><?php echo $gallery_text; ?></i></p>
            <?php endif; ?>
            <div class="img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon-5.png" alt="" />
            </div>
          </div>
        </div>
      <?php endif ?>
      <?php if ($content_about) : ?>
        <?php echo $content_about; ?>
      <?php endif; ?>
    </div>
</section>