<?php get_header(); // Load secondary header by calling WP func w/ that param ?> 

<div class="page-wrap">
<div class="container">  

    <section class="row">
 
        <div class="col-lg-3">
            <?php if( is_active_sidebar( 'page-sidebar' )):?>
               <?php dynamic_sidebar( 'page-sidebar' ); ?>
            <?php endif; ?>
        </div>

        <div class="col-lg-9">   
            <?php if(has_post_thumbnail() ):?>

                <!-- Load large image for post (see functions.php) -->
                <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title();?>"
                class="img-fluid mb-3 img-thumbnail">

            <?php endif;?>
            <h1><?php the_title();?></h1>
            <?php get_template_part('includes/section','content'); ?> 
        </div>

        
        
    </section>

</div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 