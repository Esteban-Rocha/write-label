<section class="hero" style="background-color: <?php the_field('color_hero'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7">
				<div class="content">
					<h1><?php echo strip_tags(get_field('title_hero'), '<div><span>'); ?></h1>
					<p class="p1"><?php the_field('content_hero'); ?></p>

					<a href="<?php echo get_permalink(get_page_by_path('Get Started')); ?>" class="btn-getstarted">Get Started</a>
				</div>
				
			</div>
			<div class="col-12 col-md-5">
				<div class="image">
					<?php $img = get_field('image_hero'); ?>
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>