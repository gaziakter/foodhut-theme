<?php get_header(); ?>
   
    <!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post() ?>
                     <?php echo get_template_part( 'template-parts/content', get_post_format(  ) ); ?>
                  <?php endwhile; ?>
                    <?php 
                  the_posts_pagination(array(
                    'prev_text' => __('Previous page', 'foodhut'),
                    'next_text' => __('Next page', 'foodhut'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'foodhut') . ' </span>',
                    ));
                    ?>
                  <?php else: ?>
                     <?php echo get_template_part( 'template-parts/content-none'); ?>
                  <?php endif; ?>             
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>