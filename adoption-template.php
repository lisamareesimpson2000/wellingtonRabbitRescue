<?php
    /*
        Template Name: Adoption Template
    */
?>

<?php get_header(); ?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post() ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?php the_title(); ?></h2>
              
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
                'post_type' => 'adoption',
                'posts_per_page' => -1
            );
            $allAdoptposts = new WP_Query($args);
         ?>
         <?php if( $allAdoptposts->have_posts() ): ?>
             <div class="row">
                 <div class="col-sm-12 col-lg-12">
                     <div class="accordion" id="accordionExample">
                         <?php $cardNo = 1; ?>
                         <?php while( $allAdoptposts->have_posts() ): $allAdoptposts->the_post(); ?>
                             <div class="card">
                               <div class="card-header" id="heading<?php echo $cardNo; ?>">
                                 <h2 class="mb-0">
                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $cardNo; ?>">
                                       <?php the_title(); ?>
                                   </button>
                                 </h2>
                               </div>
                               <div id="collapse<?php echo $cardNo; ?>" class="collapse"  data-parent="#accordionExample">
                               
                                 <div class="card-body">
                                 <div class="">
                                     <?php the_post_thumbnail( 'thumbnail' ); ?>
                                     </div>
                                     <?php the_content(); ?>
                                       <small>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></small> 
                                    
                                 </div>
                               </div>
                             </div>

                             <?php $cardNo++; ?>
                         <?php endwhile; ?>
                     </div>
                     <br>
                 </div>
             </div>
             </div>
         <?php endif; ?>






    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>