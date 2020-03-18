<?php if( have_posts() ): 
    while( have_posts() ): the_post(); // If have post, while have, render post title.
?>

<div class="card mb-3">
<div class="card-body d-flex justify-content-center align-items-center">
    <?php if(has_post_thumbnail( )):?>
        <!-- Load large image for post (see functions.php) -->
        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title();?>"
        class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>

    <div class="blog-content">
        <h3><?php the_title(); // Render post title. ?></h3>
        <?php the_excerpt() // Render an exerpt of the post's content.?>
        <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a> 
    </div>
</div>    
</div>

<?php endwhile; else: endif; // End while loop?>