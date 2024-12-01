<?php get_header(); ?>

<div class="main-content">
    <?php
    // Include the slider part
    get_template_part( 'template-parts/slider' );

    // Display the main content area (e.g., a static page or dynamic content)
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>

<?php
// Retrieve the custom notice and styling options
$custom_notice = get_option('custom_notice');
$notice_color = get_option('custom_notice_color', '#ffcc00');
$text_color = get_option('custom_notice_text_color', '#000000');

// Only display if custom notice exists
if ($custom_notice) :
    echo '<div class="custom-notice-banner" style="background-color: ' . esc_attr($notice_color) . '; color: ' . esc_attr($text_color) . ';">';
    echo esc_html($custom_notice);
    echo '</div>';
endif;
?>
