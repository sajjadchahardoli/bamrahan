<?php get_header(); ?>

<main>
    <div>
        <?php
        echo do_shortcode('[smartslider3 slider="1"]');
        ?>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content/content', get_post_format());
            }
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>