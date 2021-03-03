<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Write_Label
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="blue">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3 footer-logo">
						<?php the_custom_logo(); ?>
					</div>
					<div class="col-12 col-md-7 navigation">
						<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
						</nav>
					</div>
					<div class="col-12 col-md-2 social">
						<div class="social-media">
							<a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/facebook.png'; ?>" alt="Facebook Account"></a>
							<a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/linkedin.png'; ?>" alt="Likeding Account"></a>
							<a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/twitter.png'; ?>" alt="Twitter Account"></a>
							<a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/instagram-black.png'; ?>" alt="Instagram Account"></a>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-lg-7 white">
						<p class="p3">&copy; <?php echo date('Y'); ?> Write Label. All rights reserved.</p>
						<p class="p3"><a href="<?php echo get_permalink(get_page_by_path('Privacy Policy')); ?>">Privacy Policy</a></p>
						<p class="p3"><a href="<?php echo get_permalink(get_page_by_path('Terms of Use')); ?>">Terms of Use</a></p>
						<p class="p3"><a href="<?php echo get_permalink(get_page_by_path('FAQ')); ?>">FAQ</a></p>
						<p class="p3"><a href="<?php echo get_permalink(get_page_by_path('Press')); ?>">Press</a></p>
					</div>
				</div>

				<div class="row mobile">					
					<div class="col-6 info-bottom">
						<p class="p3"><a href="<?php echo get_permalink(get_page_by_path('Privacy Policy')); ?>">Privacy Policy</a></p>
						<p class="p3"><a href="<?php echo get_permalink(get_page_by_path('Terms of Use')); ?>">Terms of Use</a></p>
						<p class="p3"><a href="<?php echo get_permalink(get_page_by_path('Press')); ?>">Press</a></p>
						<p class="p3"><a href="<?php echo get_permalink(get_page_by_path('FAQ')); ?>">FAQ</a></p>						
						<p class="p3">&copy; <?php echo date('Y'); ?> Write Label. <span>All rights reserved.</span></p>
					</div>
					<div class="col-6 social">
						<p><a href="<?php the_field('instagram', 'option'); ?>" class="p3" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/instagram-black.png'; ?>" alt="Instagram Account">Instagram</a></p>
						<p><a href="<?php the_field('facebook', 'option'); ?>" class="p3" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/facebook-black.png'; ?>" alt="Facebook Account">Facebook</a> </p>						
						<p><a href="<?php the_field('twitter', 'option'); ?>" class="p3" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/twitter-black.png'; ?>" alt="Twitter Account">Twitter</a></p>
						<p><a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/linkedin.png'; ?>" alt="Likeding Account">Linkedin</a></p>
					</div>					
				</div>
			</div>			
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php 
	if(is_page('faq') || is_page('press') || is_page('privacy-policy') || is_page('terms-of-use') || is_page('get-started')):

	else: ?>
		<a class="btn-sticky" href="<?php echo get_permalink(get_page_by_path('Get Started')); ?>">Get Started</a> 
	<?php endif;

	
 ?>



</body>
</html>
