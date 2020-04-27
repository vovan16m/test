<?php 
$title = get_field('title');
$link_text = get_field('link_text'); 
$count = get_field('posts_count');
?>
<section id="latest_news">
    <div class="wrapper">
        <h4><?php echo $title;?></h4>
        <div class="items">
        <?php
        $args = array(
            'posts_per_page' => $count, 
            'post_type' => 'post' 
        );
        global $post;
	    $query = new WP_Query( $args ); 
        while ( $query->have_posts() ) { $query->the_post(); ?>
            <div class="item">
                <div class="img">
                    <?php  the_post_thumbnail('thumbnail'); ?>
                </div>
                <div class="text">
                    <h5><?php the_title(); ?></h5>
                    <p><?php do_excerpt(get_the_excerpt(), 17); ?></p>
                    <a href="<?php the_permalink();?>"><?php echo $link_text;?></a>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>