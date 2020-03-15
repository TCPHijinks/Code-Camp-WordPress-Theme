<?php
/*
Template name: Contact Us
*/
?>

<?php get_header(); // Load header by calling WP func ?> 

<div class="container">  

    <h1><?php the_title();?></h1></h1>

    <div class="row">
        <div class="col-lg-6">
            Contact us form goes here
        </div>
        <div class="col-lg-6">
            <?php get_template_part('includes/section','content'); ?>  
        </div>
    </div>

    
    
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 