<?php
$title_calendar = get_field('title_calendar');
$background_image_calendar = get_field('background_image_calendar');
$links_calendar = get_field('links_calendar');
$content_calendar = get_field('content_calendar');
$link_calendar = get_field('link_calendar');
?>
<section class="calendar">
  <div class="bg">
    <?php if ($background_image_calendar) : ?>
      <?php echo wp_get_attachment_image($background_image_calendar, 'full') ?>
    <?php endif; ?>
    <div class="marquee-line-top marquee-1">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="Wave" />
      </figure>
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="Wave" />
      </figure>
    </div>

    <div class="marquee-line marquee-1-1">
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="Wave" />
      </figure>
      <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="Wave" />
      </figure>
    </div>
  </div>
  <div class="content-width">
    <?php if ($title_calendar) : ?>
      <h2> <?php echo $title_calendar; ?> </h2>
    <?php endif; ?>
    <div class="content">
      <?php if (is_array($links_calendar)) : ?>
        <div class="btn-wrap">
          <?php foreach ($links_calendar as $item_link) :
            $link = $item_link['link'];
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a class="btn-default btn-border" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if ($content_calendar) : ?>
        <div class="text">
          <?php echo $content_calendar; ?>
        </div>
      <?php endif; ?>
      <?php if ($link_calendar) :
        $link_url = $link_calendar['url'];
        $link_title = $link_calendar['title'];
        $link_target = $link_calendar['target'] ? $link_calendar['target'] : '_self';
      ?>
        <div class="btn-wrap-full">
          <a class="btn-default btn-big" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>