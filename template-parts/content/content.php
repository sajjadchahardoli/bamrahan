<article id="post-<?php the_ID(); ?>" <?php post_class('w-11/12 h-auto rounded-xl shadow mt-5 mx-auto overflow-hidden'); ?> >
    <div class="">
        <header>
            <div class="w-full ro">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('post-thumbnail', ['class' => 'w-full h-auto']);
                }
                ?>
            </div>
            <?php the_title('<h1 class="entry-header text-xl font-bold " >', '</h1>') ?>

        </header>
        <div>
            <?php the_excerpt() ?>
        </div>
    </div>
</article>