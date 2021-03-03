<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part('template-parts/content', 'hero-page'); ?>

<section class="characteristics">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="image">
					<?php $img = get_field('image_characteristics'); ?>
					<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				</div>
			</div>
		</div>
		
		<?php
		if( have_rows('characteristics') ):
		    // Loop through rows.
		    while( have_rows('characteristics') ) : the_row();
		        // Load sub field value.
		        $characteristic = get_sub_field('characteristic'); ?>
		       <div class="row item">
			        <div class="col-12 col-md-6">
			        	<h2><?php echo $characteristic['title']; ?></h2>
			        </div>
					<div class="col-12 col-md-6">
						<p class="p2"><?php echo $characteristic['description']; ?></p>
					</div>
			   </div>
		    <?php endwhile; 
		endif;
		?>	
	</div>
</section>

<?php get_template_part('template-parts/content', 'info-page',  array('color' => '#F9F8F8')); ?>

<?php get_template_part('template-parts/content', 'contributors'); ?>

<?php get_template_part('template-parts/content', 'creatives'); ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>