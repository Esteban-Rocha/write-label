<section class="hero children case" style="background-color: <?php the_field('color_hero_children_case'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content">
					<p class="p1"><span><?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?>:</span> <?php the_title(); ?></p>
					<h1><?php the_field('title_hero_children_case'); ?></h1>
					<?php $img = get_field('image_children_case'); ?>
					<div class="image">
						<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
					</div>					
				</div>				
			</div>
		</div>
	</div>
</section>