<?php if( have_posts() ): 
    while( have_posts() ): the_post(); // If have post, while have, render post title.
?>

<div class="card mb-3">
    <div class="card-body">
        <h3><?php the_title(); // Render post title. ?></h3>
        <?php the_excerpt() // Render an exerpt of the post's content.?>
        <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a> 
    </div>    
</div>

<?php endwhile; else: endif; // End while loop?>