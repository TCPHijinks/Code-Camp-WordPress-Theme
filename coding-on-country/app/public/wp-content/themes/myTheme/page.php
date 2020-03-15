<?php get_header('secondary'); // Load secondary header by calling WP func w/ that param ?> 

<div class="container">  
    <h1><?php the_title();?></h1></h1>
    <?php get_template_part('includes/section','content'); ?>  
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 