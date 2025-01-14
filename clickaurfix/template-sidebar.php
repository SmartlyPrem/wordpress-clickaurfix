<?php /* Template Name: Page with Sidebar */ ?>
<?php get_header(); // load header ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>

		<!-- Header-->
		<?php if (pods_field_display('header_1_enable') == 'Yes'): ?>
			<header class="bg-dark pt-5">
				<div class="container px-5">
					<div class="row gx-5 align-items-center justify-content-center">
						<div class="col-lg-8 col-xl-7 col-xxl-6">
							<div class="my-5 text-center text-xl-start">
								<?php if (pods_field_display('heading')): ?>
									<h1 class="display-5 fw-bolder text-white mb-2"><?php echo pods_field_display('heading'); ?></h1>
								<?php endif; ?>
								<?php if (pods_field_display('sub_heading')): ?>
									<p class="lead fw-normal text-white-50 mb-4"><?php echo pods_field_display('sub_heading'); ?></p>
								<?php endif; ?>
								<div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
									<?php if (pods_field_display('button_1_text')): ?><a
											class="btn btn-primary btn-lg px-4 me-sm-3"
											href="<?php echo pods_field_display('button_1_link'); ?>"><?php echo pods_field_display('button_1_text'); ?></a><?php endif; ?>
									<?php if (pods_field_display('button_2_text')): ?><a class="btn btn-outline-light btn-lg px-4"
											href="<?php echo pods_field_display('button_2_link'); ?>"><?php echo pods_field_display('button_2_text'); ?></a><?php endif; ?>
								</div>
							</div>
						</div>
						<?php if (pods_image_url(pods_field('button_2_link'))): ?>
							<div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
									src="<?php echo pods_image_url(pods_field('button_2_link'), null); ?>" alt="..." /></div>
						<?php endif; ?>
					</div>
				</div>
			</header>
		<?php endif; ?>

		<?php if (pods_field_display('header_2_enable') == 'Yes'): ?>
			<header class="pt-5">
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

		<!-- close header -->

		<!-- start faqs -->
		<?php if ($post && preg_match('/vc_/', $post->post_content)): ?>
			<section <?php if (pods_field_display('enable_header_2') == 'Yes')
				echo ' class="pb-5" ';
			else
				echo ' class="py-5"'; ?>>
				<div class="container px-5">
					<div class="row gx-5">
						<div class="col-xl-8">
							<div class="entry-content"><?php the_content(); ?></div>
						</div>
						<div class="col-xl-4">
							<div class="card border-0 bg-light mt-xl-5">
								<div class="card-body p-4 py-lg-5">
									<div class="align-items-center justify-content-center" id="sidebar">
										<?php dynamic_sidebar('right-sidebar'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</section>
			<?php else: ?>
				<section>
					<div class="container px-5">
						<div class="row gx-5">
							<div class="col-xl-8">
								<div class="entry-content"><?php the_content(); ?></div>
							</div>
							<div class="col-xl-4">
								<div class="card border-0 bg-light mt-xl-5">
									<div class="card-body p-4 py-lg-5">
										<div class="align-items-center justify-content-center">
											<?php dynamic_sidebar('right-sidebar'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php get_footer(); // load footer ?>