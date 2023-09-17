<div class="related-item item">
    <div class="thumbnails">        
        <?php echo get_the_post_thumbnail(); ?>
    </div>
    <div>
        <a href="<?php echo get_permalink(); ?>" class="read-detail"><h3><?php echo wp_trim_words(get_the_title(), 20) ?></h3></a>
        <p class="excerpt">
            <?php echo displayExcerptOrContent(get_the_excerpt(), get_the_content(), 20); ?>
        </p>
    </div>                               
</div>  