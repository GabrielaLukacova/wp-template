<?php
/**
 * Single page template
 * #primary.content-area
 */
get_header();
?>
<div id="primary" class="content_area"></div>
<main id="main" class="site-main"></main>
<?php
    while(have_posts()):
        the_post();
        the_title();
        the_content();
        //get_template_part('template-parts/post/content');
    endwhile;
?>