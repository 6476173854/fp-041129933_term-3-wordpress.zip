<?php
/* Template Name: Custom Page with Sidebar */
get_header();
?>
<div class="page-content">
    <div class="main-content">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
    <div class="sidebar">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</div>
<?php get_footer(); ?>
