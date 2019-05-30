<?php get_header(); ?>
<h1>This is from front-page.php</h1>

<?php
$search = get_search_form( $echo );
// var_dump($search);
// die();
?>
<?php
        $side = get_theme_mod('sidebar_position');
        if($side === 'left'){
            $sidebarOrder = 'order-0';
            $contentorder = 'order-1';
        } else {
            $sidebarOrder = 'order-1';
            $contentorder = 'order-0';
        }
     ?>

    <div class="row mb-5">

        <?php if( have_posts() ): ?>
            <div class="col <?php echo $contentorder; ?>">
                <div class="row">
                    <?php while( have_posts() ): the_post() ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if( is_active_sidebar('sidebar-1') ): ?>
            <div class="col-3 <?php echo $sidebarOrder; ?> ">
                <div class="card bg-light p-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

<h3><?php echo get_theme_mod('custom_background_colour_setting'); ?></h3>

    <?php
        $carePostID = get_theme_mod('custom_background_colour_setting');
        if($carePostID)
    ?>

        <?php
            $args = array(
                'p' => get_theme_mod('custom_background_colour_setting')
            );
            $carePost = new WP_Query($args);
         ?>

         <?php if($carePost->have_posts()): ?>
             <?php while( $carePost->have_posts() ): $carePost->the_post(); ?>
                 <div class="row">
                     <div class="col-12">
                         <h4>Care Post</h4>
                     </div>
                 </div>
                 <div class="row mb-5">
                     <div class="col-12">
                         <div class="card">
                             <h4><?php the_title(); ?></h4>
                             <div class="">
                                 <?php the_excerpt(); ?>
                             </div>
                             <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">Check out the Care Post</a>
                         </div>
                     </div>
                 </div>
             <?php endwhile; ?>
         <?php endif; ?>

   

<?php get_footer(); ?>