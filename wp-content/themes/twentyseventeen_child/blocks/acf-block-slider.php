<?php
$block_unique_ID = $block['id'];  
?>
<section id="slider" class="<?php echo $block_unique_ID; ?>">
	<?php if( have_rows('slide') ): ?>
		<div class="owl-carousel">

			<?php while ( have_rows('slide') ) : the_row();?>

				<div class="item"> 

					<?php $image = get_sub_field('background_image');
					if( $image ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<?php endif; ?>

					<div class="wrapper">
						<div class="text-box">
							<h3><?php the_sub_field('title');?> </h3>
							<p><?php the_sub_field('text');?></p>
						</div> 
					</div>	 

				</div> 

			<?php endwhile; ?>

		</div>
	<?php endif; ?>
	<script>
		jQuery(function($){
			$( document ).ready(function() {
				$('.<?php echo $block_unique_ID; ?> .owl-carousel').owlCarousel({
					items:1,
					margin:10,
					loop:true,
					nav:true,
					autoHeight:true
				});
			});
		});
	</script>
</section>