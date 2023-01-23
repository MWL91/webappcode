<?php get_header() ?>
<article>
    <div class="container">
        <div class="row justify-content-start">
            <?php
            if (have_posts()) :
                while (have_posts()) {
                    the_post();
                    get_template_part('elements/post-card');
                }
            ?>
            <?php else : ?>
                <h1>No posts found</h1>
            <?php endif; ?>
        </div>
    </div>
</article>
<?php get_footer(); ?>