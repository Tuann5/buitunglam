<?php 
    get_header();
    $currentPost = get_the_ID();
?>

    <main id="page">       
        <section class="page">
            <div class="dummy-fixed"></div>
            <div class="container">

                <!-- Title -->
                <?php  get_template_part(COMPONENT_CONTENT_PATH, "page-title", array('title' => 'Chuyên gia đồng hành'));  ?>    

                <!-- Partner content -->
                <div class="partner-content section-content">   
                    <div class="cart-title">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="<?php echo wp_get_attachment_url(get_field('avatar')); ?>" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="partner-infor">
                            <h2 class="name"><?php echo get_field('gender').': '.get_field('nickname'); ?></h2>
                            <h3><i><?php echo get_field('position'); ?></i></h3>
                        </div>
                    </div>                                           
                    <div class="description">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>

            </div>
        </section>        
    </main>

<?php get_footer(); ?>