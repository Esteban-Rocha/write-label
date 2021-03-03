<section class="hero page" style="background-color: <?php the_field('color_hero'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="content">
					<p class="p1 special"><?php the_field('subtitle_hero_page'); ?></p>
					<h1><?php echo strip_tags(get_field('title_hero_page'), '<span>'); ?></h1>
					<a href="<?php echo get_permalink(get_page_by_path('Get Started')); ?>" class="btn-getstarted">Get Started</a>
				</div>
				
			</div>
			<div class="col-12 col-md-6">
				<div class="image">
					<img src="<?php the_field('image_hero_page'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>