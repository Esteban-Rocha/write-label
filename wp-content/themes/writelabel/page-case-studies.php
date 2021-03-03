<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<?php get_template_part('template-parts/content', 'hero-parent', array('class' => 'case-studies-page')); ?>


<section class="case-studies page">
	<div class="container">
		<div class="row">
			<?php
			if( have_rows('case_studies') ):

			    // Loop through rows.
			    $i = 0;
			    while( have_rows('case_studies') ) : the_row();
			    	$i++;
			        // Load sub field value.
			        $case = get_sub_field('case');

			        $column = ($i > 2) ? 'col-md-4' : 'col-md-6'; ?>


					<div class="col-12 <?php echo $column; ?> item">
						<div class="image" style="border-bottom: 7px solid <?php echo $case['color']; ?>;">
							<?php $image = $case['image']; ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
						<h3>Case Study: <span><?php echo $case['case_name']; ?></span></h3>
						<h3><?php echo $case['title']; ?></h3>
						<a href="<?php echo $case['url']; ?>" class="text-link"><span>Read More<span></a>						
					</div>
			    <?php endwhile; 
			endif;
			?>
		</div>
	</div>
</section>



<?php get_template_part('template-parts/content', 'info-page', array('color' => '#F9F8F8')); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>