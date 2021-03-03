<section class="hero page parent <?php echo $args['class']; ?> started" style="background-color: <?php the_field('color_hero_parent'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7">
				<div class="content">
					<p class="p1 special"><?php the_title(); ?></p>
					<h1><?php echo strip_tags(get_field('title_hero_parent'), '<span>'); ?></h1>
					<p class="p1"><?php the_field('content_hero_parent'); ?></p>
				</div>
				
			</div>
			<div class="col-12 col-md-5">
				<div class="image">
					<img src="<?php the_field('image_hero_parent'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>