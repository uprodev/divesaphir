<?php

get_header();

?>
<?php
$title = get_field('first_title', 'option');
$subtitle = get_field('first_sub_title', 'option');
$image = get_field('first_background_image', 'option');
$link = get_field('link_button', 'option');
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
<section class="about about-text about-default">
	<div class="content-width">
		<?php the_post();
		the_content();
		?>
	</div>
</section>
<?php
get_footer();

?>