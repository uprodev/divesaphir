<?php

get_header();

?>
<?php
$first_background_image = get_field('first_background_image', 'option');
$first_title = get_field('first_title', 'option');
$first_sub_title = get_field('first_sub_title', 'option');
$link = get_field('link_button', 'option');
?>
<section class="home-banner">
	<?php if ($first_background_image) : ?>
		<div class="bg">
			<?php echo wp_get_attachment_image($first_background_image, 'full'); ?>
		</div>
	<?php endif; ?>
	<div class="content-width">
		<div class="content">
			<div class="title-wrap">
				<?php if ($first_title) : ?>
					<h1><?php echo $first_title; ?></h1>
				<?php endif; ?>
				<?php if ($first_sub_title) : ?>
					<p class="sub-title"><?php echo $first_sub_title; ?></p>
				<?php endif; ?>
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

<?php $about_menu = get_field('blog_menu', 'option');
if (is_array($about_menu)) : ?>
	<nav class="menu-body">
		<div class="content-width">
			<ul>
				<?php foreach ($about_menu as $item) :
					$link = $item['link'];
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self'; ?>
					<li> <a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</nav>
<?php endif; ?>

<?php the_post();
$sub_title_top = get_field('sub_title_top', $post->ID);
$sub_title_bottom = get_field('sub_title_bottom', $post->ID);
$image_bottom = get_field('image_bottom', $post->ID);
$content_bottom = get_field('content_bottom', $post->ID); ?>

<section class="default-text">
	<div class="content-width">
		<ul class="breadcrumb">
			<?php if (function_exists('bcn_display')) {
				bcn_display();
			} ?>
		</ul>
		<div class="title">
			<div class="title-wrap">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="date">
				<p><?php the_date('d,m,Y'); ?></p>
			</div>
		</div>

		<div class="figure-wrap">
			<figure>
				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="Blog image">
			</figure>
			<div class="wrap">
				<div class="icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-17.png" alt="wave"></div>
				<?php if ($sub_title_top) : ?>
					<p class="title-figure"><?php echo $sub_title_top; ?></p>
				<?php endif; ?>
				<div class="icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-17.png" alt="wave"></div>
			</div>
		</div>
		<?php the_content(); ?>

		<div class="figure-wrap figure-wrap-revers">
			<?php if ($image_bottom) : ?>
				<figure>
					<img src="<?php echo wp_get_attachment_image_url($image_bottom, 'full'); ?>" alt="Blog image">
				</figure>
			<?php endif; ?>
			<div class="wrap">

				<div class="icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-17.png" alt="wave"></div>
				<?php if ($sub_title_bottom) : ?>
					<p class="title-figure"><?php echo $sub_title_bottom; ?></p>
				<?php endif; ?>
				<div class="icon-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-17.png" alt="wave"></div>
			</div>
		</div>

		<?php if ($content_bottom) : ?>
			<?php echo $content_bottom; ?>
		<?php endif; ?>



		<div class="bottom-nav">
			<div class="item item-link">
				<?php
				$previous_post = get_previous_post();
				if (!empty($previous_post)) : ?>
					<a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"><?php echo esc_html($previous_post->post_title); ?></a>
				<?php endif; ?>
			</div>
			<div class="item item-nav item-nav-prev">
				<?php
				$previous_post = get_previous_post();
				if (!empty($previous_post)) : ?>
					<a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"><i class="far fa-chevron-left"></i> previous</a>
				<?php endif; ?>
			</div>
			<div class="item item-nav item-nav-next">
				<?php
				$next_post = get_next_post();
				if (!empty($next_post)) : ?>
					<a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">next <i class="far fa-chevron-right"></i></a>
				<?php endif; ?>
			</div>
			<div class="item item-link">
				<?php
				$next_post = get_next_post();
				if (!empty($next_post)) : ?>
					<a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_html($next_post->post_title); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
$bg = get_field('bg-contact-us', 'option');
$title = get_field('title_contact', 'option');
$content = get_field('text_contact', 'option');
$teams = get_field('team_items', 'option');
$form_title = get_field('form_title', 'option');
$form_shortcode = get_field('form_shortcode', 'option');
?>
<section class="contact">
	<div class="bg">
		<?php if ($bg) :
			echo wp_get_attachment_image($bg, 'full');
		?>
		<?php endif; ?>
		<div class="marquee-line-top marquee-4">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="Wave" />
			</figure>
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/img/volna_top.png" alt="Wave" />
			</figure>
		</div>

		<div class="marquee-line marquee-4-1">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="Wave" />
			</figure>
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/img/volna_bottom.png" alt="Wave" />
			</figure>
		</div>
	</div>
	<div class="content-width">
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
									<img src="<?php echo get_template_directory_uri(); ?>/img/icon-11.png" alt="Wave" />
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
					<?php if ($form_title) : ?>
						<div class="title"><?php echo $form_title; ?></div>
					<?php endif; ?>
					<div class="icon-wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-13.png" alt="Form Title" />
					</div>
					<div class="">
						<?php echo do_shortcode($form_shortcode); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php

get_footer();

?>