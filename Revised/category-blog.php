<?php get_header(); // Load secondary header by calling WP func w/ that param ?> 

<div class="page-wrap">
    <div class="container">  
        THIS IS THE CATEGORY "BLOG" TEMPLATE (Runs instead of Archive.php)<br/>
        <b>Below is the current category name!</b>
        <section class="row">
        <!-- Widget Sidebar -->
        <div class="col-lg-3">
            <?php if( is_active_sidebar( 'blog-sidebar' )):?>
               <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            <?php endif; ?>
        </div>

        <!-- Blogs -->
        <div class="col-lg-9">
            <h1><?php echo single_cat_title( ); ?></h1>
            <?php get_template_part('includes/section','archive'); ?>   <!-- Loop that gens content -->

            <!-- Pagination - only show so many posts at once -->
            <?php 
                // Pagination pages.
                previous_posts_link();
                next_posts_link();
            ?>
        </div>
        </section>
        
        
      
    </div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 