<?php get_header(); ?>

<main>
    <div>
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