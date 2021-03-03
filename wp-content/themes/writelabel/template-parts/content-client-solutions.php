<section class="client-solutions" style="background-color: <?php echo $args['color']; ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php the_field('title_client_solutions'); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			if( have_rows('client_solutions') ):

			    // Loop through rows.
			    while( have_rows('client_solutions') ) : the_row();
			        // Load sub field value.
			        $solutions = get_sub_field('solutions'); ?>			       
					<div class="col-12 col-md-4">
						<div class="image" style="border-bottom: 7px solid <?php echo $solutions['color']; ?>;">
							<?php $image = $solutions['image']; ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
						
						<h3><?php echo $solutions['title']; ?></h3>
						<a href="<?php echo $solutions['url']; ?>" class="text-link"><span>Read More<span></a>						
					</div>
			    <?php endwhile; 
			endif;
			?>
		</div>
		<div class="row">
			<div class="col-12"><a href="<?php the_field('all_solutions_url') ?>" class="btn btn-secondary">View All Solutions</a></div>
		</div>
	</div>
</section>