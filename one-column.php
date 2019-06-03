<?php /*Template Name: One Column*/ ?>

<?php get_header();?>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        
                            <h2><?php the_title(); ?></h2>
                            <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                        <form class="mx-auto">
                            <div class="form-group ">
                                <label type="name" >Name:</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Enter name">
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputEmail1">Email address:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="comment">Message:</label>
                                <textarea class="form-control" rows="5" id="comment" placeholder="Enter message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                            <div class="content mx-auto">
                                <?php the_content(); ?>
                                </div>
                                <br>
                        </form>
                    </div>
                    <hr>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer();?>