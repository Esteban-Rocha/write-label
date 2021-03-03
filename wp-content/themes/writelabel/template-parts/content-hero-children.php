<section class="hero children" style="background-color: <?php the_field('color_hero_children'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content">
					<p class="p1"><span><?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?>:</span> <?php the_title(); ?></p>
					<h1><?php the_field('title_hero_children'); ?></h1>
				</div>				
			</div>
		</div>
	</div>
</section>