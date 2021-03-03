<section class="testimonial-solution">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php $testimonials = get_field('testimonials', 'option'); ?>
				<div class="glide5">
					<div class="glide__track" data-glide-el="track">
							<div class="glide__slides">

								<?php foreach ($testimonials as $testimonial) { ?>
									<div class="glide__slide">
										<?php $item = $testimonial['testimonial']; ?>
										<div class="quote"><h2 class="special"><?php echo  "“" . trim(strip_tags($item['quote'] , '<span>')) . "”"; ?></h2></div>
										<div class="author"><p class="p2"><?php echo $item['author']; ?></p></div>
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
			</div>
		</div>
	</div>
</section>