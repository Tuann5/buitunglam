<section id="comunication">
    <div class="dummy"></div>
    <div class="container">
        <div class="section-title">
            <h3><span class="primary-color">Truyền thông</span><span class="secondary-color"> & Sự kiện</span></h3>
        </div>

        <div class="section-content">
            <div class="column-1">  
                
                <?php  
                    $videoCommuniQuery = new WP_Query(array(
                        'posts_per_page' => 1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'video',
                            ),
                        ),
                    ));

                    while($videoCommuniQuery -> have_posts()) {
                        $videoCommuniQuery -> the_post();
                ?>
                    <div class="embedded-media item-center">
                        <?php 
                            $iframe = get_field('embedded_video');

                            echo $iframe;
                        ?>
                    </div>
                    
                    <a href="<?php echo get_permalink(); ?>" class="read-detail">
                        <h3><?php echo get_the_title(); ?></h3>
                    </a>
                    <p class="excerpt"><?php echo displayExcerptOrContent(get_the_excerpt(), get_the_content(), 30); ?></p>                 
                <?php
                    }
                    wp_reset_postdata();
                ?>                     
            </div>
            <div class="column-2">
                <div class="related-items">
                    <?php
                        $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'post',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'video',
                                    'operator' => 'NOT IN',
                                ),
                            ),
                        );

                        $comuniQuery = new WP_Query($args);

                        while($comuniQuery -> have_posts()) {
                            $comuniQuery -> the_post();
                    ?>
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
                    <?php
                        }
                        wp_reset_postdata();
                ?>
                </div>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-secondary">Xem thêm <i class="fa-solid fa-angles-right"></i></a> 
            </div>
        </div>
    </div>
</section>