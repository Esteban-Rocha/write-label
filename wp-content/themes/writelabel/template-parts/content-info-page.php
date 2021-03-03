<section class="info page" style="background-color: <?php echo $args['color']; ?>;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="special"><?php echo strip_tags(get_field('title_info_page', 'option'), '<span>'); ?></h2>

				<p class="p1"><?php the_field('content_info_page', 'option'); ?></p>

				<a href="mailto:<?php the_field('email_contact'); ?>" class="btn-secondary btn-info">Contact Us</a>
			</div>
		</div>
	</div>
</section>