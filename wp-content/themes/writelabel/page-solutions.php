<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<?php get_template_part('template-parts/content', 'hero-parent', array('class' => 'solutions')); ?>

<section class="solutions-items">
	<div class="container">

		<?php
		if( have_rows('solutions_list') ):

		    // Loop through rows.
		    while( have_rows('solutions_list') ) : the_row();
		        // Load sub field value.
		        $solution = get_sub_field('solution'); ?>
		       
		        <div class="row item">
					<div class="col-12 col-md-6">
						<div class="image">
							<?php $image = $solution['image']; ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="content">
							<h2><?php echo $solution['title']; ?></h2>
							<p class="p2"><?php echo $solution['excerpt']; ?></p>
							<a class="btn-secondary" href="<?php echo $solution['link']; ?>">Learn More</a>
						</div>						
					</div>
				</div>

		    <?php endwhile; 
		endif;
		?>		
		
	</div>
</section>


<section class="full-range">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="special">Browse our <span>full range</span> of services</h2>
			</div>
		</div>
	</div>
	<div class="carrousel">
		<div class="content">
			<div class="item left">
				<a href="#" class="yellow">Branded Content Ideation</a>
				<a href="#" class="orange">Greeting Card Verses</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">Branded Content Ideation</a>
				<a href="#" class="orange">Greeting Card Verses</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">Branded Content Ideation</a>
				<a href="#" class="orange">Greeting Card Verses</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">Branded Content Ideation</a>
				<a href="#" class="orange">Greeting Card Verses</a>
				<a href="#" class="blue">Social Media Posts</a>
			</div>
			<div class="item right">
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">E-commerse Copywriting</a>
				<a href="#" class="orange">Draft Ad Script</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">E-commerse Copywriting</a>
				<a href="#" class="orange">Draft Ad Script</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">E-commerse Copywriting</a>
				<a href="#" class="orange">Draft Ad Script</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">E-commerse Copywriting</a>
				<a href="#" class="orange">Draft Ad Script</a>
			</div>
			<div class="item left">
				<a href="#" class="yellow">Branded Content Ideation</a>
				<a href="#" class="orange">Greeting Card Verses</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">Branded Content Ideation</a>
				<a href="#" class="orange">Greeting Card Verses</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">Branded Content Ideation</a>
				<a href="#" class="orange">Greeting Card Verses</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">Branded Content Ideation</a>
				<a href="#" class="orange">Greeting Card Verses</a>
				<a href="#" class="blue">Social Media Posts</a>
			</div>
			<div class="item right">
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">E-commerse Copywriting</a>
				<a href="#" class="orange">Draft Ad Script</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">E-commerse Copywriting</a>
				<a href="#" class="orange">Draft Ad Script</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">E-commerse Copywriting</a>
				<a href="#" class="orange">Draft Ad Script</a>
				<a href="#" class="blue">Social Media Posts</a>
				<a href="#" class="yellow">E-commerse Copywriting</a>
				<a href="#" class="orange">Draft Ad Script</a>
			</div>
		</div>
	</div>
	
</section>


<section class="case-studies">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h2 class="special"><?php echo strip_tags(get_field('title_case_studies'), '<span>'); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			if( have_rows('case_studies') ):

			    // Loop through rows.
			    while( have_rows('case_studies') ) : the_row();
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

<?php get_template_part('template-parts/content', 'info-page', array('color' => '#F9F8F8')); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>