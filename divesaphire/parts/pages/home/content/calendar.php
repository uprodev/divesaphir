<?php
$title_calendar = get_field('title_calendar');
$background_image_calendar = get_field('background_image_calendar');
$calendar_image = get_field('calendar_image');
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
    <div class="content-calendar">
      <?php if (!$calendar_image) : ?>
        <div class="calendar-img">

          <?php echo wp_get_attachment_image($calendar_image, 'full') ?>

        </div>
      <?php endif; ?>
      <!-- calendar -->
      <div class="calendar-script">
        <div id="insqwdgt-88AVdeZHdY">
          <script>
            (function(w, d, s, n, i, k, p) {
              var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s);
              w[n] = w[n] || {};
              j.async = true;
              j.src = '//app.inseanq.com/bookwidget.js?ts=' + (new Date().getTime()) + '&k=' + k + '&p=' + p;
              w[n].k = i;
              f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'NSQWDGT-88AVdeZHdY', '88AVdeZHdYdKauOfpETdvtXRC9UsAI4aZk0RB3Vzx3MdX2Ti8lRMM26aIxqx', '88AVdeZHdY', '2');
          </script>
        </div>
      </div>
      <!-- end -->
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