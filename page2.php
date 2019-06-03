
    <?php get_header();?>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            <div class="container">
                <div class="row">
                    <div class="col-6">

                    <h2><?php the_title(); ?></h2>
                        <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                        <div class="content">
                            <?php the_content(); ?>
                            <?php //the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- wrap in if statement to show our story? -->
                        <div class="content">
                            <?php the_content(); ?>
                            <?php //the_excerpt(); ?>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer();?>

    