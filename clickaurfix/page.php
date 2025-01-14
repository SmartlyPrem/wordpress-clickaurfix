<?php get_header(); // load header ?>
<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>

		<!-- Header-->
		<?php if (pods_field_display('header_1_enable') == 'Yes'): ?>
			<?php if (pods_image_url(pods_field('background_image'))): ?>
			<style>
				.hero-section-bg-img {
					background-image: url(<?php if (pods_image_url(pods_field('background_image'))):
						echo pods_image_url(pods_field('background_image'), null); endif; ?>);
					background-size: cover;
					background-position: center;
				}
				.hero-bg-color{
					background-color: rgba(0, 0, 0, 0.80);
				}
			</style>
			<?php endif; ?>
			<header class="bg-dark py-5 hero-section-bg-img">
				<div class="container px-5 hero-bg-color">
					<div class="row gx-5 align-items-center justify-content-center">
						<div class="col-lg-8 col-xl-7 col-xxl-6">
							<div class="my-5 text-center text-xl-start">
								<?php if (pods_field_display('super_heading')): ?>
									<p class="fs-[20px] fw-light text-white-50 mb-4"><?php echo pods_field_display('super_heading'); ?>
									</p>
								<?php endif; ?>
								<?php if (pods_field_display('heading')): ?>
									<h1 class="display-5 fw-bolder text-white mb-2"><?php echo pods_field_display('heading'); ?></h1>
								<?php endif; ?>
								<?php if (pods_field_display('sub_heading')): ?>
									<p class="lead fw-normal text-white-50 mb-4"><?php echo pods_field_display('sub_heading'); ?></p>
								<?php endif; ?>
								<div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
									<?php if (pods_field_display('button_1_text')): ?><a class="btn btn-primary btn-lg px-4 me-sm-3"
											href="<?php echo pods_field_display('button_1_link'); ?>"><?php echo pods_field_display('button_1_text'); ?></a><?php endif; ?>
									<?php if (pods_field_display('button_2_text')): ?><a class="btn btn-outline-light btn-lg px-4"
											href="<?php echo pods_field_display('button_2_link'); ?>"><?php echo pods_field_display('button_2_text'); ?></a><?php endif; ?>
								</div>
							</div>
						</div>
						<?php if (pods_image_url(pods_field('right_image'))): ?>
							<div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
									src="<?php echo pods_image_url(pods_field('right_image'), null); ?>" alt="..." /></div>
						<?php endif; ?>
					<uv>
				</div>
			</header>
		<?php endif; ?>

		<?php if (pods_field_display('header_2_enable') == 'Yes'): ?>
			<header class="py-5">
				<div class="container px-5">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-xxl-6">
							<div class="text-center my-5">
								<?php if (pods_field_display('heading_2')): ?>
									<h1 class="fw-bolder mb-3"><?php echo pods_field_display('heading_2'); ?></h1><?php endif; ?>
								<?php if (pods_field_display('sub_heading_2')): ?>
									<p class="lead fw-normal text-muted mb-4"><?php echo pods_field_display('sub_heading_2'); ?></p>
								<?php endif; ?>
								<?php if (pods_field_display('button_text')): ?><a class="btn btn-primary btn-lg"
										href="<?php echo pods_field_display('button_link'); ?>"><?php echo pods_field_display('button_text'); ?></a><?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</header>
		<?php endif; ?>

		<?php if ($post && preg_match('/vc_/', $post->post_content)): ?>
			<div class="entry-content"><?php the_content(); ?></div>
		<?php else: ?>
			<section class="py-5">
				<div class="container px-5 my-5">
					<div class="entry-content"><?php the_content(); ?></div>
				</div>
			</section>
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); // load footer ?>