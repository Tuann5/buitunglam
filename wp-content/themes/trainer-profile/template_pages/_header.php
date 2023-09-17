<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
     <!-- Navigation -->
    <nav id="main-nav" class="main-nav">
        <?php  
            $navId = 'navbar';
            $top = '';
            if(is_front_page()) {
                $navId = 'home-navbar';
                $top = 'top';
            }
        ?>
        <div id="<?php echo $navId ?>" class="nav <?php echo $top ?>">
            <div class="container">
                <div class="logo">
                    <!-- <a href="#" class="" id="logo"><img src="images/logo-white.svg" alt=""></a> -->
                    <a href="<?php echo get_home_url(); ?>" id="logo-white"><img src="<?php echo get_my_theme_custom_image('logo-white.svg') ?>" alt=""></a>
                </div>
                <div id="menu" class="socical">
                    <div class="desktop-nav nav-icons">
                        <a href="<?php echo get_home_url(); ?>">Home</a>
                        <?php if(is_front_page()) { ?>
                            <a href="#purpose">Mục đích</a>
                            <a href="#profile">Kinh nghiệm</a>
                            <a href="#activity">Hoạt động</a>
                            <a href="#partner">Chuyên gia</a>
                            <a href="#cta">10x value</a>
                            <a href="#invest">Đầu tư</a>
                        <?php } ?>
                        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Truyền thông</a>
                    </div>

                    <div class="mobile-nav">
                        <div class="dropdown">
                            <a class="drop-btn"><i class="fa-solid fa-bars fa-2x"></i>
                            </a>
                            <div class="dropdown-content nav-icons">
                                <a href="<?php echo get_home_url(); ?>">Home</a>
                                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Truyền thông</a>
                            </div>
                        </div>
                    </div>

                    <!-- <a href="#0">Home</a>
                    <a href="#0">Bài viết</a> -->


                    <!-- <a href="#purpose">purpose</a>
                    <a href="#profile">profile</a>
                    <a href="#activity">activity</a>
                    <a href="#activity">activity</a>
                    <a href="#partner">partner</a>
                    <a href="#comunication">comunication</a> -->

                    <!-- <a href="http://facebook.com" target="_blank"><i
                            class="fa-brands fa-square-facebook fa-2xl"></i></a>
                    <a href="http://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                    <a href="http://tiktok.com" target="_blank"><i class="fa-brands fa-tiktok fa-2xl"></i></a>
                    <a href="http://youtube.com" target="_blank"><i class="fa-brands fa-square-youtube fa-2xl"></i></a> -->
                </div>
            </div>
        </div>
    </nav>