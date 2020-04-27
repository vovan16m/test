<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<?php if( have_rows('header_contacts', 'option') ): ?>
	<section class="top-header">
		<div class="wrapper">
			<ul>
			<?php while( have_rows('header_contacts', 'option') ): the_row(); 

				// vars
				$image = get_sub_field('icon');
				$link = get_sub_field('link'); 
				$text = get_sub_field('text'); 
				?> 
				<li>
					<a href="<?php echo $link;?>" target="_blank">
						<?php if( $image ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<?php endif; ?>
						<?php echo $text;?>
					</a>
				</li>
				<?php endwhile; ?> 
			</ul>
		</div>
	</section>
	<?php endif; ?>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<section class="main-header">
			<div class="wrapper">
				<?php if ( is_front_page() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				<?php endif; ?>
			</div>
		</section>

	 


		

	</header><!-- #masthead -->

 

	<div class="site-content-contain">
		<div id="content" class="site-content">
