<?php 
    get_header();
    $currentPost = get_the_ID();
?>

    <main id="page">       
        <section class="page">
            <div class="dummy-fixed"></div>
            <div class="container">

                <!-- Title -->
                <?php  get_template_part(COMPONENT_CONTENT_PATH, "page-title");  ?>    

                <div class="single-container">
                    <div class="section-content">  
                        <div class="single-page page-sidebar">
                            <div class="current-post left-content">
                                <div class="single-title">
                                    <h1 class="not-upper-case"><?php the_title(); ?></h1>
                                </div>

                                <div class="post-meta-data">
                                    <?php   
                                        $auth_id =  get_post_field ('post_author', $currentPost);
                                        $avatar_url = get_avatar_url($auth_id);
                                        echo '<img src="'.$avatar_url.'" alt="" class="avatar">';
                                    ?>
                                    <p><b><?php echo get_the_author_meta('display_name', $auth_id); ?></b> - Ngày đăng: <?php echo get_the_date('d/m/Y H:i') ?></p>
                                </div>

                                <!-- post videos category -->
                                <div class="embedded-media flex-item-center">
                                    <?php 
                                        $iframe = get_field('embedded_video');

                                        echo $iframe;
                                    ?>
                                </div>
                                
                                <!-- Content of post -->
                                <div class="mr-top-1"></div>
                                <?php echo get_the_content(); ?>

                                <!-- Related post -->
                                <div class="post-related py-2">
                                    <h3>Tin gần đây</h3>
                                    <div class="related-items">
                                        <?php
                                            $args = array (
                                                'posts_per_page' => 3,
                                                'post__not_in' => array($currentPost)
                                            );
                                            $relatedQuery = new WP_Query($args);

                                            while($relatedQuery -> have_posts()) {
                                                $relatedQuery -> the_post();
                                                
                                                get_template_part(COMPONENT_CONTENT_PATH, 'post-related');
                                                
                                            }
                                            wp_reset_postdata();
                                        ?>                
                                    </div>
                                </div>
                            </div>

                            <?php get_template_part(COMPONENT_CONTENT_PATH, 'sidebar'); ?>
                            
                        </div>                     
                    </div>
                </div>
            </div>
        </section>        
    </main>

<?php get_footer(); ?>