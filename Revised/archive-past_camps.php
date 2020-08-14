<?php 
    $MAX_NUM_POSTS_SHOW = 3;

    $default_thumbnail = site_url() . '/wp-content/themes/myTheme/images/default.jpg'; 
    $words_per_min = 200;
?>


<?php get_header(); // Load secondary header by calling WP func w/ that param ?> 
<div class="page-wrap">
<div class="container">  

<!-- ********************************** -->
<!--      Render Past Camp Badges     -->
<!-- ********************************** -->

<div class= "camp-section" id="past-camps">
    <h2 class="d-flex justify-content-center"><br><br><br>Past Camps<br><br><br></h2>
    <div class="row">   
        <!-- Render preview badges of past camp custom posts. -->
        <?php 
       
        $args = array( 
            'post_type' => 'camps',
            'orderby' => 'ASC',
            'posts_per_page'=>-1
        ); 
        $query = new WP_Query( $args );
        $posts = $query->posts;

        foreach($posts as $post):
            // Continue if admin set a camp date (prevent error).
            if(get_post_meta($post->ID, 'campdatetime', true)):  
                    
                // Render camp badge if camp's datetime is after now.
                if( (double)get_field('campdatetime') < (double)date("YmdHis")):
                  

                    // Get featured thumbnail or set to default if none.
                    $thumbnail_url = '';
                    if( has_post_thumbnail() ){                
                        $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-small' );
                        $thumbnail_url = $imageid['0'];
                    } else {
                        // Default thumbnail.
                        $thumbnail_url = $default_thumbnail;
                    }?>


                    <div class="col-md-4">
                    <div class="card mb-4 box-shadow">                    
                    <!-- Card Image -->
                    <a href='<?php the_permalink();?>'> <img class="card-img-top" src="<?php echo $thumbnail_url ?>"                     
                        alt="<?php the_title();?>">
                    </a>

                    <!-- Card Contents -->
                    <div class="card-body">
                        <p class="card-text">
                        <b><?php the_title(); ?></b>
                        <?php the_excerpt() ?>
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group" >                    
                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href = '<?php the_permalink();?>';">View</button>
                        </div>
                        <?php 
                            $postcontent = get_post_field( 'post_content', $post->ID );
                            $wordcount = str_word_count( strip_tags( $postcontent ) );
                            
                            $readtime = round( $wordcount / $words_per_min ); 
                        ?>
                        
                        <small class="text-muted"><?php echo $readtime ?> mins</small>
                    </div>
                    </div>
                    </div>
                    </div>
            <?php endif; endif; ?>
        <?php endforeach; ?>       
    </div>

</div> <!-- end camp section -->
<!-- ********************************** -->
<!-- ********************************** -->
<br/><br/><br/><br/>
</div>
</div>
      
<?php get_footer(); // Load footer by calling WP func ?> 