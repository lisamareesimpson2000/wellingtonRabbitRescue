<?php /*Template Name: One Column*/ ?>

<?php get_header();?>
    <h1>This is from one-column.php </h1>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        
                            <h2><?php the_title(); ?></h2>
                            <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                        <form class="mx-auto">
                        <div class="form-group ">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

                            <div class="content mx-auto">
                                <?php the_content(); ?>
                                </div>
                        </form>
                    </div>
                    <hr>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer();?>