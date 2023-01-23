<?php get_header(); ?>
<article>
    <div class="container">
        <?php
        if (have_posts()) :
            the_post();
        ?>
            <div class="row justify-content-center">
                <h1 class="text-center"><?php the_title(); ?></h1>
                <div class="fs-5 col-md-8">
                    <?php the_content(); ?>
                </div>
            </div>
            <div>
                <?php if (comments_open() || get_comments_number()) :
                    comments_template();
                endif; ?>
            </div>
        <?php else : ?>
            <h1>404</h1>
        <?php endif; ?>
    </div>
</article>
<?php get_footer(); ?>