<?php if( have_posts() ): 
    while( have_posts() ): the_post(); // If have post, while have, render post
?>

<?php the_content() // Render the content.?>

<?php endwhile; else: endif; // End while loop?>