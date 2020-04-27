<?php 
$block_unique_ID = $block['id'];  
$title = get_field('title');
?>
<section id="search" class="<?php echo $block_unique_ID; ?>">
    <div class="wrapper">
        <h3><?php echo $title;?></h3>
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"> 
            <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
            <button type="submit" class="search-submit"><?php echo twentyseventeen_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?></span></button>
        </form>
    </div>
</section>