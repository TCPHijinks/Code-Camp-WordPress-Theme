<?php get_header(); // Load secondary header by calling WP func w/ that param ?> 

<div class="page-wrap">
<div class="container">  
<section class="row">
   
    <div class="col-lg-9">
        <h1><?php echo single_tag_title( ); ?></h1>
            <?php get_template_part('includes/section','archive'); ?>   <!-- Loop that gens content -->

            <!-- Pagination - only show so many posts at once -->
            <?php 
                // Pagination pages.
                previous_posts_link();
                next_posts_link();
            ?>
    </div>
</div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 