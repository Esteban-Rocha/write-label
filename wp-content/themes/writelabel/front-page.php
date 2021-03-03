<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<?php get_template_part('template-parts/content', 'hero'); ?>

<?php get_template_part('template-parts/content', 'info'); ?>


<section class="questions">
	<div class="container">
		<div class="row">

			<div class="col-12">
				<h2 class="mobile"><?php the_field('title_questions'); ?></h2>
			</div>
			

			<div class="col-12 col-md-6 list-questions">
				<h2 class="special"><?php the_field('title_questions'); ?></h2>

				<div>
					<?php
					if( have_rows('questions') ):

					    // Loop through rows.
					    while( have_rows('questions') ) : the_row();
					        // Load sub field value.
					        $question = get_sub_field('question'); ?>
					       
					        <div class="item question">
								<h3><?php echo $question['title']; ?></h3>
								<p class="p2"><?php echo $question['answer']; ?></p>
							</div>
					    <?php endwhile; 
					endif;
					?>				
				</div>
			</div>

			<div class="col-12 col-md-6 img">
				<div class="image">
					<img src="<?php the_field('image_questions'); ?>" alt="Find a great copywriter for your ad script, website, and more">
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content', 'contributors'); ?>

<section class="testimonials">
	<!-- Begin Inner Container -->
	<div class="innerContainer">
		<?php $testimonials = get_field('testimonials', 'option'); ?>

		<!-- Begin Sliders -->
		<div class="sliders d-flex">
			<div id="glide0" class="glide">
				<div class="glide__track" data-glide-el="track">
						<div class="glide__slides fade">
							<?php foreach ($testimonials as $testimonial) { ?>
								<div class="glide__slide">
									<?php $item = $testimonial['testimonial']; ?>
									<div class="quote"><h2><?php echo "“" . trim(strip_tags($item['quote'], '<span>')) . "”"; ?></h2></div>
									<div class="author"><?php echo $item['author']; ?></div>
								</div>
							<?php } ?>
						</div>
				</div>

				<div class="glide__bullets onlyMobile" data-glide-el="controls[nav]">
					<?php foreach ($testimonials as $key => $value) { ?>
						<button class="glide__bullet" data-glide-dir="=<?php echo $key; ?>"></button>
					<?php } ?>
				</div>

				<a href="<?php the_field('button_link_testimonial', 'option'); ?>" class="btn btn-secondary">View Case Studies</a>
			</div>
			<div id="glide1" class="glide round">
				<div class="glide__track" data-glide-el="track">
						<div class="glide__slides">
							<?php foreach ($testimonials as $testimonial) { 
								$item = $testimonial['testimonial'];
								$image = $item['image']; ?>
								<div class="glide__slide"><div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>"></div></div>
							<?php } ?>
						</div>
				</div>
			</div>
			<div id="glide2" class="glide round">
				<div class="glide__track" data-glide-el="track">
						<div class="glide__slides">
							<?php foreach ($testimonials as $testimonial) { 
								$item = $testimonial['testimonial'];
								$image = $item['image']; ?>
								<div class="glide__slide"><div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>"></div></div>

							<?php } ?>
						</div>
				</div>
			</div>
			<div id="glide3" class="glide round">
				<div class="glide__track" data-glide-el="track">
						<div class="glide__slides">
							<?php foreach ($testimonials as $testimonial) { 
								$item = $testimonial['testimonial'];
								$image = $item['image']; ?>
								<div class="glide__slide"><div class="image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>"></div></div>

							<?php } ?>
						</div>
				</div>
			</div>
		</div>
		<!-- End Sliders -->

	</div>
	<!-- End Inner Container -->
</section>


<section class="client-logos">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php echo strip_tags(get_field('title_clients'), '<span>'); ?></h2>
			</div>

			<?php
			if( have_rows('list_clients') ):

			    // Loop through rows.
			    while( have_rows('list_clients') ) : the_row();
			        // Load sub field value.
			        $client = get_sub_field('image'); ?>
			       
			        <div class="col-4 col-md-2 item">
						<img src="<?php echo $client['url']; ?>" alt="<?php echo $client['alt']; ?>">
					</div>
			    <?php endwhile; 
			endif;
			?>
		</div>
	</div>
</section>
			

<?php endwhile; // end of the loop. ?>




<?php get_footer(); ?>