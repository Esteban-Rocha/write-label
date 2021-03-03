<section class="case-studies solution">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><span>Case Studies:</span> <?php the_title(); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			if( have_rows('case_studies_solution') ):

			    // Loop through rows.
			    while( have_rows('case_studies_solution') ) : the_row();
			        // Load sub field value.
			        $case = get_sub_field('case'); ?>			       
					<div class="col-12 col-md-4">
						<div class="image" style="border-bottom: 7px solid <?php echo $case['color']; ?>;">
							<?php $image = $case['image']; ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
						
						<h3><?php echo $case['title']; ?></h3>
						<a href="<?php echo $case['url']; ?>" class="text-link"><span>Read More<span></a>						
					</div>
			    <?php endwhile; 
			endif;
			?>
		</div>
		<div class="row">
			<div class="col-12"><a href="<?php the_field('all_case_url'); ?>" class="btn btn-secondary">View All Case Studies</a></div>
		</div>
	</div>
</section>