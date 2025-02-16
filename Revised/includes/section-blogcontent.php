<!-- BLOG TEMPLATE THAT DISPLAYS BLOG CONTENT IN UNIQUE WAY -->
<?php if( have_posts() ): 
    while( have_posts() ): the_post(); // If have post, while have, render post
?>
    <p><?php echo get_the_date('d/m/Y h:i:s  -- l jS F, Y'); ?></p>
    <?php the_content(); // Render the content.?>

    <!-- Show author full name. -->
    <?php 
        $fname = get_the_author_meta( 'first_name'); 
        $lname = get_the_author_meta( 'last_name'); 
        $msg = $fname . ' ' . $lname; // Use echo to make appear on page.         
    ?>

    <!-- Show post tags as <a> links. -->
    <div>
        <?php    
        /*
            $tags = get_the_tags( ); // Get all post tags.
            if($tags):
                foreach($tags as $tag):?>
                    
                    <!-- Render all tags as styled <a> links -->
                    <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="badge badge-success">
                        <?php echo $tag->name; ?>
                    </a>
                    
                <?php endforeach; endif; */?>
   
    </div>
    
   
    <!-- Show categories as <a> links. -->
    <div>
        <?php /*
                $categories = get_the_category();
                foreach($categories as $cat): ?>

                    <a href="<?php echo get_category_link( $cat->term_id );?>" class="badge badge-primary">
                        <?php echo $cat->name; ?>
                    </a>
                    
                <?php endforeach; */?>
    </div>

    
    







<?php endwhile; else: endif; // End while loop?>