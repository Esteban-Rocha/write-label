<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Write_Label
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<?php 
		$color = get_field('color_hero', get_the_ID());

		if($color == NULL){
			$color = get_field('color_hero_page', get_the_ID());
			
			if($color == NULL) {
				$color = get_field('color_hero_parent', get_the_ID());

				if($color == NULL) {
					$color = get_field('color_hero_children', get_the_ID());

					if($color == NULL) {
						$color = get_field('color_hero_children_case', get_the_ID());
						
						if($color == NULL) {
							$color = '#F9F8F8';
						}
					}
				}
			}
		}

		
	 ?>

	<header id="masthead" class="site-header" style="background-color: <?php echo $color; ?>;">

		<div class="container-fluid">
			<div class="header">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				
				<a href="<?php echo get_permalink(get_page_by_path('Sign in')); ?>" class="btn-signin">Sign In</a>
				<div class="menu-mobile">
					
				</div>
			</div>

			<nav class="mobile-navigation">
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

		
	</header><!-- #masthead -->
