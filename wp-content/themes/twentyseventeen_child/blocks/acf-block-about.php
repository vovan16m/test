<?php
$block_unique_ID = $block['id'];  
?> 
<section id="about" class="<?php echo $block_unique_ID; ?>">
    <div class="wrapper">
        <?php if( have_rows('items') ): ?>
            <div class="items">
                <?php while ( have_rows('items') ) : the_row();?>
                    <div class="item">
                        <div class="icon">
                            <?php $image = get_sub_field('icon');
                            if( $image ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            <?php endif; ?>
                        </div>
                        <h4><?php the_sub_field('title');?></h4>
                        <p><?php the_sub_field('text');?></p>
                    </div>
                <?php endwhile; ?>
            </div> 
        <?php endif; ?>
    </div>
</section>