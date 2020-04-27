 
<?php get_header(); ?>
<div id="primary" class="content-area1">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </main> 
</div><!-- .content-area --> 
<?php get_footer(); ?>