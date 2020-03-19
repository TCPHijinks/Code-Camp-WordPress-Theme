
<!-- THIS TEMPLATE LOADS THE POST CONTENT -->
<?php get_header(); ?> 

<div class="page-wrap">
    <div class="container">  

        <h1><?php the_title();?></h1>

        <?php if(has_post_thumbnail( )):?>           
            <!-- Load large image for post (see functions.php) -->
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title();?>"
            class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>

        
        
<div class="row">
        
            <div class="col-6">
                <?php get_template_part('includes/section','test_carscontent'); ?>
                <?php wp_link_pages();?>
            </div>

            <div class="col-6">
            <b> &&&&&&&&&&&&&&&&&&&</b>
            </div>
        </div>

                  
   


    </div>
    
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 