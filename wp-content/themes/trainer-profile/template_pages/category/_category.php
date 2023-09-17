<?php 
    get_header();

    $categories = get_the_category();
    $categoryId = $categories[0]->cat_ID;
    $categoryName = get_cat_name($categoryId)
?>

    <main id="page">       
        <section class="page">
            <div class="dummy-fixed"></div>
            <div class="container">

                <!-- Title -->
                <?php  get_template_part(COMPONENT_CONTENT_PATH, "page-title", array('title' => $categoryName));  ?>    

                <!-- Partner content -->
                <div class="post-related py-2 page-sidebar">
                    <div class="related-items left-content">
                        <?php
                            while(have_posts()) {
                                the_post();    
                                get_template_part(COMPONENT_CONTENT_PATH, 'post-related');                
                            }

                            $args = array(
                                'format'    => 'page/%#%/', 
                                'prev_text' => '←', 
                                'next_text' => '→'
                            );
                            the_posts_pagination($args);

                            wp_reset_postdata();
                        ?>             
                    </div>

                    <?php get_template_part(COMPONENT_CONTENT_PATH, 'sidebar'); ?>
                </div>

            </div>
        </section>        
    </main>

<?php get_footer(); ?>