
<?php
    /*
        Template Name: Care Template
    */
?>

<?php get_header(); ?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post() ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?php the_title(); ?></h2>
                <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-6 mx-auto">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <?php
            $args = array(
                'post_type' => 'care',
                'posts_per_page' => -1
            );
            $allCareposts = new WP_Query($args);
            // var_dump($);
            // die();
         ?>
         <?php if( $allCareposts->have_posts() ): ?>
             <div class="row">
                 <div class="col-sm-12">
                     <div class="accordion" id="accordionExample">
                         <?php $cardNumber = 1; ?>
                         <?php while( $allCareposts->have_posts() ): $allCareposts->the_post(); ?>
                             <div class="card">
                               <div class="card-header" id="heading<?php echo $cardNumber; ?>">
                                 <h2 class="mb-0">
                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $cardNumber; ?>">
                                       <?php the_title(); ?>
                                   </button>
                                 </h2>
                               </div>
                               <div id="collapse<?php echo $cardNumber; ?>" class="collapse"  data-parent="#accordionExample">
                                 <div class="card-body">
                                     <?php the_content(); ?>
                                 </div>
                               </div>
                             </div>

                             <?php $cardNumber++; ?>
                         <?php endwhile; ?>
                     </div>
                     <br>
                 </div>
                 <div class="col col-lg-6">
                     <!-- search -->
                    <?php
                        $search = get_search_form( $echo );
                        // var_dump($search);
                        // die();
                    ?>
                    <?php
                        // An array of arguments
                        $args = array( 'arg_1' => 'val_1', 'arg_2' => 'val_2' );

                        // The Query
                        $the_query = new WP_Query( $args );

                        // The Loop
                        if ( $the_query->have_posts() ) {

                            while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                // Your code here
                            endwhile;

                        } else {
                                // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();

                        ?>
                 </div>
             </div>
             </div>
         <?php endif; ?>






    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>