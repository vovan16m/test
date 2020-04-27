<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrapper">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
					<?php
				endif; 
				?>
				<?php if( have_rows('social_icons', 'option') ): ?>
				<div class="social-icons">
					<?php while( have_rows('social_icons', 'option') ): the_row(); 

					// vars
					$image = get_sub_field('icon');
					$link = get_sub_field('link'); 

					?> 
					
						<a href="<?php echo $link; ?>" target="_blank">
							<?php if( $image ): ?> 
								<?php echo file_get_contents($image['url']); ?>
							<?php endif; ?>
						</a>

					<?php endwhile; ?>
				</div>

				<?php endif; ?>

				
				
			</div><!-- .wrap -->
			
			<div class="footer_bottom">
				<div class="wrapper">
					 <?php get_template_part( 'template-parts/footer/site', 'info' );?>
				</div>				
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
