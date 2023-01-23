<div class="col-md-3">
    <div class="card">
        <?php the_post_thumbnail('medium', ['class' => "card-img-top"]) ?>
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <div class="card-text"><?php the_short(100); ?></div>
            <a href="<?php the_guid(); ?>" class="btn btn-primary">Read more</a>
        </div>
    </div>
</div>