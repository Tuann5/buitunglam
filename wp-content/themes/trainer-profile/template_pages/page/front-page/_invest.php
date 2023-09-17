<section id="invest">
    <div class="dummy"></div>
    <div class="container">
        <div class="section-content">
            <div class="section-title">
                <h3 class="secondary-color">Doanh nghiệp đã đầu tư</h3>
            </div>

            <div id="splide-invest" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                            $investQuery = new WP_Query (array(
                                'post_type' => 'investment',
                                'posts_per_page' => -1
                            ));

                            while($investQuery -> have_posts()) {
                                $investQuery -> the_post();

                        ?>
                            <li class="splide__slide">
                                <a href="<?php echo get_field('url'); ?>" target="_blank">
                                    <div class="invest-card">
                                        <div class="invest-img">
                                            <img src="<?php echo wp_get_attachment_url(get_field('logo')); ?>" alt="">
                                        </div>
                                    </div>
                                </a>
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