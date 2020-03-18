<?php get_header(); // Load secondary header by calling WP func w/ that param ?> 

<div class="page-wrap">
    <div class="container">  
        <h1><?php the_title();?></h1></h1>
        <?php get_template_part('includes/section','blogcontent'); ?>  
    </div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 