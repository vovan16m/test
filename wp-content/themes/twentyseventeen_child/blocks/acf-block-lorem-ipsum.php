<?php 
$block_unique_ID = $block['id'];  
$title = get_field('title');
$subtitle = get_field('subtitle');
$img_subtitle = get_field('img_subtitle');
$text = get_field('text');
$image = get_field('image');
?>
<div id="lorem-ipsum">
    <div class="wrapper">
        <h4><?php echo $title;?></h4>
        <div class="item">
            <div class="left-box">
                <?php  
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                
                <div class="subtitle">
                    <?php echo $img_subtitle;?>
                </div>
            </div>
            <div class="right-box">
                <h5><?php echo $subtitle;?></h5>
                <p><?php echo $text;?></p>
            </div>
        </div>
    </div>
</div>