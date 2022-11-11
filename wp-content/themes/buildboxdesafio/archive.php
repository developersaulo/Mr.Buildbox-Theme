<?php get_header(); ?>

<div class="container pt-5 pb-5">

    <h1><?php single_cat_title();?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <!-- Let's define some container card for the Post file -->
        <div class="card mb-4">
            <div class="card-body">

                <!-- Let's define the Thumbnail Size for the single Post file -->
                <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('smallest');?>" alt="Post" class="img-fluid img-roundradius"><br><br>

                <?php endif;?>

                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-warning">Read more</a><br><br>

            </div>
        </div>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>