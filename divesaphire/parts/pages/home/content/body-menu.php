<?php
$body_menu = get_field('blog_menu', 'option');
if (is_array($body_menu)) :
?>
  <nav class="menu-body">
    <div class="content-width">
      <ul>
        <?php foreach ($body_menu as $item) :
          $link = $item['link'];
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <li> <a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
<?php endif; ?>