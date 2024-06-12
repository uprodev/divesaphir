<?php
$logos = get_field('logos');
if (is_array($logos)) :
?>
  <section class="logo-block">
    <div class="content-width">
      <?php foreach ($logos as $logo) : ?>
        <div class="item">
          <?php echo wp_get_attachment_image($logo, 'full') ?>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>