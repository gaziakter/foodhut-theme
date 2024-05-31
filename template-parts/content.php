<div class="col-md-4 my-3 my-md-0">
    <a href="<?php the_permalink(); ?>" class="card bg-transparent border">
        <?php the_post_thumbnail(); ?>
        <div class="card-body">
        <?php $price = get_post_meta(get_the_ID(), 'price', true); ?>
            <h1 class="text-center mb-4"><a href="<?php the_permalink(); ?>" class="badge badge-primary">$<?php echo esc_html($price); ?></a></h1>
            <h4 class="pt20 pb20"><?php the_title(); ?></h4>
            <p class="text-white"><?php the_excerpt(); ?></p>
        </div>
    </a>
</div>

