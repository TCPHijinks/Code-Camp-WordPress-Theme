
<!-- THIS TEMPLATE LOADS THE POST CONTENT -->
<?php get_header(); ?> 




<div class="page-wrap">
    <div class="container salad">  



        <?php if(has_post_thumbnail( )):?>          
            <!-- Load large image for post (see functions.php) -->
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title();?>"
            class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_excerpt(); ?></p>

        


       
               
    </div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 