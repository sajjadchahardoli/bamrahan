<?php get_header(); ?>

<main>

    <div>
        <?php
        echo do_shortcode('[smartslider3 slider="1"]');
        ?>
        <div class="w-11/12 shadow rounded-md my-5 mx-auto px-2 pt-2 pb-40">
            <h2>درباره ما</h2>
            <p>
                توضیحات درباره ما
            </p>
            <p>
                توضیحات درباره ما
            </p>
            <p>
                توضیحات درباره ما
            </p>
        </div>
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