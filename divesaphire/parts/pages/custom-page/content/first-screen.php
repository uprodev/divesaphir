<?php
$title = get_field('title');
$subtitle = get_field('subtitle');
$image = get_field('image');
$link = get_field('link');
?>
<section class="home-banner">
  <?php if ($image) : ?>
    <div class="bg">
      <?php echo wp_get_attachment_image($image, 'full'); ?>
    </div>
  <?php endif ?>
  <div class="content-width">
    <div class="content">
      <div class="title-wrap">
        <?php if ($title) : ?>
          <h1><?php echo $title; ?></h1>
        <?php endif ?>
        <?php if ($subtitle) : ?>
          <p class="sub-title"><?php echo $subtitle; ?></p>
        <?php endif ?>
      </div>

      <?php if ($link) :
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <div class="btn-wrap-full">
          <a class="btn-default btn-big" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
      <?php endif ?>
    </div>
  </div>
</section>