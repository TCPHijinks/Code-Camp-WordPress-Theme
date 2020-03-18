<?php get_header('secondary'); // Load secondary header by calling WP func w/ that param ?> 

<div class="page-wrap">
    <div class="container">  
        <h1><?php the_title();?></h1>

        <?php if(has_post_thumbnail( )):?>
            <!-- Load large image for post (see functions.php) -->
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title();?>"
            class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>

        <?php get_template_part('includes/section','content'); ?>  
    </div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 