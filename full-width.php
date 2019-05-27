<?php /*Template Name: Full Width*/ ?>

<?php get_header('full');?>
    <h1>This is from Full-width.php </h1>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            <div class="">
                <h2><?php the_title(); ?></h2>
                <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <hr>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer();?>