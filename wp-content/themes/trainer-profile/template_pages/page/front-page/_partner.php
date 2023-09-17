<section id="partner">
    <div class="dummy"></div>
    <div class="container">
        <div class="section-content">
            <div class="section-title">
                <h3 class="secondary-color">Những chuyên gia đồng hành</h3>
            </div>
            <div id="splide-partner" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">                        
                        <?php
                            $arrs = array(
                                'post_type' => 'partner',
                                'posts_per_page' => -1
                            );
                            $partnerQuery = new WP_Query($arrs);
                            while($partnerQuery -> have_posts()) {
                                $partnerQuery -> the_post();
                        ?>
                                <li class="splide__slide">
                                    <div class="card">
                                        <div class="image-content">
                                            <div class="card-image">
                                                <img src="<?php echo wp_get_attachment_url(get_field('avatar')); ?>" alt="" class="card-img">
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name"><?php echo get_field('nickname'); ?></h2>
                                            <p class="description">
                                                <?php echo displayExcerptOrContent(get_the_excerpt(), get_the_content(), 30); ?>
                                            </p>
                                            <a href="<?php echo get_permalink(); ?>" class="btn btn-secondary">Chi tiết</a>
                                        </div>
                                    </div>   
                                </li>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>          
        </div>
    </div>
</section>