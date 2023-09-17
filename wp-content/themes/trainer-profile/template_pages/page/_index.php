<?php get_header() ?>

    <main id="page">       
        <section class="page">
            <div class="dummy-fixed"></div>
            <div class="container">
                
            <!-- Title -->
            <?php  get_template_part(COMPONENT_CONTENT_PATH, "page-title");  ?>    

            <div class="py-2">  
                <div class="page-sidebar">
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
                        ?>
                        
                    </div>
                        <?php get_template_part(COMPONENT_CONTENT_PATH, 'sidebar'); ?>
                </div>
                </div>
            </div>
        </section>        
    </main>
    
<?php get_footer(); ?>