<?php get_header(); // Load default header by calling WP func w/o params ?> 

<div class="container">  
    <h1><?php the_title();?></h1></h1>
    <?php get_template_part('includes/section','content'); ?>  
</div>
      

<?php get_footer(); // Load footer by calling WP func ?> 