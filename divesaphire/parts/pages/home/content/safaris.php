<?php
$bg = get_field('background_image_safaris');
$title_safaris = get_field('title_safaris');
$items_safaris = get_field('items_safaris');
?>
<section class="item-2x">
  <?php if ($bg) : ?>
    <div class="bg">
      <img src="<?php echo wp_get_attachment_image_url($bg, 'full'); ?>" alt="Safari Bg" class="rellax" data-rellax-speed="2" />
    </div>
  <?php endif; ?>
  <div class="content-width">
    <?php if ($title_safaris) : ?>
      <h2> <?php echo $title_safaris; ?> </h2>
    <?php endif; ?>
    <?php if (is_array($items_safaris)) : ?>
      <div class="content">
        <?php foreach ($items_safaris as $item) :
          $item_bg = $item['image'];
          $item_title = $item['title'];
          $item_text = $item['text'];
          $item_link = $item['link'];
        ?>
          <div class="item">
            <?php if ($item_bg) : ?>
              <figure>
                <?php echo wp_get_attachment_image($item_bg, 'full'); ?>
              </figure>
            <?php endif; ?>
            <?php if ($item_title) : ?>
              <p class="h3"><?php echo $item_title; ?></p>
            <?php endif; ?>
            <?php if ($item_text) : ?>
              <p>
                <?php echo $item_text; ?>
              </p>
            <?php endif; ?>
            <?php if ($item_link) :
              $link_url = $item_link['url'];
              $link_title = $item_link['title'];
              $link_target = $item_link['target'] ? $item_link['target'] : '_self';
            ?>
              <div class="btn-wrap">
                <a class="btn-default btn-border" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>