<?php get_header(); // Load secondary header by calling WP func w/ that param ?> 
<div class="page-wrap">
<div class="container">  
<section class="row">
    <!-- Widget Sidebar -->
    <div class="col-lg-3">
        <?php if( is_active_sidebar( 'blog-sidebar' )):?>
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        <?php endif; ?>
    </div>
    <div class="col-lg-9">
        <h1><marquee>CARS 4 SALE 2! ?</marquee></h1>
       

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