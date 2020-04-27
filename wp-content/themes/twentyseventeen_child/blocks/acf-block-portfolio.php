<?php 
$block_unique_ID = $block['id'];  
$title = get_field('title');
$count = get_field('posts_count');
?>
<section id="portfolio" class="<?php echo $block_unique_ID; ?>">
    <div class="wrapper">
        <h4><?php echo $title; ?></h4>
        <?php
        $args = array(
            'posts_per_page' => $count, 
            'post_type' => 'portfolio' 
        );
        global $post;
	    $query = new WP_Query( $args ); 
        ?>
        <div class="owl-carousel">
            <?php while ( $query->have_posts() ) { $query->the_post(); ?>

                <?php if ( has_post_thumbnail()) { ?>
                <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="portfolio" data-title="<?php the_title(); ?>">
                    <?php  the_post_thumbnail('portfolio-thumb'); ?>
                    <div class="title"><?php the_title(); ?></div>
                </a> 
                
            <?php }  } ?>
        </div>
    </div>
    <script>
		jQuery(function($){
			$( document ).ready(function() {
				$('.<?php echo $block_unique_ID; ?> .owl-carousel').owlCarousel({
					items:4,
					margin:10,
                    loop:true,
                    dots: false,
					nav:true,
                    autoHeight:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:true
                        },
                        600:{
                            items:3,
                            nav:false
                        },
                        1000:{
                            items:4,
                            nav:true,
                            loop:false
                        }
                    }
				});
			});
		});
	</script>
</section>