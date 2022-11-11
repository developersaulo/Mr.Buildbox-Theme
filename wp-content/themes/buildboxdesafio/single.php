<?php get_header(); ?>

<div class="container pt-5 pb-5">

    <h1><?php the_title();?></h1><br><br>

    <!-- Let's define the Thumbnail Size for the single Post file -->
    <?php if(has_post_thumbnail()):?>

    <img src="<?php the_post_thumbnail_url('largest');?>" alt="Post" class="img-fluid img-roundradius"><br><br><br>

    <?php endif;?>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>