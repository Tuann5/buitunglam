<?php 
    get_header();
    require_once get_template_directory() . '/core/const/common-constant.php';
?>
 
    <main id="home-page">
        <!-- hero -->
        <?php get_template_part(TEMPLATE_FRONT_PAGES_PATH . '_hero') ?>

        <!-- purpose -->
        <?php get_template_part(TEMPLATE_FRONT_PAGES_PATH . '_purpose') ?>

        <!-- Profile -->
        <?php get_template_part(TEMPLATE_FRONT_PAGES_PATH . '_profile') ?>

        <!-- activity -->
        <?php get_template_part(TEMPLATE_FRONT_PAGES_PATH . '_activity') ?>

        <!-- partner -->
        <?php get_template_part(TEMPLATE_FRONT_PAGES_PATH . '_partner') ?>

        <!-- CTA -->
        <?php get_template_part(TEMPLATE_FRONT_PAGES_PATH . '_cta') ?>

        <!-- invest -->
        <?php get_template_part(TEMPLATE_FRONT_PAGES_PATH . '_invest') ?>

        <!-- comunication -->
        <?php get_template_part(TEMPLATE_FRONT_PAGES_PATH . '_communication') ?>
    </main>

<?php get_footer() ?>
