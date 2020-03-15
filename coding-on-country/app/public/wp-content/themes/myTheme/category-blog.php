<?php get_header(); // Load secondary header by calling WP func w/ that param ?> 

<div class="page-wrap">
    <div class="container">  
        THIS IS THE CATEGORY "BLOG" TEMPLATE (Runs instead of Archive.php)
        <?php get_template_part('includes/section','archive'); ?>   <!-- Loop that gens content -->

        <!-- Pagination - only show so many posts at once -->
        <?php 
            // Pagination pages.
            previous_posts_link();
            next_posts_link();
        ?>
      
    </div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 