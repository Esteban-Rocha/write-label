<section class="hero children about" style="background-color: <?php the_field('color_hero'); ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content">
					<p class="p1"><?php the_title(); ?></p>
					<h1><?php echo strip_tags(get_field('title_hero'), '<span>'); ?></h1>
				</div>				
			</div>
		</div>
	</div>
</section>