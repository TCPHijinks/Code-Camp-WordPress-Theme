<?php get_header(); // Load secondary header by calling WP func w/ that param ?> 

<div class="page-wrap">
    <div class="container">  

        <?php if(has_post_thumbnail( )):?>
            <div>HAS A IMAGE FEATURED</div>
            <!-- Load large image (see functions.php) for post -->
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title();?>"
            class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>

        <h1><?php the_title();?></h1></h1>
        <?php get_template_part('includes/section','blogcontent'); ?>          
    </div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 