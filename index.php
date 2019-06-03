
 <?php get_header();?>
 <!-- <h1>This is from index.php</h1> -->
 <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            
            <!-- <div class="thumbnail-img">
            <?php 
            // get_template_part('content', get_post_format()) ;
            ?>
            </div> -->
        <div class="container">
            <div>
                <?php the_title();?>
                <?php the_content();?>
            </div>
        </div>    
           
        <?php endwhile; ?>
    <?php endif; ?>
 <?php //get_sidebar(); ?>
<?php get_footer();?>


